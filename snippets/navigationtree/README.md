Navigationtree snippet
======================
Website navigation with tree of all visible pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [navigationtree.php](navigationtree.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to change the navigation?
-----------------------------
Add a snippet in the format `$yellow->snippet("navigationtree")`.  

The snippet is a replacement for the normal navigation. To use the snippet on your website, add it to templates in your `system/themes/templates` folder. See example below.

**Important:** The snippet needs a theme that supports a dropdown menu, otherwise add additional CSS.

Example
-------
Template with navigation tree:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigationtree") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>
