<?php
// Paris extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/paris

class YellowParis {
    const VERSION = "0.8.8";
    const TYPE = "theme";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreSettingDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "paris"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="paris") {
            $theme = reset(array_diff($this->yellow->extensions->getExtensions("theme"), array("paris")));
            $this->yellow->system->save($fileName, array("theme" => $theme));
        }
    }
}
