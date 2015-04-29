Multilanguage snippet
=====================
Language selection for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Enable [multi language mode](https://github.com/datenstrom/yellow/wiki/Language-configuration) and translate your website. 
3. Download [multilanguage.php](multilanguage.php?raw=true), copy it into your `system/themes/snippets` folder.  
4. Use the snippet on your website, edit snippets in your `system/themes/snippets` folder.

To uninstall delete the snippet and remove it from other files.

How to use multiple languages?
------------------------------
Add multilanguage to your snippets: `$yellow->snippet("multilanguage", PAGE)`.  
`PAGE` specifies which page you want to be linked (optional). 

Example
-------
Footer snippet with language selection:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    <?php $yellow->snippet("multilanguage") ?>
    </div>
    </div>
    </body>
    </html>

Footer snippet with language selection, optional page:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    <?php $yellow->snippet("multilanguage", $yellow->page) ?>
    </div>
    </div>
    </body>
    </html>