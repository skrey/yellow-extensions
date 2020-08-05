<?php
// Bengali extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/bengali

class YellowBengali {
    const VERSION = "0.8.22";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreSettingDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "bn"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="bn") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("bn")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
