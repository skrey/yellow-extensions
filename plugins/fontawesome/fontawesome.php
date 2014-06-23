<?php
// Copyright (c) 2013-2014 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Fontawesome plugin
class YellowFontawesome
{
	const Version = "0.1.1";
	var $yellow;			//access to API
	
	// Handle plugin initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("fontawesomeStyle", "fontawesome");
	}
	
	// Handle page extra header
	function onHeaderExtra($page)
	{
		$header = "";
		$locationStyle = $this->yellow->config->get("serverBase");
		$locationStyle .= $this->yellow->config->get("pluginLocation").$this->yellow->config->get("fontawesomeStyle").".css";
		$fileNameStyle = $this->yellow->config->get("pluginDir").$this->yellow->config->get("fontawesomeStyle").".css";
		if(is_file($fileNameStyle)) $header = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"$locationStyle\" />\n";
		return $header;
	}
}

$yellow->registerPlugin("fontawesome", "YellowFontawesome", YellowFontawesome::Version);
?>