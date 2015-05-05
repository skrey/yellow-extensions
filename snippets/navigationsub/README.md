Navigationsub snippet
=====================
Website navigation with visible pages one level below top-level navigation.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [navigationsub.php](navigationsub.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to change the navigation?
-----------------------------
Add a snippet in the format `$yellow->snippet("navigationsub")`.  

The snippet is an addition to the normal navigation. To use the snippet on your website, add it to templates in your `system/themes/templates` folder. See example below.

**Important:** The snippet needs a theme that supports a sub navigation, otherwise add additional CSS.

Example
-------
Template with navigation and sub navigation:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("navigationsub") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>
