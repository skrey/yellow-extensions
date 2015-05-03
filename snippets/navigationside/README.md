Navigationside snippet
======================
Website navigation on the side.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [navigationside.php](navigationside.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to change the navigation?
-----------------------------
Add a snippet in the format `$yellow->snippet("navigationside")`.  

The snippet is a replacement for the normal navigation. To use the snippet on your website, add it to templates in your `system/themes/templates` folder. See example below.

Example
-------
Template with navigation on the side

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigationside") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

CSS for navigation:

    .sitename { display:none; }
    .navigationside { float:left; overflow:hidden; padding-right:1em; width:9em; }
    .navigationside h1 { margin-top:0; font-size:2.0em; }
    .navigationside h1 a { color:#111; text-decoration:none; }
    .navigationside ul { margin:0; padding:0; list-style:none; }
    .navigationside li { display:block; }
    .content, .footer { margin-left:10em; }