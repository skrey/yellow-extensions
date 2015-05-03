Navigationsearch snippet
========================
Website navigation with search bar.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Yellow search plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/search/README.md).  
3. Download and install [Fontawesome icon plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/fontawesome/README.md).  
4. Download [navigationsearch.php](navigationsearch.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to change the navigation?
-----------------------------
Add a snippet in the format `$yellow->snippet("navigationsearch")`.  

The snippet is an addition to the normal navigation. To use the snippet on your website, add it to templates in your `system/themes/templates` folder. See example below.

Example
-------
Template with navigation and search bar:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("navigationsearch") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

CSS for search bar:

    .navigationsearch { margin:1.5em 0; }
    .navigationsearch .search-form { position:relative; }
    .navigationsearch .search-text { font-family:inherit; font-size:inherit; font-weight:inherit; }
    .navigationsearch .search-text { padding:0.5em; border:2px solid #eee; width:100%; box-sizing:border-box; }
    .navigationsearch .search-text { background-color:#fff; background-image:linear-gradient(to bottom, #fff, #fff); }
    .navigationsearch .search-button { position:absolute; top:0; right:0; }
    .navigationsearch .search-button { font-family:inherit; font-size:inherit; font-weight:inherit; }
    .navigationsearch .search-button { margin:5px; padding:0.3em; border:none; background-color:transparent; }