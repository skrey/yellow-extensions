<?php
// Publish extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/publish

class YellowPublish {
    const VERSION = "0.8.41";
    public $yellow;                 // access to API
    public $extensions;             // number of extensions
    public $errors;                 // number of errors
    public $firstStepPaths;         // paths in first step
    public $secondStepPaths;        // paths in second step

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
        if (!empty($path)) {
            $pathRepository = rtrim($this->yellow->system->get("publishSourceCodeDirectory"), "/")."/";
            $pathRepositoryOffical = $pathRepository."yellow-extensions/";
            $pathRepositoryRequested = rtrim($pathRepository.$path, "/")."/";
            if (is_dir($pathRepositoryOffical) && is_dir($pathRepositoryRequested)) {
                $this->extensions = $this->errors = 0;
                $this->firstStepPaths = $this->getExtensionPaths($pathRepositoryRequested);
                $this->secondStepPaths = array();
                $pathsEstimated = count($this->firstStepPaths);
                foreach ($this->firstStepPaths as $path) {
                    echo "\rPublishing extension files ".$this->getProgressPercent($this->extensions, $pathsEstimated, 5, 95)."%... ";
                    $statusCode = max($statusCode, $this->updateExtensionDirectory($path, $pathRepositoryOffical, true));
                }
                foreach ($this->secondStepPaths as $path) {
                    echo "\rPublishing extension files ".$this->getProgressPercent($this->extensions, $pathsEstimated, 5, 95)."%... ";
                    $statusCode = max($statusCode, $this->updateExtensionDirectory($path, $pathRepositoryOffical));
                }
                echo "\rPublishing extension files 100%... done\n";
            } elseif ($this->yellow->system->get("publishSourceCodeDirectory")!="/My/Documents/GitHub/") {
                $statusCode = 500;
                $this->extensions = 0;
                $this->errors = 1;
                $path = !is_dir($pathRepositoryOffical) ? $pathRepositoryOffical : $pathRepositoryRequested;
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
        } else {
            $statusCode = $this->showAvailableFolders($command);
        }
        return $statusCode;
    }
    
    // Show available folders
    public function showAvailableFolders($command) {
        $path = $this->yellow->system->get("publishSourceCodeDirectory");
        $entries = $this->yellow->toolbox->getDirectoryEntries($path, "/.*/", true, true, false);
        foreach ($entries as $entry) {
            echo "$entry\n";
        }
        if (count($entries)==0) echo "Yellow $command: No folders\n";
        return 200;
    }
    
    // Update extension directory
    public function updateExtensionDirectory($path, $pathRepositoryOffical, $analyse = false) {
        $statusCode = 200;
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        if (is_file($fileNameExtension)) {
            $statusCode = max($statusCode, $this->updateExtensionSettings($path));
            $statusCode = max($statusCode, $this->updateExtensionDocumentation($path));
            $statusCode = max($statusCode, $this->updateExtensionArchive($path, $pathRepositoryOffical));
            $statusCode = max($statusCode, $this->updateExtensionLatest($path, $pathRepositoryOffical));
            ++$this->extensions;
            if ($statusCode==200 && $analyse) $this->analyseExtensionSettings($path);
            if ($statusCode!=200) ++$this->errors;
        } elseif (is_file("$path/yellow.php")) {
            $statusCode = max($statusCode, $this->updateStandardSettings($path, $pathRepositoryOffical));
            $statusCode = max($statusCode, $this->updateStandardFiles($path, $pathRepositoryOffical));
            $statusCode = max($statusCode, $this->updateStandardDocumentation($path));
            $this->extensions += $this->getStandardExtensionsCount($path);
            if ($statusCode!=200) ++$this->errors;
        }
        return $statusCode;
    }
    
