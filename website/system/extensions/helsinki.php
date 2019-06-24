<?php
// Helsinki extension, https://github.com/datenstrom/yellow-extensions/tree/master/themes/helsinki
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowHelsinki {
    const VERSION = "0.8.5";
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
            $this->yellow->system->save($fileName, array("theme" => "helsinki"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="helsinki") {
            $theme = reset(array_diff($this->yellow->extensions->getExtensions("theme"), array("helsinki")));
            $this->yellow->system->save($fileName, array("theme" => $theme));
        }
    }
}
