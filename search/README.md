Search plugin 0.6.5
===================
Full-text search for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [search plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/search.zip).
3. Copy `search.php` into your `system/plugins` folder.
4. Copy `search.html` into your `system/themes/templates` folder.
5. Copy `content-search.php` and `navigation-search.php` into your `system/themes/snippets` folder.
6. Create a new folder 'search' in your `content` folder.
7. Copy `page.txt` into your `content/search` folder.

To uninstall delete the plugin files.

How to use a search?
--------------------
The search is available on your website as `http://website/search/`. It searches trough content of the entire website, only visible pages are included. You can use a [custom navigation](http://developers.datenstrom.se/help/yellow-templates#custom-navigation), open file `system/config/config.ini` and change `Navigation: navigation-search`. To show a search field add a `[search]` shortcut to a page. You can also add a link to the search somewhere on your website. See example below.

Example
-------
Adding a search shortcut:

    [search]
    [search /search/]
    [search /research/]

Footer snippet with search page:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2016 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/search/" ?>">Search</a>.
    <a href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a>.
    <a href="<?php echo $yellow->text->get("yellowUrl") ?>">Made with Yellow</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>
