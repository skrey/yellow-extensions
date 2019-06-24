<?php
// Preview extension, https://github.com/datenstrom/yellow-extensions/tree/master/features/preview
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowPreview {
    const VERSION = "0.8.6";
    const TYPE = "feature";
    public $yellow;         //access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("previewDefaultImage", "preview-image.png");
        $this->yellow->system->setDefault("previewStyle", "stretchable");
    }
    
    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="preview" && ($type=="block" || $type=="inline")) {
            list($location, $style, $size) = $this->yellow->toolbox->getTextArgs($text);
            if (empty($location)) $location = $page->location;
            if (empty($style)) $style = $this->yellow->system->get("previewStyle");
            if (empty($size)) $size = "100%";
            $content = $this->yellow->content->find($location);
            $pages = $content ? $content->getChildren() : $this->yellow->content->clean();
            if ($this->yellow->extensions->isExisting("image")) {
                if (count($pages)) {
                    $page->setLastModified($pages->getModified());
                    $output = "<div class=\"".htmlspecialchars($style)."\">\n";
                    $output .= "<ul>\n";
                    foreach ($pages as $page) {
                        list($src, $width, $height, $alt) = $this->getImageInformation($page, $size);
                        $output .= "<li><a href=\"".$page->getLocation(true)."\">";
                        $output .= "<span class=\"preview-image\"><img src=\"".htmlspecialchars($src)."\"";
                        if ($width && $height) $output .= " width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\"";
                        $output .= " alt=\"".htmlspecialchars($alt)."\" title=\"".htmlspecialchars($alt)."\" /></span><br />";
                        $output .= "<span class=\"preview-description\">".$page->getHtml("description")."</span></a></li>\n";
                    }
                    $output .= "</ul>\n";
                    $output .= "</div>\n";
                } else {
                    $page->error(500, "Preview '$location' does not exist!");
                }
            } else {
                $page->error(500, "Preview requires 'image' extension!");
            }
        }
        return $output;
    }

    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        return $this->onParseContentShortcut($page, $name, "", "block");
    }
    
    // Return image information for page
    public function getImageInformation($page, $size) {
        $name = $page->isExisting("image") ? $page->get("image") : $this->yellow->system->get("previewDefaultImage");
        if (!preg_match("/^\w+:/", $name)) {
            $fileName = $this->yellow->system->get("imageDir").$name;
            list($src, $width, $height) = $this->yellow->extensions->get("image")->getImageInformation($fileName, $size, $size);
        } else {
            $src = $this->yellow->lookup->normaliseUrl("", "", "", $name);
            $width = $height = 0;
        }
        $alt = $page->isExisting("imageAlt") ? $page->get("imageAlt") : $page->get("title");
        return array($src, $width, $height, $alt);
    }
}
