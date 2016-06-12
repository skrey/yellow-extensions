Sitemap plugin 0.6.3
====================
Sitemap for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [sitemap plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/sitemap.zip).3. Copy `sitemap.php` into your `system/plugins` folder.
4. Copy `sitemap.html` into your `system/themes/templates` folder.
5. Copy `content-sitemap.php` into your `system/themes/snippets` folder.
6. Create a new folder 'sitemap' in your `content` folder.
7. Copy `page.txt` into your `content/sitemap` folder.

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