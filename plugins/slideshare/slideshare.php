<?php
// Copyright (c) 2013 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Slideshare parser plugin
class Yellow_Slideshare
{
	const Version = "0.1.1";
	var $yellow;			//access to API
	
	// Initialise plugin
	function initPlugin($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("slideshareStyle", "flexible");
	}
	
	// Handle custom type parsing
	function OnParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if($name=="slideshare" && $typeShortcut)
		{
			list($id, $style, $width, $height) = explode(' ', $text);
			if(empty($style)) $style = $this->yellow->config->get("slideshareStyle");
			$output = "<div class=\"$style\">";
			$output .= "<iframe src=\"http://www.slideshare.net/slideshow/embed_code/$id\" frameborder=\"0\" allowfullscreen";
			if($width && $height) $output .= " width=\"$width\" height=\"$height\"";
			$output .= "></iframe></div>";
		}
		return $output;
	}
}

$yellow->registerPlugin("slideshare", "Yellow_Slideshare", Yellow_Slideshare::Version);
?>