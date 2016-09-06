Contact plugin 0.6.5
====================
Email contact page for your website. [See demo](https://developers.datenstrom.se/plugins/contact-plugin).

<p align="center"><img src="contact-screenshot.png?raw=true" alt="Screenshot"></p>

## How do I install this?

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/contact.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `contact.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

## How to use a contact page?

The contact page is available on your website as `http://website/contact/`. The contact email is send to the webmaster, which is defined in file `system/config/config.ini`. You can set a different `Author` and `Email` in the [settings](https://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. To show a contact form add a `[contact]` shortcut to a page. You can also add a link to the contact page somewhere on your website. See example below.

## How to configure a contact page?

The following settings can be configured in file `system/config/config.ini`:

`Author` = webmaster's name, e.g. `Anna Svensson`  
`Email` = webmaster's email, e.g. `email@example.com`  
`ContactLocation` = contact page location  
`ContactSpamFilter` = spam filter as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  

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
