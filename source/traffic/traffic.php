<?php
// Traffic extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/traffic

class YellowTraffic {
    const VERSION = "0.8.16";
    public $yellow;         // access to API
    public $days;           // number of days
    public $views;          // number of views

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("trafficDays", 30);
        $this->yellow->system->setDefault("trafficLinesMax", 8);
        $this->yellow->system->setDefault("trafficLogDirectory", "/var/log/apache2/");
        $this->yellow->system->setDefault("trafficAccessFile", "(.*)access.log");
        $this->yellow->system->setDefault("trafficSpamFilter", "bot|crawler|spider|checker|localhost");
    }

    // Handle command
    public function onCommand($command, $text) {
        switch ($command) {
            case "traffic": $statusCode = $this->processCommandTraffic($command, $text); break;
            default:        $statusCode = 0;
        }
        return $statusCode;
    }

    // Handle command help
    public function onCommandHelp() {
        return "traffic [days location]\n";
    }
    
    // Process command to create traffic analytics
    public function processCommandTraffic($command, $text) {
        $statusCode = 0;
        list($days, $location) = $this->yellow->toolbox->getTextArguments($text);
        if (empty($location) || substru($location, 0, 1)=="/") {
            if ($this->checkStaticSettings()) {
                $statusCode = $this->processRequests($days, $location);
            } else {
                $statusCode = 500;
                $this->days = $this->views = 0;
                $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
                echo "ERROR checking files: Please configure CoreStaticUrl in file '$fileName'!\n";
            }
            echo "Yellow $command: $this->days day".($this->days!=1 ? "s" : "").", ";
            echo "$this->views view".($this->views!=1 ? "s" : "")."\n";
        } else {
            $statusCode = 400;
            echo "Yellow $command: Invalid arguments\n";
        }
        return $statusCode;
    }
    
    // Analyse and show traffic
    public function processRequests($days, $location) {
        if (empty($location)) $location = "/";
        if (empty($days)) $days = $this->yellow->system->get("trafficDays");
        $path = $this->yellow->system->get("trafficLogDirectory");
        $regex = "/^".basename($this->yellow->system->get("trafficAccessFile"))."$/";
        $fileNames = array_reverse($this->yellow->toolbox->getDirectoryEntries($path, $regex, true, false));
        list($statusCode, $content, $files, $search, $sites, $errors) = $this->analyseRequests($days, $location, $fileNames);
        if ($statusCode==200) {
            $this->showRequests($content, "Popular content");
            $this->showRequests($files, "Popular files");
            $this->showRequests($search, "Search queries");
            $this->showRequests($sites, "Referring sites");
            $this->showRequests($errors, "Error pages");
        }
        return $statusCode;
    }
    
    // Analyse log file requests
    public function analyseRequests($days, $locationFilter, $fileNames) {
        $this->days = $this->views = 0;
        $content = $files = $search = $sites = $errors = $clients = array();
        if (!empty($fileNames)) {
            $statusCode = 200;
            $timeStart = $timeFound = time();
            $timeStop = time() - (60*60*24*$days);
            $percentShown = -1;
            $staticUrl = $this->yellow->system->get("coreStaticUrl");
            list($scheme, $address, $base) = $this->yellow->lookup->getUrlInformation($staticUrl);
            $locationSearch = $this->yellow->system->get("searchLocation");
            $spamFilter = $this->yellow->system->get("trafficSpamFilter");
            $locationDownload = $this->yellow->system->get("coreDownloadLocation");
            $locationIgnore = "(".$this->yellow->system->get("coreMediaLocation")."|".$this->yellow->system->get("editLocation").")";
            foreach ($fileNames as $fileName) {
                if ($this->yellow->system->get("coreDebugMode")>=2) echo "YellowTraffic::analyseRequests file:$fileName\n";
                $fileHandle = @fopen($fileName, "r");
                if ($fileHandle) {
                    $filePos = filesize($fileName)-1;
                    $fileTop = -1;
                    while (($line = $this->getFileLinePrevious($fileHandle, $filePos, $fileTop, $dataBuffer))!==false) {
                        if (preg_match("/^(\S+) (\S+) (\S+) \[(.+)\] \"(\S+) (.*?) (\S+)\" (\S+) (\S+) \"(.*?)\" \"(.*?)\"$/", $line, $matches)) {
                            list($line, $ip, $dummy1, $dummy2, $timestamp, $method, $uri, $protocol, $status, $size, $referer, $userAgent) = $matches;
                            $timeFound = strtotime($timestamp);
                            if ($timeFound<$timeStop) break;
                            $percent = $this->getProgressPercent(($timeStart-$timeFound)/3600, 24*$days, 5, 95);
                            if ($percentShown!=$percent) {
                                $percentShown = $percent;
                                echo "\rCreating traffic analytics $percent%... ";
                            }
                            $location = $this->getLocation($uri);
                            $referer = $this->getReferer($referer, "$address$base/");
                            $url = $this->getUrl($scheme, $address, $base, $location);
                            $urlSearch = $this->getUrlSearch($scheme, $address, $base, $location, $locationSearch);
                            $urlSite = $this->getUrlSite($referer);
                            if ($status<400) {
                                $clientsRequestThrottle = substru($timestamp, 0, 17).$method.$location;
                                if (isset($clients[$ip]) && $clients[$ip]==$clientsRequestThrottle) {
                                    if (!isset($sites[$urlSite])) $sites[$urlSite] = 0;
                                    --$sites[$urlSite];
                                    continue;
                                }
                                $clients[$ip] = $clientsRequestThrottle;
                                if ($status==206 || ($status>=301 && $status<=303)) continue;
                                if (!$this->checkRequestArguments($method, $location, $referer)) continue;
                                if (!preg_match("#^$base$locationFilter#", $location)) continue;
                                if ($spamFilter!="none" && preg_match("#$spamFilter#i", $referer.$userAgent)) continue;
                                if (preg_match("#^$base$locationDownload#", $location)) {
                                    if (!isset($files[$url])) $files[$url] = 0;
                                    ++$files[$url];
                                }
                                if (preg_match("#^$base$locationIgnore#", $location) && $locationFilter=="/") continue;
                                if (preg_match("#^$base/robots\.txt#", $location) && $locationFilter=="/") continue;
                                if (!isset($content[$url])) $content[$url] = 0;
                                ++$content[$url];
                                if (!isset($sites[$urlSite])) $sites[$urlSite] = 0;
                                ++$sites[$urlSite];
                                if (!isset($search[$urlSearch])) $search[$urlSearch] = 0;
                                ++$search[$urlSearch];
                                ++$this->views;
                            } else {
                                if (!preg_match("#^$base$locationFilter#", $location)) continue;
                                if ($spamFilter!="none" && preg_match("#$spamFilter#i", $referer.$userAgent)) continue;
                                $entry = $this->getUrl($scheme, $address, $base, $location)." - ".$this->getStatusFormatted($status);
                                if (!isset($errors[$entry])) $errors[$entry] = 0;
                                ++$errors[$entry];
                            }
                        }
                    }
                    fclose($fileHandle);
                } else {
                    $statusCode = 500;
                    echo "ERROR reading log files: Can't read file '$fileName'!\n";
                }
            }
            unset($sites["-"]);
            unset($search["-"]);
            if ($locationFilter!="/") $search = array();
            $this->days = $timeStart!=$timeFound ? $days : 0;
            echo "\rCreating traffic analytics 100%... done\n";
        } else {
            $statusCode = 500;
            $path = $this->yellow->system->get("trafficLogDirectory");
            echo "ERROR reading log files: Can't find files in directory '$path'!\n";
        }
        return array($statusCode, $content, $files, $search, $sites, $errors);
    }
    
    // Show top requests
    public function showRequests($data, $text) {
        uasort($data, "strnatcasecmp");
        $data = array_reverse(array_filter($data, function ($value) {
            return $value>0;
        }));
        $data = array_slice($data, 0, $this->yellow->system->get("trafficLinesMax"));
        if (!empty($data)) {
            echo "$text\n\n";
            foreach ($data as $key=>$value) {
                echo "$value - $key\n";
            }
            echo "\n";
        }
    }
    
    // Check static settings
    public function checkStaticSettings() {
        return preg_match("/^(http|https):/", $this->yellow->system->get("coreStaticUrl"));
    }
    
    // Check request arguments
    public function checkRequestArguments($method, $location, $referer) {
        return (($method=="GET" || $method=="POST") && substru($location, 0, 1)=="/" && ($referer=="-" || substru($referer, 0, 4)=="http"));
    }
    
    // Return location, decode file-encoding and URL-encoding
    public function getLocation($uri) {
        $uri = preg_replace_callback("#(\\\x[0-9a-f]{2})#", function ($matches) {
            return chr(hexdec($matches[1]));
        }, $uri);
        return rawurldecode(($pos = strposu($uri, "?")) ? substru($uri, 0, $pos) : $uri);
    }
    
    // Return referer, decode file-encoding and URL-encoding
    public function getReferer($referer, $refererSelf) {
        $referer = preg_replace_callback("#(\\\x[0-9a-f]{2})#", function ($matches) {
            return chr(hexdec($matches[1]));
        }, $referer);
        $referer = rawurldecode($referer);
        if (preg_match("#^(\w+:\/\/[^/]+)$#", $referer)) $referer .= "/";
        return preg_match("#$refererSelf#", $referer) ? "-" : $referer;
    }
    
    // Return URL
    public function getUrl($scheme, $address, $base, $location) {
        return "$scheme://$address$location";
    }

    // Return search URL, if available
    public function getUrlSearch($scheme, $address, $base, $location, $locationSearch) {
        $locationSearch = $base."(.*)".$locationSearch."query".$this->yellow->toolbox->getLocationArgumentsSeparator();
        $urlSearch = preg_match("#^$locationSearch([^/]+)/$#", $location) ? ("$scheme://$address".strtoloweru($location)) : "-";
        return str_replace(array("%", "\x1c", "\x1d", "\x1e", "\x20"), array("%25", "%1C", "%1D", "%1E", "%20"), $urlSearch);
    }
    
    // Return referring site URL, if available
    public function getUrlSite($referer) {
        list($scheme, $address, $base) = $this->yellow->lookup->getUrlInformation($referer);
        return ($scheme=="http" || $scheme=="https") ? "$scheme://$address" : "-";
    }
    
    // Return human readable status
    public function getStatusFormatted($statusCode) {
        return $this->yellow->toolbox->getHttpStatusFormatted($statusCode, true);
    }
    
    // Return progress in percent
    public function getProgressPercent($now, $total, $increments, $max) {
        $percent = intval(($max / $total) * $now);
        if ($increments>1) $percent = intval($percent / $increments) * $increments;
        return min($max, $percent);
    }
    
    // Return previous text line from file, false if not found
    public function getFileLinePrevious($fileHandle, &$filePos, &$fileTop, &$dataBuffer) {
        if ($filePos>=0) {
            $line = "";
            $lineEndingSearch = false;
            $this->getFileLineBuffer($fileHandle, $filePos, $fileTop, $dataBuffer);
            $endPos = $filePos - $fileTop;
            for (;$filePos>=0; --$filePos) {
                $currentPos = $filePos - $fileTop;
                if ($dataBuffer===false) {
                    $line = false;
                    break;
                }
                if ($dataBuffer[$currentPos]=="\n" && $lineEndingSearch) {
                    $line = substru($dataBuffer, $currentPos+1, $endPos-$currentPos).$line;
                    break;
                }
                if ($currentPos==0) {
                    $line = substru($dataBuffer, $currentPos, $endPos-$currentPos+1).$line;
                    $this->getFileLineBuffer($fileHandle, $filePos-1, $fileTop, $dataBuffer);
                    $endPos =  $filePos-1 - $fileTop;
                }
                $lineEndingSearch = true;
            }
        } else {
            $line = false;
        }
        return $line;
    }
    
    // Update text line buffer
    public function getFileLineBuffer($fileHandle, $filePos, &$fileTop, &$dataBuffer) {
        if ($filePos>=0) {
            $top = intval($filePos / 4096) * 4096;
            if ($fileTop!=$top) {
                $fileTop = $top;
                fseek($fileHandle, $fileTop);
                $dataBuffer = fread($fileHandle, 4096);
            }
        }
    }
}
