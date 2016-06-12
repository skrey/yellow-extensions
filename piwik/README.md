Piwik plugin 0.6.2
==================
Add Piwik statistics to website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and install [Piwik](http://piwik.org/).
3. Download and unzip [Piwik plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/piwik.zip).
4. Copy `piwik.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to create statistics?
-------------------------  
The statistics are created with [Piwik](http://piwik.org/), which is an open-source web analytics software. It can show visitors, pageviews, referring sites and geographic information. To use the plugin open file `system/config/config.ini`, add `PiwikServerName: your.domain.name` and `PiwikSiteId: website`. You can find your server name and ID in the Piwik administration.