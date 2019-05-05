<?php
// Meta extension, https://github.com/datenstrom/yellow-extensions/tree/master/features/meta
// Copyright (c) 2013-2019 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowMeta {
    const VERSION = "0.8.4";
    const TYPE = "feature";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("metaTwitterUsername", "datenstromse");
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header" && !$page->isError()) {
            $output .= $this->getMetaTwitter($page);
            $output .= $this->getMetaOpenGraph($page);
        }
        return $output;
    }
    
    // Handle page output data
    public function onParsePageOutput($page, $text) {
        $output = null;
        if ($text && preg_match("/^(.*)<html(.*?)>(.*)$/s", $text, $matches)) {
            $output = $matches[1]."<html prefix=\"og: http://ogp.me/ns#\"".$matches[2].">".$matches[3];
        }
        return $output;
    }
    
    // Return meta data for Twitter
    public function getMetaTwitter($page) {
        $output .= "<meta name=\"twitter:card\" content=\"summary\" />\n";
        $output .= "<meta name=\"twitter:site\" content=\"@".$this->yellow->system->getHtml("metaTwitterUsername")."\" />\n";
        $output .= "<meta name=\"twitter:title\" content=\"".$page->getHtml("title")."\" />\n";
        $output .= "<meta name=\"twitter:description\" content=\"".$page->getHtml("description")."\" />\n";
        $output .= "<meta name=\"twitter:image\" content=\"".$this->getImageUrl($page)."\" />\n";
        return $output;
    }
    
    // Return meta data for Open Graph
    public function getMetaOpenGraph($page) {
        $output .= "<meta property=\"og:type\" content=\"website\" />\n";
        $output .= "<meta property=\"og:site_name\" content=\"".$page->getHtml("sitename")."\" />\n";
        $output .= "<meta property=\"og:title\" content=\"".$page->getHtml("title")."\" />\n";
        $output .= "<meta property=\"og:description\" content=\"".$page->getHtml("description")."\" />\n";
        $output .= "<meta property=\"og:image\" content=\"".$this->getImageUrl($page)."\" />\n";
        $output .= "<meta property=\"og:url\" content=\"".$page->getUrl()."\" />\n";
        return $output;
    }
    
    // Return image URL
    public function getImageUrl($page) {
        if ($page->isExisting("image")) {
            $name = $page->get("image");
            $imageFileName = $this->yellow->system->get("imageDir").$name;
            $imageLocation = $this->yellow->system->get("imageLocation").$name;
        } elseif (preg_match("/\[image(\s.*?)\]/", $page->getContent(true), $matches)) {
            list($name) = $this->yellow->toolbox->getTextArgs(trim($matches[1]));
            $imageFileName = $this->yellow->system->get("imageDir").$name;
            $imageLocation = $this->yellow->system->get("imageLocation").$name;
        }
        if (!is_readable($imageFileName)) {
            $imageLocation = $this->yellow->system->get("resourceLocation").$page->get("theme")."-icon.png";
        }
        return $this->yellow->lookup->normaliseUrl(
            $this->yellow->system->get("serverScheme"),
            $this->yellow->system->get("serverAddress"),
            $this->yellow->system->get("serverBase"), $imageLocation);
    }
}
