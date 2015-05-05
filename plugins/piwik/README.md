Piwik plugin 0.5.2
==================
Add [Piwik](http://piwik.org) statistics to website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Piwik](http://piwik.org/).  
3. Download [piwik.php](piwik.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to create statistics?
-------------------------  
The statistics are created with [Piwik](http://piwik.org/), which is an open-source web analytics software. It can show visitors, pageviews, referring sites and geographic information. To use the plugin open file `system/config/config.ini`, add `piwikServerName` and `piwikSiteId`. You can find the ID of your website in the Piwik administration.

Example
-------
Configuration file with Piwik settings:

    sitename = Anna Svensson Design
    author = Anna Svensson
    language = en
    theme = flatsite
    ...
    piwikServerName = annasdesign.eu/piwik
    piwikSiteId = annasdesign
