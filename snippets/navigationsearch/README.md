Navigationsearch snippet
========================
Website navigation with search bar.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download and install [Yellow search template](https://github.com/markseu/yellowcms-extensions/blob/master/templates/search/README.md).  
3. Download [navigationsearch.php](navigationsearch.php?raw=true), copy into your system/snippets folder.  
4. Use the snippet on your website, edit templates in your system/templates folder.
5. Customise style sheets in your system/themes folder.

To uninstall delete the snippet and remove it from templates.

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
    .navigationsearch .search-text { font-family:inherit; font-size:inherit; font-weight:inherit; }
    .navigationsearch .search-text { padding:0.5em; border:2px solid #eee; width:100%; box-sizing:border-box; }