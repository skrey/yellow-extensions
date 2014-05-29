<?php
// Copyright (c) 2013-2014 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Google map parser plugin
class YellowGooglemaps
{
	const Version = "0.1.3";
	var $yellow;			//access to API
	
	// Handle plugin initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("googlemapsZoom", "15");
		$this->yellow->config->setDefault("googlemapsStyle", "flexible");
	}
	
	// Handle custom type parsing
	function onParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if($name=="googlemaps" && $typeShortcut)
		{
			list($address, $zoom, $style, $width, $height) = explode(' ', $text);
			if(empty($zoom)) $zoom = $this->yellow->config->get("googlemapsZoom");
			if(empty($style)) $style = $this->yellow->config->get("googlemapsStyle");
			$language = $this->yellow->page->get("language");
			$output = "<div class=\"$style\">";
			$output .= "<iframe src=\"https://maps.google.com/maps?q=$address&amp;ie=UTF8&amp;t=m&amp;z=$zoom&amp;hl=$language&amp;iwloc=near&amp;num=1&amp;output=embed\" frameborder=\"0\"";
			if($width && $height) $output .= " width=\"$width\" height=\"$height\"";
			$output .= "></iframe></div>";
		}
		return $output;
	}
}

$yellow->registerPlugin("googlemaps", "YellowGooglemaps", YellowGooglemaps::Version);
?>