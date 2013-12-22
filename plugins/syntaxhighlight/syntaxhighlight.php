<?php
// Copyright (c) 2013 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Syntax highlight parser plugin
class YellowSyntaxhighlight
{
	const Version = "0.1.6";
	var $yellow;			//access to API
	
	// Initialise plugin
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("syntaxStyle", "syntaxhighlight");
		$this->yellow->config->setDefault("syntaxStyleDefault", "0");
		$this->yellow->config->setDefault("syntaxLineNumber", "0");
	}
	
	// Handle custom type parsing
	function onParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if(!empty($name) && !$typeShortcut)
		{
			list($name, $lineNumber) = explode(':', $name);
			if(is_null($lineNumber)) $lineNumber = $this->yellow->config->get("syntaxLineNumber");
			$geshi = new GeSHi(trim($text), $name);
			$geshi->set_language_path($this->yellow->config->get("pluginDir")."/syntaxhighlight/");
			$geshi->set_header_type(GESHI_HEADER_PRE_TABLE);
			$geshi->enable_line_numbers($lineNumber ? GESHI_NORMAL_LINE_NUMBERS : GESHI_NO_LINE_NUMBERS);
			$geshi->start_line_numbers_at($lineNumber);
			$geshi->enable_classes(true);
			$geshi->enable_keyword_links(false);
			$output = $geshi->parse_code();
			$output = preg_replace("#<pre(.*?)>(.+?)</pre>#s", "<pre$1><code>$2</code></pre>", $output);
		}
		return $output;
	}
	
	// Handle extra HTML header lines
	function onHeaderExtra()
	{
		$header = "";
		if(!$this->yellow->config->get("syntaxStyleDefault"))
		{
			$locationStyle = $this->yellow->config->get("serverBase");
			$locationStyle .= $this->yellow->config->get("pluginLocation").$this->yellow->config->get("syntaxStyle").".css";
			$fileNameStyle = $this->yellow->config->get("pluginDir").$this->yellow->config->get("syntaxStyle").".css";
			if(is_file($fileNameStyle)) $header = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"$locationStyle\" />\n";
		} else {
			$geshi = new GeSHi();
			$geshi->set_language_path($this->yellow->config->get("pluginDir")."/syntaxhighlight/");
			foreach($geshi->get_supported_languages() as $language)
			{
				if($language == "geshi") continue;
				$geshi->set_language($language);
				$output .= $geshi->get_stylesheet(false);
			}
			$header = "<style type=\"text/css\">\n$output</style>";
		}
		return $header;
	}
}
	
require_once("syntaxhighlight/geshi.php");

$yellow->registerPlugin("syntaxhighlight", "YellowSyntaxhighlight", YellowSyntaxhighlight::Version);
?>