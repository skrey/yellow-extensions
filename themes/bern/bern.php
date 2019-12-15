<?php
// Bern extension, https://github.com/datenstrom/yellow-extensions/tree/master/themes/bern
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowBern {
    const VERSION = "0.8.6";
    const TYPE = "theme";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreSettingDir").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "bern"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="bern") {
            $theme = reset(array_diff($this->yellow->extensions->getExtensions("theme"), array("bern")));
            $this->yellow->system->save($fileName, array("theme" => $theme));
        }
    }
}
