Navigationtree snippet
======================
Website navigation with tree of all visible pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [navigationtree.php](navigationtree.php?raw=true), copy into your system/snippets folder.  
3. Use the snippet on your website, edit templates in your system/templates folder.
4. Customise style sheets in your system/themes folder.

To uninstall delete the snippet and remove it from templates.

Example
-------
Template with navigation tree:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigationtree") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

Style for testing navigation tree:

    .navigation { position:relative; }
    .navigation ul ul { display:none; position:absolute; top:2em; left:0; }
    .navigation ul li:hover > ul { display:block; }
