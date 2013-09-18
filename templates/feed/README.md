Feed template
=============

RSS feed with latest updates.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [feed.php](feed.php?raw=true), copy into your system/templates folder.  
3. Create a new folder 'feed' in your content folder.
4. Download [page.txt](page.txt?raw=true), copy into your content/feed folder.

To uninstall delete the feed template and folder.

How to use a feed?
------------------
The feed is available on your website as `http://website/feed/`. You can add a link to every page, for example add the following line to your header snippet:

`<link rel="alternate" type="application/rss+xml" href="<?php echo $yellow->config->get("serverBase")."/feed/" ?>">`