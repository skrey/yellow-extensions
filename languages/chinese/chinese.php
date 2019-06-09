<?php
// Chinese extension, https://github.com/datenstrom/yellow-extensions/tree/master/languages/chinese
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowChinese {
    const VERSION = "0.8.11";
    const TYPE = "language";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("settingDir").$this->yellow->system->get("systemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "zh-CN"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="zh-CN") {
            $language = reset(array_diff($this->yellow->text->getLanguages(), array("zh-CN")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
