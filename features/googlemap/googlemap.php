<?php
// Googlemap extension, https://github.com/datenstrom/yellow-extensions/tree/master/features/googlemap
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowGooglemap {
    const VERSION = "0.8.3";
    const TYPE = "feature";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("googlemapZoom", "15");
        $this->yellow->system->setDefault("googlemapStyle", "flexible");
    }
    
    // Handle update
    public function onUpdate($action) {
        if ($action=="update") {        //TODO: remove later, converts old shortcut
            $path = $this->yellow->system->get("contentDir");
            foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.md$/", true, false) as $entry) {
                $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
                $fileDataNew = preg_replace("/\[googlemaps\s/", "[googlemap ", $fileData);
                if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
                    $this->yellow->log("error", "Can't write file '$entry'!");
                }
            }
        }
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="googlemaps" && ($type=="block" || $type=="inline")) {   //TODO: remove later
            $page->error(500, "Shortcut 'googlemaps' has been renamed to 'googlemap'!");
        }
        if ($name=="googlemap" && ($type=="block" || $type=="inline")) {
            list($address, $zoom, $style, $width, $height) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($zoom)) $zoom = $this->yellow->system->get("googlemapZoom");
            if (empty($style)) $style = $this->yellow->system->get("googlemapStyle");
            $language = $page->get("language");
            $output = "<div class=\"".htmlspecialchars($style)."\">";
            $output .= "<iframe src=\"https://maps.google.com/maps?q=".rawurlencode($address)."&amp;ie=UTF8&amp;t=m&amp;z=".rawurlencode($zoom)."&amp;hl=$language&amp;iwloc=near&amp;num=1&amp;output=embed\" frameborder=\"0\"";
            if ($width && $height) $output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
            $output .= "></iframe></div>";
        }
        return $output;
    }
}
