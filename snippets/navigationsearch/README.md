Navigationsearch snippet
========================
Website navigation with search bar.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download and install [Yellow search template](https://github.com/markseu/yellowcms-extensions/blob/master/templates/search/README.md).  
3. Download and install [Fontawesome icon plugin](https://github.com/markseu/yellowcms-extensions/blob/master/plugins/fontawesome/README.md).  
4. Download [navigationsearch.php](navigationsearch.php?raw=true), copy into your `system/snippets` folder.  
5. Use the snippet on your website, edit templates in your `system/templates` folder.
6. Customise style sheets in your `system/themes` folder.

To uninstall delete the snippet and remove it from other files.

Example
-------
Template with navigation and search bar:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <?php $yellow->snippet("navigationsearch") ?>
    <?php $yellow->snippet("content") ?>
    <?php $yellow->snippet("footer") ?>

Style for search bar:

    .navigationsearch { margin:1.5em 0; }
    .navigationsearch .search-form { position:relative; }
    .navigationsearch .search-text { font-family:inherit; font-size:inherit; font-weight:inherit; }
    .navigationsearch .search-text { padding:0.5em; border:2px solid #eee; width:100%; box-sizing:border-box; }
    .navigationsearch .search-text { background-color:#fff; background-image:linear-gradient(to bottom, #fff, #fff); }
    .navigationsearch .search-button { position:absolute; top:0; right:0; }
    .navigationsearch .search-button { font-family:inherit; font-size:inherit; font-weight:inherit; }
    .navigationsearch .search-button { margin:5px; padding:0.3em; border:none; background-color:transparent; }