<?php
// Update extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/update

class YellowUpdatePatch {
    const VERSION = "0.8.19";
    public $yellow;                 // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        if ($action=="update") { // patches for Datenstrom Yellow 0.8.15
            $patches = false;
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
                    $patches = true; // created file with update settings
                }
            }
            $path = $this->yellow->system->get("coreLayoutDirectory");
            foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
                $key = str_replace("pages", "", $this->yellow->lookup->normaliseName(basename($entry), true, true));
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                $fileDataNew = str_replace("text->getHtml", "language->getTextHtml", $fileDataNew);
                $fileDataNew = str_replace("yellow->page->getPages()", "yellow->page->getPages(\"$key\")", $fileDataNew);
                $fileDataNew = str_replace("\$page = \$this->yellow->content->shared(\"header\")", "\$page = null", $fileDataNew);
                $fileDataNew = str_replace("\$page = \$this->yellow->content->shared(\"footer\")", "\$page = null", $fileDataNew);
                $fileDataNew = str_replace("\$page = \$this->yellow->content->shared(\"sidebar\")", "\$page = null", $fileDataNew);
                $fileDataNew = str_replace("\$this->yellow->content->shared(\"sidebar\")", "\$this->yellow->page->isPage(\"sidebar\")", $fileDataNew);
                $fileDataNew = str_replace("php if (\$page = null)", "php /* Remove this line */ if (\$page = null)", $fileDataNew);
                if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $this->yellow->log("error", "Can't write file '$entry'!");
                }
                if ($fileData!=$fileDataNew) $patches = true; //converted layout file to new API
            }
            if ($patches) $this->yellow->log("info", "Apply patches for Datenstrom Yellow 0.8.15");
        }
        if ($action=="update") { // patches for Datenstrom Yellow 0.8.16
            $patches = false;
            if (is_dir("system/settings/")) {
                $fileNameSource = "system/settings/system.ini";
                $fileNameDestination = "system/extensions/yellow-system.ini";
                if (is_file($fileNameSource)) {
                    $fileData = $fileDataNew = $this->yellow->toolbox->readFile($fileNameSource);
                    $fileDataNew = str_replace("user.ini", "yellow-user.ini", $fileDataNew);
                    $fileDataNew = str_replace("language.ini", "yellow-language.ini", $fileDataNew);
                    if (!$this->yellow->toolbox->createFile($fileNameDestination, $fileDataNew)) {
                        $this->yellow->log("error", "Can't write file '$fileNameDestination'!");
                    }
                }
                $fileNameSource = "system/settings/user.ini";
                $fileNameDestination = "system/extensions/yellow-user.ini";
                if (is_file($fileNameSource) && !$this->yellow->toolbox->copyFile($fileNameSource, $fileNameDestination)) {
                    $this->yellow->log("error", "Can't write file '$fileNameDestination'!");
                }
                $fileNameSource = "system/settings/language.ini";
                $fileNameDestination = "system/extensions/yellow-language.ini";
                if (is_file($fileNameSource) && !$this->yellow->toolbox->copyFile($fileNameSource, $fileNameDestination)) {
                    $this->yellow->log("error", "Can't write file '$fileNameDestination'!");
                }
                if (!$this->yellow->toolbox->deleteDirectory("system/settings/", $this->yellow->system->get("coreTrashDirectory"))) {
                    $this->yellow->log("error", "Can't delete directory 'system/settings/'!");
                }
                $this->yellow->system->load("system/extensions/yellow-system.ini");
                $this->yellow->user->load("system/extensions/yellow-user.ini");
                $this->yellow->language->load("system/extensions/yellow-language.ini");
                $patches = true; // converted folder structure to new API
            }
            if ($this->yellow->system->isExisting("updateNotification")) {
                $updateEventPending = $this->yellow->system->get("updateNotification");
                $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
                if (!$this->yellow->system->save($fileName, array("updateEventPending" => $updateEventPending))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
                $patches = true; // converted system setting to new API
            }
            if ($patches) $this->yellow->log("info", "Apply patches for Datenstrom Yellow 0.8.16");
        }
        if ($action=="update") { // patches for Datenstrom Yellow 0.8.17
            $patches = false;
            $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
            if ($this->yellow->system->get("galleryStyle")=="photoswipe") {
                if (!$this->yellow->system->save($fileName, array("galleryStyle" => "zoom"))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
                $patches = true;
            }
            if ($this->yellow->system->get("sliderStyle")=="flickity") {
                if (!$this->yellow->system->save($fileName, array("sliderStyle" => "loop"))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
                $patches = true;
            }
            if ($this->yellow->system->isExisting("coreServerTimezone")) {
                $coreTimezone = $this->yellow->system->get("coreServerTimezone");
                if (!$this->yellow->system->save($fileName, array("coreTimezone" => $coreTimezone))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
                $patches = true;
            }
            if ($this->yellow->system->isExisting("blogLocation")) {
                $blogStartLocation = $this->yellow->system->get("blogLocation");
                if (!$this->yellow->system->save($fileName, array("blogStartLocation" => $blogStartLocation))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
                $patches = true;
            }
            if ($this->yellow->system->isExisting("wikiLocation")) {
                $wikiStartLocation = $this->yellow->system->get("wikiLocation");
                if (!$this->yellow->system->save($fileName, array("wikiStartLocation" => $wikiStartLocation))) {
                    $this->yellow->log("error", "Can't write file '$fileName'!");
                }
                $patches = true;
            }
            if ($patches) $this->yellow->log("info", "Apply patches for Datenstrom Yellow 0.8.17");
        }
        if ($action=="update") { // patches for Datenstrom Yellow 0.8.18
            $patches = false;
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
                    if ($fileData!=$fileDataNew) $patches = true; // converted content file for blog/wiki extension
                }
                $path = $this->yellow->system->get("coreLayoutDirectory");
                foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.html$/", true, false) as $entry) {
                    $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                    $fileDataNew = str_replace("yellow->page->getPage(\"blog\")", "yellow->page->getPage(\"blogStart\")", $fileDataNew);
                    $fileDataNew = str_replace("yellow->page->getPage(\"wiki\")", "yellow->page->getPage(\"wikiStart\")", $fileDataNew);
                    if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                        $this->yellow->log("error", "Can't write file '$entry'!");
                    }
                    if ($fileData!=$fileDataNew) $patches = true; // converted layout file for blog/wiki extension
                }
            }
            if ($patches) $this->yellow->log("info", "Apply patches for Datenstrom Yellow 0.8.18");
        }
        if ($action=="update") { // patches for Datenstrom Yellow 0.8.19
            $patches = false;
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
                $patches = true; // converted log file name
            }
            if ($patches) $this->yellow->log("info", "Apply patches for Datenstrom Yellow 0.8.19");
        }
    }
}
