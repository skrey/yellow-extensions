<?php
// Copyright (c) 2013-2014 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Server include plugin
class YellowInclude
{
	const Version = "0.1.2";
	var $yellow;			//access to API
	
	// Handle plugin initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
	}
	
	// Handle custom type parsing
	function onParseType($name, $text, $typeShortcut)
	{
		$output = NULL;
		if($name=="include" && $typeShortcut)
		{
			$args = explode(' ', $text);
			$type = array_shift($args);
			switch($type)
			{
				case "snippet":	ob_start();
								call_user_func_array(array($this->yellow, $type), $args);
								$output = ob_get_contents();
								ob_end_clean();
								break;
				case "text":	list($key, $language) = $args;
								if(empty($language)) $language = $this->yellow->text->language;
								$output = htmlspecialchars($this->yellow->text->getText($key, $language));
								break;
			}
		}
		return $output;
	}
}

$yellow->registerPlugin("include", "YellowInclude", YellowInclude::Version);
?>