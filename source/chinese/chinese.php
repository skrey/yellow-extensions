<?php
// Chinese extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/chinese

class YellowChinese {
    const VERSION = "0.8.26";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle update
    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("language" => "zh-CN"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("language")=="zh-CN") {
            $language = reset(array_diff($this->yellow->system->getValues("language"), array("zh-CN")));
            $this->yellow->system->save($fileName, array("language" => $language));
        }
    }
}