    // Update extension settings file
    public function updateExtensionSettings($path) {
        $statusCode = 200;
        list($extension, $version, $published, $fileNameSource) = $this->getExtensionInformationFromSource($path);
        list($dummy, $versionLatest, $publishedLatest) = $this->getExtensionInformationFromSettings($path);
        if ($version==$versionLatest) $published = $publishedLatest;
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
                        $fileNameNormalised = $this->yellow->toolbox->normalisePath($matches[1]);
                        if (!$this->yellow->lookup->isValidFile($fileNameNormalised)) {
                            $statusCode = 500;
                            echo "ERROR publishing files: File '$fileNameDestination' is not possible!\n";
                        }
                    }
                    if (!empty($matches[1]) && !strempty($matches[2])) $settings[$matches[1]] = $matches[2];
                }
                $fileDataNew .= $line;
            }
            if ($settings->get("status")!="unlisted") {
                if (!$settings->isExisting("helpUrl") || !$settings->isExisting("downloadUrl")) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Please configure HelpUrl and DownloadUrl in file '$fileNameExtension'!\n";
                }
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
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateExtensionSettings file:$fileNameExtension<br/>\n";
        }
        return $statusCode;
    }

    // Update extension documentation files
    public function updateExtensionDocumentation($path) {
        $statusCode = 200;
        list($extension, $version) = $this->getExtensionInformationFromSettings($path);
        $regex = "/^.*\\".$this->yellow->system->get("coreContentExtension")."$/";
        foreach ($this->yellow->toolbox->getDirectoryEntries($path, $regex, true, false) as $entry) {
            $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
            if (preg_match("/^(\xEF\xBB\xBF)?(<.*>[\r\n]+)?([\w ]+[0-9\.]{5,}[\r\n]+)(\=+[\r\n]+)(.*)$/s", $fileData, $parts)) {
                $parts[3] = ucfirst($extension)." ".$version."\n";
                $parts[4] = str_repeat("=", strlenu($parts[3])-1)."\n";
                $fileDataNew = $parts[1].$parts[2].$parts[3].$parts[4].$parts[5];
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
    public function updateExtensionArchive($path, $pathRepositoryOffical) {
        $statusCode = 200;
        list($extension, $version, $published) = $this->getExtensionInformationFromSettings($path);
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        if (is_file($fileNameExtension) && !empty($extension)) {
            $zip = new ZipArchive();
            $fileNameZipArchive = $pathRepositoryOffical."zip/".strtoloweru("$extension.zip");
            if (is_file($fileNameZipArchive)) $this->yellow->toolbox->deleteFile($fileNameZipArchive);
            if ($zip->open($fileNameZipArchive, ZIPARCHIVE::CREATE)===true) {
                $pathBase = strtoloweru($extension)."/";
                $fileNamesRequired = $this->getExtensionFileNamesRequired($path, $pathBase, $pathRepositoryOffical);
                foreach ($fileNamesRequired as $fileNameRequired=>$fileNameShort) {
                    if (is_file($fileNameRequired)) {
                        if (!$this->yellow->toolbox->modifyFile($fileNameRequired, $published)) {
                            $statusCode = 500;
                            echo "ERROR publishing files: Can't write file '$fileNameRequired'!\n";
                        }
                        $zip->addFile($fileNameRequired, $fileNameShort);
                    } else {
                        $statusCode = 500;
                        echo "ERROR publishing files: Can't find file '$fileNameRequired'!\n";
                    }
                }
                if (!$zip->close() || !$this->yellow->toolbox->modifyFile($fileNameZipArchive, $published)) {
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
    public function updateExtensionLatest($path, $pathRepositoryOffical) {
        $statusCode = 200;
        list($extension, $version, $published, $status) = $this->getExtensionInformationFromSettings($path);
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        $fileNameLatest = $pathRepositoryOffical.$this->yellow->system->get("updateLatestFile");
        if (is_file($fileNameExtension) && is_file($fileNameLatest) && $status!="unlisted") {
            $fileDataExtension = $this->yellow->toolbox->readFile($fileNameExtension);
            $settingsExtension = $this->yellow->toolbox->getTextSettings($fileDataExtension, "");
            $fileData = $this->yellow->toolbox->readFile($fileNameLatest);
            $settingsLatest = $this->yellow->toolbox->getTextSettings($fileData, "extension");
            $settingsLatest[$extension] = new YellowArray();
            foreach ($settingsExtension as $key=>$value) $settingsLatest[$extension][$key] = $value;
            $settingsLatest->uksort("strnatcasecmp");
            $fileDataNew = "# Datenstrom Yellow update settings\n";
            foreach ($settingsLatest as $extension=>$block) {
                $fileDataNew .= "\n";
                foreach ($block as $key=>$value) {
                    $fileDataNew .= (strposu($key, "/") ? $key : ucfirst($key)).": $value\n";
                }
            }
            if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($fileNameLatest, $fileDataNew)) {
                $statusCode = 500;
                echo "ERROR publishing files: Can't write file '$fileNameLatest'!\n";
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateExtensionLatest file:$fileNameLatest<br/>\n";
        }
        return $statusCode;
    }
    
    // Update standard installation settings
    public function updateStandardSettings($path, $pathRepositoryOffical) {
        $statusCode = 200;
        $fileNameInstall = $pathRepositoryOffical."source/install/".$this->yellow->system->get("updateExtensionFile");
        $fileNameLatest = $pathRepositoryOffical.$this->yellow->system->get("updateLatestFile");
        $fileNameCurrent = $path.$this->yellow->system->get("coreExtensionDirectory").
            $this->yellow->system->get("updateCurrentFile");
        if (is_file($fileNameInstall) && is_file($fileNameLatest) && is_file($fileNameCurrent)) {
            $fileDataExtensions = $this->yellow->toolbox->readFile($fileNameInstall);
            $fileDataExtensions .= $this->yellow->toolbox->readFile($fileNameLatest);
            $settingsExtensions = $this->yellow->toolbox->getTextSettings($fileDataExtensions, "extension");
            $fileData = $this->yellow->toolbox->readFile($fileNameCurrent);
            $settingsCurrent = $this->yellow->toolbox->getTextSettings($fileData, "extension");
            foreach ($settingsExtensions as $extension=>$block) {
                if ($settingsCurrent->isExisting($extension)) {
                    $settingsCurrent[$extension] = new YellowArray();
                    foreach ($block as $key=>$value) $settingsCurrent[$extension][$key] = $value;
                }
            }
            $fileDataNew = "# Datenstrom Yellow update settings\n";
            foreach ($settingsCurrent as $extension=>$block) {
                $fileDataNew .= "\n";
                foreach ($block as $key=>$value) {
                    $fileDataNew .= (strposu($key, "/") ? $key : ucfirst($key)).": $value\n";
                }
            }
            if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($fileNameCurrent, $fileDataNew)) {
                $statusCode = 500;
                echo "ERROR publishing files: Can't write file '$fileNameCurrent'!\n";
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateStandardSettings file:$fileNameCurrent<br/>\n";
        }
        return $statusCode;
    }

    // Update standard installation files
    public function updateStandardFiles($path, $pathRepositoryOffical) {
        $statusCode = 200;
        $fileNamesRequired = $this->getStandardFileNamesRequired($path, $pathRepositoryOffical);
        foreach ($fileNamesRequired as $fileNameSource=>$fileNameDestination) {
            $fileNameNormalised = substru($fileNameDestination, strlenu($path));
            $fileNameNormalised = $this->yellow->toolbox->normalisePath($fileNameNormalised);
            if ($this->yellow->lookup->isValidFile($fileNameNormalised)) {
                if (!$this->yellow->toolbox->copyFile($fileNameSource, $fileNameDestination, true)) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Can't write file '$fileNameDestination'!\n";
                }
                if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateStandardFiles file:$fileNameDestination<br/>\n";
            }
        }
        return $statusCode;
    }

    // Update standard installation documentation files
    public function updateStandardDocumentation($path) {
        $statusCode = 200;
        list($product, $release) = $this->getProductInformationFromSource($path);
        $regex = "/^.*\\".$this->yellow->system->get("coreContentExtension")."$/";
        foreach ($this->yellow->toolbox->getDirectoryEntries($path, $regex, true, false) as $entry) {
            $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
            if (preg_match("/^(\xEF\xBB\xBF)?(<.*>[\r\n]+)?([\w ]+[0-9\.]{5,}[\r\n]+)(\=+[\r\n]+)(.*)$/s", $fileData, $parts)) {
                $parts[3] = $product." ".$release."\n";
                $parts[4] = str_repeat("=", strlenu($parts[3])-1)."\n";
                $fileDataNew = $parts[1].$parts[2].$parts[3].$parts[4].$parts[5];
            }
            if ($fileData!=$fileDataNew) {
                if (!$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $statusCode = 500;
                    echo "ERROR publishing files: Can't write file '$entry'!\n";
                }
            }
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::updateStandardDocumentation file:$entry<br/>\n";
        }
        return $statusCode;
    }

    // Analyse extension settings with dependencies
    public function analyseExtensionSettings($path) {
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        $fileData = $this->yellow->toolbox->readFile($fileNameExtension);
        if (preg_match("/@base\/zip\//i", $fileData)) {
            array_push($this->secondStepPaths, $path);
            if (defined("DEBUG") && DEBUG>=2) echo "YellowPublish::analyseExtensionSettings detected path:$path<br/>\n";
        }
    }

    // Return extension paths
    public function getExtensionPaths($path) {
        $paths = array($path);
        foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/.*/", true, true) as $entry) {
            array_push($paths, "$entry/");
        }
        return $paths;
    }

    // Return progress in percent
    public function getProgressPercent($now, $total, $increments, $max) {
        $percent = intval(($max / $total) * $now);
        if ($increments>1) $percent = intval($percent / $increments) * $increments;
        return min($max, $percent);
    }
    
    // Return product information from source code
    public function getProductInformationFromSource($path) {
        $product = "Datenstrom Yellow";
        $release = "";
        $fileNameSource = rtrim($path, "/")."/system/extensions/core.php";
        $fileData = $this->yellow->toolbox->readFile($fileNameSource, 4096);
        foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
            if (preg_match("/^\s*(\S+)\s+(\S+)/", $line, $matches)) {
                if ($matches[1]=="const" && $matches[2]=="RELEASE" && preg_match("/\"([0-9\.]+)\"/", $line, $tokens)) $release = $tokens[1];
                if ($matches[1]=="function" || $matches[2]=="function") break;
            }
        }
        return array($product, $release);
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
    public function getExtensionFileNamesRequired($path, $pathBase, $pathRepositoryOffical) {
        $data = array();
        $languages = $this->getExtensionLanguagesAvailable($path);
        $fileNameExtension = $path.$this->yellow->system->get("updateExtensionFile");
        $data[$fileNameExtension] = $pathBase.basename($fileNameExtension);
        $fileData = $this->yellow->toolbox->readFile($fileNameExtension);
        foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
            if (preg_match("/^\s*(.*?)\s*:\s*(.*?)\s*$/", $line, $matches)) {
                if (!empty($matches[1]) && !empty($matches[2]) && strposu($matches[1], "/")) {
                    list($entry, $flags) = $this->yellow->toolbox->getTextList($matches[2], ",", 2);
                    if (preg_match("/delete/i", $flags)) continue;
                    if (preg_match("/multi-language/i", $flags) && $this->yellow->lookup->isContentFile($matches[1])) {
                        foreach ($languages as $language) {
                            $pathLanguage = $language."/";
                            $data["$path$pathLanguage$entry"] = $pathBase.$pathLanguage.$entry;
                        }
                    } else {
                        if (preg_match("/^@base/i", $entry)) {
                            $fileNameRequired = preg_replace("/@base/i", rtrim($pathRepositoryOffical, "/"), $entry);
                            $fileNameShort = preg_replace("/@base/i", rtrim($pathBase, "/"), $entry);
                        } else {
                            $fileNameRequired = $path.$entry;
                            $fileNameShort = $pathBase.$entry;
                        }
                        $data[$fileNameRequired] = $fileNameShort;
                    }
                }
            }
        }
        return $data;
    }
    
    // Return standard installation file names required
    public function getStandardFileNamesRequired($path, $pathRepositoryOffical) {
        $data = array();
        $extension = "";
        $fileNameCurrent = $path.$this->yellow->system->get("coreExtensionDirectory").
            $this->yellow->system->get("updateCurrentFile");
        $fileData = $this->yellow->toolbox->readFile($fileNameCurrent);
        foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
            if (preg_match("/^\s*(.*?)\s*:\s*(.*?)\s*$/", $line, $matches)) {
                if (lcfirst($matches[1])=="extension" && !strempty($matches[2])) $extension = $matches[2];
                if (!empty($matches[1]) && !empty($matches[2]) && strposu($matches[1], "/")) {
                    list($entry, $flags) = $this->yellow->toolbox->getTextList($matches[2], ",", 2);
                    if (preg_match("/delete/i", $flags)) continue;
                    if (preg_match("/^@base/i", $entry)) {
                        $fileNameSource = preg_replace("/@base/i", rtrim($pathRepositoryOffical, "/"), $entry);
                    } else {
                        $fileNameSource = $pathRepositoryOffical."source/".strtoloweru($extension)."/".$entry;
                    }
                    $fileNameDestination = $path.$matches[1];
                    $data[$fileNameSource] = $fileNameDestination;
                }
            }
        }
        return $data;
    }
    
    // Return number of extensions in standard installation
    public function getStandardExtensionsCount($path) {
        $fileNameCurrent = $path.$this->yellow->system->get("coreExtensionDirectory").
            $this->yellow->system->get("updateCurrentFile");
        $fileData = $this->yellow->toolbox->readFile($fileNameCurrent);
        $settings = $this->yellow->toolbox->getTextSettings($fileData, "extension");
        return count($settings);
    }
}
