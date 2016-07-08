Contact plugin 0.6.4
====================
Email contact page for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [contact plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/contact.zip).
3. Copy `contact.php` into your `system/plugins` folder.
4. Copy `contact.html` into your `system/themes/templates` folder.
5. Copy `content-contact.php` into your `system/themes/snippets` folder.
6. Create a new folder 'contact' in your `content` folder.
7. Copy `page.txt` into your `content/contact` folder.

To uninstall delete the plugin files.

How to use a contact page?
--------------------------
The contact page is available on your website as `http://website/contact/`. The webmaster's email is defined in file `system/config/config.ini`, for example `Email: email@example.com`. A different email can be defined in the settings at the top of a page. There's a spam filter to block advertising. You can add a link to the contact page somewhere on your website. See example below.

Example
-------
Footer snippet with contact page:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2016 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/contact/" ?>">Contact</a>.
    <a href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a>.
    <a href="<?php echo $yellow->text->get("yellowUrl") ?>">Made with Yellow</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>
