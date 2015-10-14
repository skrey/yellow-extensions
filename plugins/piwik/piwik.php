<?php
// Copyright (c) 2013-2015 Datenstrom, http://datenstrom.se
// This file may be used and distributed under the terms of the public license.

// Piwik plugin
class YellowPiwik
{
	const Version = "0.6.1";
	var $yellow;			//access to API
	
	// Handle initialisation
	function onLoad($yellow)
	{
		$this->yellow = $yellow;
		$this->yellow->config->setDefault("piwikServerName", $this->yellow->config->get("serverName"));
		$this->yellow->config->setDefault("piwikSiteId", "Yellow");
	}
	
	// Handle page extra HTML data
	function onExtra($name)
	{
		$output = NULL;
		if($name == "footer")
		{
			$serverName = $this->yellow->config->get("piwikServerName");
			$siteId = $this->yellow->config->get("piwikSiteId");
			$output = "<script type=\"text/javascript\">\n";
			$output .= "var _paq = _paq || [];\n";
			$output .= "(function(){ var u=((\"https:\" == document.location.protocol) ? \"https\" : \"http\") + \"://".rawurlencode($serverName)."/\";\n";
			$output .= "_paq.push(['setSiteId', '".htmlspecialchars($siteId)."']);\n";
			$output .= "_paq.push(['setTrackerUrl', u+'piwik.php']);\n";
			$output .= "_paq.push(['trackPageView']);\n";
			$output .= "_paq.push(['enableLinkTracking']);\n";
			$output .= "var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript'; g.defer=true; g.async=true; g.src=u+'piwik.js';\n";
			$output .= "s.parentNode.insertBefore(g,s); })();\n";
			$output .= "</script>\n";
		}
		return $output;
	}
}

$yellow->plugins->register("piwik", "YellowPiwik", YellowPiwik::Version);
?>