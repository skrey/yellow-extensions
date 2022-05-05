<?php
// Patch extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/patch

class YellowPatch {
    const VERSION = "0.8.19";
    public $yellow;                 // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        if ($action=="update") { // TODO: remove later, create settings file when missing
            $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("updateCurrentFile");
            if (!is_file($fileName) && $this->yellow->extension->isExisting("update")) {
                $url = $this->yellow->system->get("updateExtensionUrl")."/raw/master/".$this->yellow->system->get("updateLatestFile");
                list($statusCode, $fileData) = $this->yellow->extension->get("update")->getExtensionFile($url);
                if ($statusCode==200) {
                    $settings = $this->yellow->toolbox->getTextSettings($fileData, "extension");
                    foreach ($settings as $key=>$value) {
                        if ($this->yellow->extension->isExisting($key)) {
                            $settingsNew = new YellowArray();
                            $settingsNew["extension"] = ucfirst($key);
                            $settingsNew["version"] = $this->yellow->extension->data[$key]["version"];
                            $fileData = $this->yellow->toolbox->setTextSettings($fileData, "extension", $key, $settingsNew);
                        } else {
                            $fileData = $this->yellow->toolbox->unsetTextSettings($fileData, "extension", $key);
                        }
                    }
                    if (!$this->yellow->toolbox->createFile($fileName, $fileData)) {
                        $this->yellow->log("error", "Can't write file '$fileName'!");
                    }
                }
            }
        }
        if ($action=="update") { // TODO: remove later, convert files for blog/wiki extension
            if ($this->yellow->system->isExisting("blogPagesMax") || $this->yellow->system->isExisting("wikiPagesMax")) {
                $path = $this->yellow->system->get("coreContentDirectory");
                foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.(md|txt)$/", true, false) as $entry) {
                    $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                    $fileDataNew = str_replace("[blogarchive", "[blogmonths", $fileDataNew);
                    $fileDataNew = preg_replace("/Layout: blogpages/i", "Layout: blog-start", $fileDataNew);
                    $fileDataNew = preg_replace("/Layout: wikipages/i", "Layout: wiki-start", $fileDataNew);
                    $fileDataNew = preg_replace("/Layout: draftpages/i", "Layout: draftpages-unsupported", $fileDataNew);
                    if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                        $this->yellow->log("error", "Can't write file '$entry'!");
                    }
                }
                $path = $this->yellow->system->get("coreLayoutDirectory");
                foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
                    $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                    $fileDataNew = str_replace("yellow->page->getPage(\"blog\")", "yellow->page->getPage(\"blogStart\")", $fileDataNew);
                    $fileDataNew = str_replace("yellow->page->getPage(\"wiki\")", "yellow->page->getPage(\"wikiStart\")", $fileDataNew);
                    if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                        $this->yellow->log("error", "Can't write file '$entry'!");
                    }
                    if (basename($entry)=="draftpages.html" &&
                        !$this->yellow->toolbox->deleteFile($entry, $this->yellow->system->get("coreTrashDirectory"))) {
                        $this->yellow->log("error", "Can't delete file '$entry'!");
                    }
                }
            }
        }
        if ($action=="update") { // TODO: remove later, convert old extension settings
            $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
            if ($this->yellow->system->get("galleryStyle")=="photoswipe") {
                if (!$this->yellow->system->save($fileName, array("galleryStyle" => "zoom"))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
            }
            if ($this->yellow->system->get("sliderStyle")=="flickity") {
                if (!$this->yellow->system->save($fileName, array("sliderStyle" => "loop"))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
            }
            if ($this->yellow->system->isExisting("coreServerTimezone")) {
                $coreTimezone = $this->yellow->system->get("coreServerTimezone");
                if (!$this->yellow->system->save($fileName, array("coreTimezone" => $coreTimezone))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
            }
            if ($this->yellow->system->isExisting("blogLocation")) {
                $blogStartLocation = $this->yellow->system->get("blogLocation");
                if (!$this->yellow->system->save($fileName, array("blogStartLocation" => $blogStartLocation))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
            }
            if ($this->yellow->system->isExisting("wikiLocation")) {
                $wikiStartLocation = $this->yellow->system->get("wikiLocation");
                if (!$this->yellow->system->save($fileName, array("wikiStartLocation" => $wikiStartLocation))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
            }
        }
        if ($action=="update") { // TODO: remove later, convert old log file
            $fileNameOld = $this->yellow->system->get("coreExtensionDirectory")."yellow.log";
            $fileNameNew = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreWebsiteFile");
            if (is_file($fileNameOld)) {
                $fileDataOld = $this->yellow->toolbox->readFile($fileNameOld);
                $fileDataNew = $this->yellow->toolbox->readFile($fileNameNew);
                if (!$this->yellow->toolbox->deleteFile($fileNameOld, $this->yellow->system->get("coreTrashDirectory"))) {
                    $this->yellow->log("error", "Can't delete file '$fileNameOld'!");
                } elseif (!$this->yellow->toolbox->createFile($fileNameNew, $fileDataOld.$fileDataNew)) {
                    $this->yellow->log("error", "Can't write file '$fileNameNew'!");
                }
            }
        }
    }
}
