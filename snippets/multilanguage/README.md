Multilanguage snippet
=====================
Language selection for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Enable [multi language mode](https://github.com/datenstrom/yellow/wiki/Language-configuration). 
3. Download [multilanguage.php](multilanguage.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to show languages?
----------------------
Add a snippet in the format `$yellow->snippet("multilanguage")`, you can add optional arguments:
  
`PAGE` = page you want to be linked

The snippet creates a list of available languages. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Footer snippet with language selection:

    <div class="footer">
    ...
    <?php $yellow->snippet("multilanguage") ?>
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>

Footer snippet with language selection, optional page:

    <div class="footer">
    ...
    <?php $yellow->snippet("multilanguage", $yellow->page) ?>
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>