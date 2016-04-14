Sitemap plugin 0.6.3
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
The sitemap is available as `http://website/sitemap/` and `http://website/sitemap/page:sitemap.xml`. It's an overview of the entire website, only visible pages are included. You can add a link to the sitemap somewhere on your website. See example below.
 
Example
-------
Footer snippet with sitemap:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2016 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/sitemap/" ?>">Sitemap</a>. 
    <a href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a>.
    <a href="<?php echo $yellow->text->get("yellowUrl") ?>">Made with Yellow</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>