Breadcrumbs snippet
===================
Website navigation with breadcrumbs.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [breadcrumbs.php](breadcrumbs.php?raw=true), copy into your `system/snippets` folder.  
3. Use the snippet on your website, edit templates in your `system/templates` folder.

To uninstall delete the snippet and remove it from other files.

How to use breadcrumbs?
-----------------------
Add breadcrumbs to your templates: `$yellow->snippet("breadcrumbs", SEPARATOR)`.  
SEPARATOR is optional, it's a text used between pages.

Example
-------
Template with breadcrumbs below navigation:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("breadcrumbs") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

Template with breadcrumbs below navigation, optional separator:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("breadcrumbs", ":") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>