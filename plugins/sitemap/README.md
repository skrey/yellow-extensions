Sitemap plugin 0.5.1
====================
Sitemap for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [sitemap.php](sitemap.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [sitemap.html](sitemap.html?raw=true), copy it into your `system/themes/templates` folder.  
4. Download [content-sitemap.php](content-sitemap.php?raw=true), copy it into your `system/themes/snippets` folder.  
6. Create a new folder 'sitemap' in your `content` folder.
7. Add [page.txt](page.txt?raw=true) to your `content/sitemap` folder.

To uninstall delete the plugin files.

How to use a sitemap?
---------------------
The sitemap is available as `http://website/sitemap/` and `http://website/sitemap/page:sitemap.xml`. It's an overview of the entire website, only visible pages are included. For search engines it's recommended to add a link to the header snippet, see example below.
 
Example
-------
Header snippet with sitemap:

    <!DOCTYPE html>
    ...
    <link rel="sitemap" type="text/xml" href="<?php echo $yellow->config->get("serverBase")."/sitemap/page:sitemap.xml" ?>" />
    <?php echo $yellow->page->getExtra() ?>
    </head>
    <body>
    <div class="page">

Footer snippet with sitemap:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/sitemap/" ?>">Sitemap</a>. 
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    </div>
    </div>
    </body>
    </html>