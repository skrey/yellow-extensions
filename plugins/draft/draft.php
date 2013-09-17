<?php
// Copyright (c) 2013 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Draft status plugin
class Yellow_Draft
{
	const Version = "0.1.1";
	var $yellow;			//access to API
	
	// Initialise plugin
	function initPlugin($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("draftStatusCode", "404");
	}
	
	// Handle page meta data parsing
	function OnParseMeta($page, $text)
	{
		if($page->get("status") == "draft") $page->visible = false;
	}
	
	// Handle page content parsing
	function onParseContent($page, $text)
	{
		if($page->get("status") == "draft") $page->error($this->yellow->config->get("draftStatusCode"));
	}
}

$yellow->registerPlugin("draft", "Yellow_Draft", Yellow_Draft::Version);
?>