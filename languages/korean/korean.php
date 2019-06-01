<?php
// Korean extension, https://github.com/datenstrom/yellow-extensions/tree/master/languages/korean
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowKorean {
    const VERSION = "0.8.8";
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
            $this->yellow->system->save($fileName, array("language" => "ko"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="ko") {
            $language = reset(array_diff($this->yellow->text->getLanguages(), array("ko")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }}
