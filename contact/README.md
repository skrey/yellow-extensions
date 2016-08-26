Contact plugin 0.6.4
====================
Email contact page for website.

<p align="center"><img src="contact-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/contact.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `contact.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

## How to use a contact page?

The contact page is available on your website as `http://website/contact/`. The webmaster's email is defined in file `system/config/config.ini`, for example `Email: email@example.com`. A different email can be defined in the settings at the top of a page. There's a spam filter to block advertising. You can add a link to the contact page somewhere on your website. See example below.

## Example

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

## Developer

Datenstrom
