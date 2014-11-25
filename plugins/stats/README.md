Stats plugin 0.1.1
==================
Create statistics from web server logfiles.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [stats.php](stats.php?raw=true), copy into your system/plugins folder.  

To uninstall delete the plugin.

How to create statistics?
-------------------------
The statistics are available at the command line. It shows referring sites and popular content. Go to your Yellow installation. Type `php yellow.php stats`, you can add optional days and file name. There's a spam filter to remove unwanted sites.

This plugins analyses your web server logfiles, use [Piwik](https://github.com/markseu/yellowcms-extensions/tree/master/snippets/piwik) for more detailed statistics.

Example
-------
Creating statistics, different duration and file name:

`php yellow.php stats`  
`php yellow.php stats 1`  
`php yellow.php stats 30 /var/log/apache2/website_access.log` 

Here's an example output:
~~~~
Referring sites

- 181 http://www.queness.com/post/16142/11-lightning-fast-flat-file-cms
- 159 http://www.datamation.com/open-source/50-noteworthy-new-open-source-projects-1.html
- 48 http://upload-magazin.de/blog/9199-keep-it-simple-vom-one-pager-zum-flat-file-cms/
- 27 http://trendschau.net/blog/uebersicht-flat-file-cms
- 24 http://www.sunarlim.com/2014/03/flat-file-cms-comparison/

Popular content

- 980 http://datenstrom.se/yellow/
- 442 http://datenstrom.se/
- 305 http://datenstrom.se/yellow
- 177 http://datenstrom.se/ideas/ideas-for-a-new-flat-file-cms-software
- 140 http://datenstrom.se/contact/

Yellow stats: 30 days, 2903 views
~~~~
