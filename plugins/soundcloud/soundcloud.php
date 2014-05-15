<?php
// Copyright (c) 2013 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Soundcloud parser plugin
class YellowSoundcloud
{
	const Version = "0.1.3";
	var $yellow;			//access to API
	
	// Initialise plugin
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("soundcloudStyle", "soundcloud");
	}
	
	// Handle custom type parsing
	function onParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if($name=="soundcloud" && $typeShortcut)
		{
			list($id, $style, $width, $height) = explode(' ', $text);
			if(empty($style)) $style = $this->yellow->config->get("soundcloudStyle");
			if(empty($width)) $width = "100%";
			if(empty($height)) $height = "166";
			$output = "<div class=\"$style\">";
			$output .= "<iframe src=\"https://w.soundcloud.com/player/?url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F$id\" frameborder=\"0\"";
			$output .= " width=\"$width\" height=\"$height\"";
			$output .= "></iframe></div>";
		}
		return $output;
	}
}

$yellow->registerPlugin("soundcloud", "YellowSoundcloud", YellowSoundcloud::Version);
?>