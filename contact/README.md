Contact plugin 0.6.1
====================
Email contact page for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [contact.php](contact.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [contact.html](contact.html?raw=true), copy it into your `system/themes/templates` folder.  
4. Download [content-contact.php](content-contact.php?raw=true), copy it into your `system/themes/snippets` folder.  
5. Create a new folder 'contact' in your `content` folder.
6. Add [page.txt](page.txt?raw=true) to your `content/contact` folder.

To uninstall delete the plugin files.

How to use a contact page?
--------------------------
The contact page is available on your website as `http://website/contact/`. Your email address can be defined in the settings at the top of a page, for example `ContactEmail: user@user.com`. A global email address can be defined in the main configuration file. There's a spam filter to block unwanted advertising. You can add a link to the contact page somewhere on your website. See example below.

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