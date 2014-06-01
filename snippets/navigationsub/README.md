Navigationsub snippet
=====================
Website navigation with visible pages one level below top-level navigation.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [navigationsub.php](navigationsub.php?raw=true), copy into your system/snippets folder.  
3. Use the snippet on your website, edit templates in your system/templates folder.

To uninstall delete the snippet and remove it from templates.

Example
-------
Template with top-level and sub navigation:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("navigationsub") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>