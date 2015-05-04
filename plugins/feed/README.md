Feed plugin 0.5.1
=================
Web feed with recent changes.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [feed.php](feed.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [feed.html](feed.html?raw=true), copy it into your `system/themes/templates` folder.  
4. Download [content-feed.php](content-feed.php?raw=true), copy it into your `system/themes/snippets` folder.  
6. Create a new folder 'feed' in your `content` folder.
7. Add [page.txt](page.txt?raw=true) to your `content/feed` folder.

To uninstall delete the plugin files.

How to use a feed?
------------------
The feed is available on your website as `http://website/feed/` and `http://website/feed/page:feed.xml`. It shows the recently changed pages of the website, only visible pages are included. For feed readers it's recommended to add a link to the header snippet, see example below.
 
Example
-------
Header snippet with feed:

    <!DOCTYPE html>
    ...
    <link rel="alternate" type="application/rss+xml" href="<?php echo $yellow->config->get("serverBase")."/feed/page:feed.xml" ?>" />
    <?php echo $yellow->page->getExtra("header") ?>
    </head>
    <body>
    <div class="page">

Footer snippet with feed:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/feed/" ?>">Feed</a>. 
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>