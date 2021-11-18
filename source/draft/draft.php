<?php
// Draft extension, https://github.com/datenstrom/yellow-extensions/tree/master/source/draft

class YellowDraft {
    const VERSION = "0.8.14";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page meta data
    public function onParseMeta($page) {
        if ($page->get("status")=="draft") $page->visible = false;
    }
    
    // Handle page layout
    public function onParsePageLayout($page, $name) {
        if ($this->yellow->page->get("status")=="draft" && $this->yellow->getRequestHandler()=="core") {
            $pageError = "";
            if ($this->yellow->extension->isExisting("edit")) {
                $pageError .= "<a href=\"".$this->yellow->page->get("pageEditUrl")."\">";
                $pageError .= $this->yellow->language->getText("draftPageError")."</a>";
            }
            $this->yellow->page->error(420, $pageError);
        }
    }
}
