Navigationsub snippet
=====================
Website navigation with visible pages one level below top-level navigation.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [navigationsub.php](navigationsub.php?raw=true), copy into your `system/snippets` folder.  
3. Use the snippet on your website, edit templates in your `system/templates` folder.
4. Customise style sheets in your `system/themes` folder.

To uninstall delete the snippet and remove it from other files.

Example
-------
Template with navigation and sub navigation:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("navigationsub") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

Style for sub navigation:

    .page { position:relative; }
    .navigationsub { position:absolute; top:2.9em; right:0em; }
    .navigationsub { margin-bottom:1em; line-height:2em; }
    .navigationsub a { padding:0 0.3em; display:inline-block; }
    .navigationsub ul {  margin:0 -0.3em; padding:0; list-style:none; }
    .navigationsub li { display:inline; }