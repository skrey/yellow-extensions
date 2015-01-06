Multilanguage snippet
====================
Language selection for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [multilanguage.php](multilanguage.php?raw=true), copy into your `system/snippets` folder.  
3. Enable [multi language mode](https://github.com/markseu/yellowcms/wiki/Language-configuration) and translate your website. 
4. Use the snippet on your website, edit snippets in your `system/snippets` folder.

To uninstall delete the snippet and remove it from other files.

How to use multiple languages?
------------------------------
Add languages to your snippets: `$yellow->snippet("multilanguage", PAGE)`.  
PAGE is optional, it's specifies that you want a link to the translated page. 

Example
-------
Footer with language selection:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    <?php $yellow->snippet("multilanguage") ?>
    </div>
    </div>
    </body>
    </html>

Footer with language selection, optional page:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    <?php $yellow->snippet("multilanguage", $yellow->page) ?>
    </div>
    </div>
    </body>
    </html>