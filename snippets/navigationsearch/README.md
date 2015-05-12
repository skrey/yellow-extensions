Navigationsearch snippet
========================
Website navigation with search bar.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [search plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/search/README.md).  
3. Download and install [Fontawesome plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/fontawesome/README.md).  
4. Download [navigationsearch](navigationsearch.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to change the navigation?
-----------------------------
Add a snippet in the format `$yellow->snippet("navigationsearch")`.  

The snippet is a replacement for the normal navigation. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

**Important:** The snippet needs a compatible theme, otherwise you have to add CSS.

Example
-------
Header snippet with navigation search:

    <!DOCTYPE html>
    ...
    <div class="sitename-banner"></div>
    <?php $yellow->snippet("navigationsearch") ?>
    </div>