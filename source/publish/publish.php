<?php
// Publish extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/publish

class YellowPublish {
    const VERSION = "0.8.34";
    public $yellow;         // access to API
    public $extensions;     // number of extensions
    public $errors;         // number of errors

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("publishSourceCodeDirectory", "/My/Documents/GitHub/");
    }

    // Handle command
    public function onCommand($command, $text) {
        switch ($command) {
            case "publish": $statusCode = $this->processCommandPublish($command, $text); break;
            default:        $statusCode = 0;
        }
        return $statusCode;
    }

    // Handle command help
    public function onCommandHelp() {
        return "publish [directory]\n";
    }
    
    // Process command to publish extensions
    public function processCommandPublish($command, $text) {
        $statusCode = 0;
        list($path) = $this->yellow->toolbox->getTextArguments($text);
        $pathRepository = rtrim($this->yellow->system->get("publishSourceCodeDirectory"), "/")."/";
        $pathRepositoryOffical = $pathRepository."yellow-extensions/";
        $path = rtrim(empty($path) ? $pathRepositoryOffical : $pathRepository.$path, "/")."/";
        if (is_dir($pathRepository) && is_dir($pathRepositoryOffical) && is_dir($path)) {
            $this->extensions = $this->errors = 0;
            $statusCode = max($statusCode, $this->updateExtensionDirectory($path, $pathRepositoryOffical));
            $entries = $this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/.*/", true, true);
            foreach ($entries as $entry) {
                echo "\rPublishing extension files ".$this->getProgressPercent($this->extensions, count($entries), 10, 95)."%... ";
                $statusCode = max($statusCode, $this->updateExtensionDirectory("$entry/", $pathRepositoryOffical));
            }
            echo "\rPublishing extension files 100%... done\n";
        } elseif ($this->yellow->system->get("publishSourceCodeDirectory")!="/My/Documents/GitHub/") {
            $statusCode = 500;
            $this->extensions = 0;
            $this->errors = 1;
            $path = !is_dir($pathRepositoryOffical) ? $pathRepositoryOffical : $path;
            echo "ERROR publishing files: Can't find directory '$path'!\n";
        } else {
            $statusCode = 500;
            $this->extensions = 0;
            $this->errors = 1;
            $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
            echo "ERROR publishing files: Please configure PublishSourceCodeDirectory in file '$fileName'!\n";
        }
        echo "Yellow $command: $this->extensions extension".($this->extensions!=1 ? "s" : "");
        echo ", $this->errors error".($this->errors!=1 ? "s" : "")."\n";
        return $statusCode;
    }
    
    // Update extension directory
    public function updateExtensionDirectory($path, $pathRepositoryOffical) {
        $statusCode = 200;
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        if (is_file($fileNameExtension)) {
            $statusCode = max($statusCode, $this->updateExtensionInformation($path));
            $statusCode = max($statusCode, $this->updateExtensionDocumentation($path));
            $statusCode = max($statusCode, $this->updateExtensionArchive($path, $pathRepositoryOffical));
            $statusCode = max($statusCode, $this->updateExtensionLatest($path, $pathRepositoryOffical));
            if (defined("DEBUG") && DEBUG>=1) {
                list($extension, $version) = $this->getExtensionInformationFromSource($path);
                echo "YellowPublish::updateExtensionDirectory ".ucfirst($extension)." $version<br/>\n";
            }
            ++$this->extensions;
            if ($statusCode!=200) ++$this->errors;
        }
        return $statusCode;
    }
    
    // Update extension information file
    public function updateExtensionInformation($path) {
        $statusCode = 200;
        list($extension, $version, $published, $fileNameSource) = $this->getExtensionInformationFromSource($path);
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        if (is_file($fileNameExtension) && !empty($extension) && !empty($version)) {
            $url = $this->yellow->system->get("updateExtensionUrl")."/raw/master/zip/".strtoloweru("$extension.zip");
            $settings = new YellowArray();
            $fileData = $this->yellow->toolbox->readFile($fileNameExtension);
            $fileDataNew = "";
            foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
                if (preg_match("/^\s*(.*?)\s*:\s*(.*?)\s*$/", $line, $matches)) {
                    if (lcfirst($matches[1])=="extension") $line = "Extension: ".ucfirst($extension)."\n";
                    if (lcfirst($matches[1])=="version") $line = "Version: $version\n";
                    if (lcfirst($matches[1])=="downloadUrl") $line = "DownloadUrl: $url\n";
                    if (lcfirst($matches[1])=="published") $line = "Published: ".date("Y-m-d H:i:s", $published)."\n";
                    if (lcfirst($matches[1])=="status" && $matches[2]=="unpublished") $line = "";
                    if (lcfirst($matches[1])=="type") $line = "Tag: $matches[2]\n";
                    if (!empty($matches[1]) && !empty($matches[2]) && strposu($matches[1], "/")) {
                        $matches[2] = preg_replace("/,(\S)/", ", $1", $matches[2]);
                        $line = "$matches[1]: $matches[2]\n";
                        $fileNameDestination = $matches[1];
                        if (!$this->yellow->lookup->isValidFile($this->yellow->toolbox->normaliseTokens($fileNameDestination))) {
                            $statusCode = 500;
                            echo "ERROR publishing files: File '$fileNameDestination' is not possible!\n";
                        }
                    }
                    if (!empty($matches[1]) && !strempty($matches[2])) $settings[$matches[1]] = $matches[2];
                }
                $fileDataNew .= $line;
            }
            if (!empty($fileNameSource)) {
                $fileNameClass = basename($fileNameSource);
                if ($extension!=$this->yellow->lookup->normaliseName($fileNameClass, true, true)) {
                    $statusCode = 500;
                    $class = "Yellow".ucfirst($extension);
                    echo "ERROR publishing files: Class '$class' and file '$fileNameClass' is not possible!\n";
                }
            }
            if ($fileData!=$fileDataNew) {
                if (!$this->yellow->toolbox->createFile($fileNameExtension, $fileDataNew)) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Can't write file '$fileNameExtension'!\n";
                }
            }
            if ($settings->get("status")!="unlisted") {
                if (!$settings->isExisting("helpUrl") || !$settings->isExisting("downloadUrl")) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Please configure HelpUrl and DownloadUrl in file '$fileNameExtension'!\n";
                }
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateExtensionInformation file:$fileNameExtension<br/>\n";
        }
        return $statusCode;
    }

    // Update extension documentation file
    public function updateExtensionDocumentation($path) {
        $statusCode = 200;
        list($extension, $version) = $this->getExtensionInformationFromSettings($path);
        $regex = "/^.*\\".$this->yellow->system->get("coreContentExtension")."$/";
        foreach ($this->yellow->toolbox->getDirectoryEntries($path, $regex, true, false) as $entry) {
            $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
            if (preg_match("/^(\xEF\xBB\xBF)?([\w ]+[0-9\.]{5,}[\r\n]+)(\=+[\r\n]+)(.*)$/s", $fileData, $parts)) {
                $parts[2] = ucfirst($extension)." ".$version."\n";
                $parts[3] = str_repeat("=", strlenu($parts[2])-1)."\n";
                $fileDataNew = $parts[1].$parts[2].$parts[3].$parts[4];
            }
            if ($fileData!=$fileDataNew) {
                if (!$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Can't write file '$entry'!\n";
                }
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateExtensionDocumentation file:$entry<br/>\n";
        }
        return $statusCode;
    }
    
    // Update extension ZIP archive
    public function updateExtensionArchive($pathSource, $pathRepositoryOffical) {
        $statusCode = 200;
        list($extension) = $this->getExtensionInformationFromSettings($pathSource);
        $fileNameExtension = $pathSource.$this->yellow->system->get("updateExtensionFile");
        if (is_file($fileNameExtension) && !empty($extension)) {
            $zip = new ZipArchive();
            $fileNameZipArchive = $pathRepositoryOffical."zip/".strtoloweru("$extension.zip");
            if (is_file($fileNameZipArchive)) $this->yellow->toolbox->deleteFile($fileNameZipArchive);
            if ($zip->open($fileNameZipArchive, ZIPARCHIVE::CREATE)===true) {
                $modified = 0;
                $fileNamesRequired = $this->getExtensionFileNamesRequired($pathSource);
                $fileNamesFound = $this->yellow->toolbox->getDirectoryEntriesRecursive($pathSource, "/.*/", true, false);
                foreach ($fileNamesFound as $fileName) {
                    if (!isset($fileNamesRequired[$fileName])) continue;
                    $fileNameSource = $fileNamesRequired[$fileName];
                    $zip->addFile($fileName, $fileNameSource);
                    $modified = max($modified, $this->yellow->toolbox->getFileModified($fileName));
                    unset($fileNamesRequired[$fileName]);
                }
                if (!empty($fileNamesRequired)) {
                    $statusCode = 500;
                    foreach ($fileNamesRequired as $key=>$value) {
                        echo "ERROR publishing files: Can't find file '$key'!\n";
                    }
                }
                if (!$zip->close() || !$this->yellow->toolbox->modifyFile($fileNameZipArchive, $modified)) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Can't write file '$fileNameZipArchive'!\n";
                }
            } else {
                $statusCode = 500;
                echo "ERROR publishing files: Can't write file '$fileNameZipArchive'!\n";
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateExtensionArchive file:$fileNameZipArchive<br/>\n";
        }
        return $statusCode;
    }
    
    // Update extension latest file
    public function updateExtensionLatest($pathSource, $pathRepositoryOffical) {
        $statusCode = 200;
        list($extension, $version, $published, $status) = $this->getExtensionInformationFromSettings($pathSource);
        $fileNameExtension = $pathSource.$this->yellow->system->get("updateExtensionFile");
        $fileNameLatest = $pathRepositoryOffical.$this->yellow->system->get("updateLatestFile");
        if (is_file($fileNameExtension) && is_file($fileNameLatest) && $status!="unlisted") {
            $fileDataExtension = $this->yellow->toolbox->readFile($fileNameExtension);
            $settingsExtension = $this->yellow->toolbox->getTextSettings($fileDataExtension, "");
            $fileData = $this->yellow->toolbox->readFile($fileNameLatest);
            $fileDataNew = $this->yellow->toolbox->setTextSettings($fileData, "extension", $extension, $settingsExtension);
            if ($fileData!=$fileDataNew) {
                $settings = $this->yellow->toolbox->getTextSettings($fileDataNew, "extension");
                $settings->uksort("strnatcasecmp");
                $fileDataNew = "# Datenstrom Yellow update settings\n";
                foreach ($settings as $extension=>$block) {
                    $fileDataNew .= "\n";
                    foreach ($block as $key=>$value) {
                        $fileDataNew .= (strposu($key, "/") ? $key : ucfirst($key)).": $value\n";
                    }
                }
                if (!$this->yellow->toolbox->createFile($fileNameLatest, $fileDataNew)) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Can't write file '$fileNameLatest'!\n";
                }
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateExtensionLatest file:$fileNameLatest<br/>\n";
        }
        return $statusCode;
    }
    
    // Return progress in percent
    public function getProgressPercent($now, $total, $increments, $max) {
        $percent = intval(($max / $total) * $now);
        if ($increments>1) $percent = intval($percent / $increments) * $increments;
        return min($max, $percent);
    }
    
    // Return extension information from source code
    public function getExtensionInformationFromSource($path) {
        $extension = $version = $published = $fileNameSource = "";
        foreach ($this->yellow->toolbox->getDirectoryEntries($path, "/^.*\.php$/", false, false) as $entry) {
            $fileData = $this->yellow->toolbox->readFile($entry, 4096);
            foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
                if (preg_match("/^\s*(\S+)\s+(\S+)/", $line, $matches)) {
                    if ($matches[1]=="class" && substru($matches[2], 0, 6)=="Yellow") $extension = lcfirst(substru($matches[2], 6));
                    if ($matches[1]=="const" && $matches[2]=="VERSION" && preg_match("/\"([0-9\.]+)\"/", $line, $tokens)) $version = $tokens[1];
                    if ($matches[1]=="function" || $matches[2]=="function") break;
                }
            }
            if (!empty($extension) && !empty($version)) {
                $published = $this->yellow->toolbox->getFileModified($entry);
                $fileNameSource = $entry;
                break;
            }
        }
        if (empty($extension) || empty($version) || empty($published)) {
            list($extension, $version, $published) = $this->getExtensionInformationFromSettings($path);
        }
        return array($extension, $version, $published, $fileNameSource);
    }

    // Return extension information from settings
    public function getExtensionInformationFromSettings($path) {
        $extension = $version = $published = $status = "";
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        $fileData = $this->yellow->toolbox->readFile($fileNameExtension);
        foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
            if (preg_match("/^\s*(.*?)\s*:\s*(.*?)\s*$/", $line, $matches)) {
                if (lcfirst($matches[1])=="extension") $extension = lcfirst($matches[2]);
                if (lcfirst($matches[1])=="version") $version = $matches[2];
                if (lcfirst($matches[1])=="published") $published = strtotime($matches[2]);
                if (lcfirst($matches[1])=="status") $status = $matches[2];
            }
        }
        return array($extension, $version, $published, $status);
    }
    
    // Return extension languages available
    public function getExtensionLanguagesAvailable($path) {
        $languages = array();
        foreach ($this->yellow->toolbox->getDirectoryEntries($path, "/.*/", true, true, false) as $entry) {
            array_push($languages, $entry);
        }
        return array_unique($languages);
    }
    
    // Return extension file names required
    public function getExtensionFileNamesRequired($path) {
        $data = array();
        $extension = "";
        $languages = $this->getExtensionLanguagesAvailable($path);
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        $fileData = $this->yellow->toolbox->readFile($fileNameExtension);
        foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
            if (preg_match("/^\s*(.*?)\s*:\s*(.*?)\s*$/", $line, $matches)) {
                if (lcfirst($matches[1])=="extension") $extension = lcfirst($matches[2]);
                if (!empty($matches[1]) && !empty($matches[2]) && strposu($matches[1], "/")) {
                    list($entry, $flags) = $this->yellow->toolbox->getTextList($matches[2], ",", 2);
                    if (preg_match("/delete/i", $flags)) continue;
                    if (preg_match("/multi-language/i", $flags) && $this->yellow->lookup->isContentFile($matches[1])) {
                        foreach ($languages as $language) {
                            $pathLanguage = $language."/";
                            $data["$path$pathLanguage$entry"] = $extension."/".$pathLanguage.$entry;
                        }
                    } else {
                        $data["$path$entry"] = $extension."/".$entry;
                    }
                }
            }
        }
        $data[$fileNameExtension] = $extension."/".basename($fileNameExtension);
        return $data;
    }
}
