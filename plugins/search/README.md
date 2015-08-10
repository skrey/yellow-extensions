Search plugin 0.5.2
===================
Full-text search for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [search.php](search.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [search.html](search.html?raw=true), copy it into your `system/themes/templates` folder.  
4. Download [content-search.php](content-search.php?raw=true) and [navigation-search.php](navigation-search.php?raw=true), copy them into your `system/themes/snippets` folder.  
5. Download latest [language-en.ini](https://github.com/datenstrom/yellow-extensions/blob/master/languages/english/language-en.ini?raw=true), copy it into your `system/config` folder.
6. Create a new folder 'search' in your `content` folder.
7. Add [page.txt](page.txt?raw=true) to your `content/search` folder.

To uninstall delete the plugin files.

How to use a search?
--------------------
The search is available on your website as `http://website/search/`. It searches trough content and meta data of the entire website, only visible pages are included. You can use a [custom navigation](https://github.com/datenstrom/yellow/wiki/Yellow-customisation#custom-navigation), open file `system/config/config.ini` and change `navigation = navigation-search`. You can also add a link to the search somewhere on your website. See example below.

Example
-------
Footer snippet with search page:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/search/" ?>">Search</a>.
    <a href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a>.
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>