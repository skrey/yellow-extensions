Navigationside snippet
======================
Website navigation on the side.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [navigationside.php](navigationside.php?raw=true), copy into your `system/snippets` folder.  
3. Use the snippet on your website, edit templates in your `system/templates` folder.
4. Customise style sheets in your `system/themes` folder.

To uninstall delete the snippet and remove it from other files.

Example
-------
Template with navigation on the side

    <?php /* Default template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigationside") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

Style for search bar:

    .sitename { display:none; }
    .navigationside { float:left; overflow:hidden; padding-right:1em; width:9em; }
    .navigationside h1 { margin-top:0; font-size:2.0em; }
    .navigationside h1 a { color:#111; text-decoration:none; }
    .navigationside ul { margin:0; padding:0; list-style:none; }
    .navigationside li { display:block; }
    .content, .footer { margin-left:10em; }