<?php
// Lund extension, https://github.com/datenstrom/yellow-extensions/tree/master/themes/lund
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowLund {
    const VERSION = "0.8.3";
    const TYPE = "theme";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("settingDir").$this->yellow->system->get("systemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "lund"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="lund") {
            $theme = reset(array_diff($this->yellow->extensions->getExtensions("theme"), array("lund")));
            $this->yellow->system->save($fileName, array("theme" => $theme));
        }
    }
}
