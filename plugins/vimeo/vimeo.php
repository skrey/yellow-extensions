<?php
// Copyright (c) 2013 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Vimeo parser plugin
class YellowVimeo
{
	const Version = "0.1.2";
	var $yellow;			//access to API
	
	// Initialise plugin
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("vimeoStyle", "flexible");
	}
	
	// Handle custom type parsing
	function onParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if($name=="vimeo" && $typeShortcut)
		{
			list($id, $style, $width, $height) = explode(' ', $text);
			if(empty($style)) $style = $this->yellow->config->get("vimeoStyle");
			$output = "<div class=\"$style\">";
			$output .= "<iframe src=\"http://player.vimeo.com/video/$id\" frameborder=\"0\" allowfullscreen";
			if($width && $height) $output .= " width=\"$width\" height=\"$height\"";
			$output .= "></iframe></div>";
		}
		return $output;
	}
}

$yellow->registerPlugin("vimeo", "YellowVimeo", YellowVimeo::Version);
?>