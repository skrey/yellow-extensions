Navigationsub snippet
=====================
Website navigation with one level below top-level navigation.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [navigationsub.php](navigationsub.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to change the navigation?
-----------------------------
Add a snippet in the format `$yellow->snippet("navigationsub")`.  

The snippet is a replacement for the normal navigation. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

**Important:** The snippet needs a compatible theme, otherwise you have to add CSS.

Example
-------
Header snippet with sub navigation:

    <!DOCTYPE html>
    ...
    <div class="sitename-banner"></div>
    <?php $yellow->snippet("navigationsub") ?>
    </div>