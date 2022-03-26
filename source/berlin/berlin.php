<?php
// Berlin extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/berlin

class YellowBerlin {
    const VERSION = "0.8.12";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "berlin"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="berlin") {
            $theme = reset(array_diff($this->yellow->system->getValues("theme"), array("berlin")));
            $this->yellow->system->save($fileName, array("theme" => $theme));
        }
    }
}
