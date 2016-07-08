Feed plugin 0.6.4
=================
Web feed with recent changes.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [feed plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/feed.zip).
3. Copy `feed.php` into your `system/plugins` folder.
4. Copy `feed.html` into your `system/themes/templates` folder.
5. Copy `content-feed.php` into your `system/themes/snippets` folder.
6. Create a new folder 'feed' in your `content` folder.
7. Copy `page.txt` into your `content/feed` folder.

To uninstall delete the plugin files.

How to use a feed?
------------------
The feed is available on your website as `http://website/feed/` and `http://website/feed/page:feed.xml`. It's a feed for the entire website, only visible pages are included. To make a blog feed open file `system/config/config.ini` and add `FeedFilter: blog`. You can add a link to the feed somewhere on your website. See example below.
 
Example
-------
Footer snippet with RSS feed:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2016 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/feed/page:feed.xml" ?>">Feed</a>. 
    <a href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a>.
    <a href="<?php echo $yellow->text->get("yellowUrl") ?>">Made with Yellow</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>
