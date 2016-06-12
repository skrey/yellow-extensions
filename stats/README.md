Stats plugin 0.6.7
==================
Create statistics from web server logfiles.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [stats plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/stats.zip).
3. Copy `stats.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to create statistics?
-------------------------
The statistics are available at the [command line](https://github.com/datenstrom/yellow-plugins/tree/master/commandline). It shows referring sites, popular content, search queries and error pages. Open a terminal window. Go to your Yellow installation, where the `yellow.php` is. Type `php yellow.php stats`, you can add optional days, location and file name. There's a spam filter to remove bots. See example below.

This plugins analyses your web server logfiles, use [Piwik](https://github.com/datenstrom/yellow-plugins/tree/master/piwik) for more detailed statistics.

Example
-------
Creating statistics at the command line:

`php yellow.php stats`  
`php yellow.php stats 1`  
`php yellow.php stats 30 /yellow/ /var/log/apache2/website_access.log` 

~~~~
Referring sites

- 181 http://www.queness.com/post/16142/11-lightning-fast-flat-file-cms
- 159 http://www.datamation.com/open-source/50-noteworthy-new-open-source-projects-1.html
- 52 http://www.hongkiat.com/blog/flat-cms/
- 27 http://trendschau.net/blog/uebersicht-flat-file-cms
- 24 http://www.flatphile.co/yellow

Popular content

- 980 http://datenstrom.se/yellow/
- 442 http://datenstrom.se/
- 305 http://datenstrom.se/ideas/
- 101 http://datenstrom.se/contact/

Error pages

- 20 http://datenstrom.se/index.php - Not found
- 12 http://datenstrom.se/admin/admin.php - Not found

Yellow stats: 30 days, 2903 views
~~~~
