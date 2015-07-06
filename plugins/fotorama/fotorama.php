<?php
// Copyright (c) 2015 Jef Lippiatt, http://nogginfuel.co
// This file may be used and distributed under the terms of the public license.

// Fotorama plugin
class YellowFotorama
{
	const Version = "0.1.0";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
	
	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = NULL;
		if($name == "footer")
		{
			$locationStylesheet = $this->yellow->config->get("serverBase").$this->yellow->config->get("pluginLocation")."fotorama.css";
			$fileNameStylesheet = $this->yellow->config->get("pluginDir")."fotorama.css";
			if(is_file($fileNameStylesheet)) $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"$locationStylesheet\" />\n";
			
			$locationJavascript = $this->yellow->config->get("serverBase").$this->yellow->config->get("pluginLocation")."fotorama.js";
			$fileNameJavascript = $this->yellow->config->get("pluginDir")."fotorama.js";
			if(is_file($fileNameJavascript)) $output = "<script media=\"all\" src=\"$locationJavascript\" />\n";
		}
		
		
		return $output;
	}
}

$yellow->plugins->register("fotorama", "YellowFotorama", YellowFotorama::Version);
?>