Multilanguage snippet
====================
Language selection for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [multilanguage.php](multilanguage.php?raw=true), copy into your `system/snippets` folder.  
3. Use the snippet on your website, edit templates in your `system/templates` folder.
4. Customise style sheets in your `system/themes` folder.
5. Enable [multi language mode](https://github.com/markseu/yellowcms/wiki/Language-configuration) and translate your website. 

To uninstall delete the snippet and remove it from templates.

Example
-------
Template with language selection below navigation:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("multilanguage") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

Style for language selection:

    .multilanguage { margin:1em; line-height:2em; float:right; }
    .multilanguage a { padding:0 0.5em; display:inline-block; }
    .multilanguage ul { margin:0; padding:0; list-style:none; }
    .multilanguage li { display:inline; }