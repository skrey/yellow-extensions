Search template
===============

Full-text search for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [search.php](search.php?raw=true), copy it into your system/templates folder.  
3. Create a new folder 'search' in your content folder.
4. Download [page.txt](page.txt?raw=true), copy it into your content/search folder.
5. Add these [text lines](text.ini?raw=true) to your system/config/text.ini file.

To uninstall delete the template files and folder.

How to use a search?
--------------------
The search is available on your website as `http://website/search/`. It searches trough content and meta data of the entire website, only visible pages are included. You can add a link or HTML form to your navigation, see example below.

This template does not work with static websites, it needs a Yellow installation.

Example
-------

Navigation snippet with search form:

    ...
    <form class="search-form" action="<?php echo $yellow->pages->serverBase ?>/search/" method="post">
    <input class="search-text" type="text" name="query" placeholder="<?php echo $yellow->text->getHtml("searchButton") ?>" />
    <input type="hidden" name="clean-url" />
    </form>
    ...

Style for search form:

    ...
    .navigation { position:relative; }
    .navigation .search-form { position:absolute; top:0; right:0; }
    .navigation .search-text { font-family:inherit; font-size:inherit; font-weight:inherit; margin:0; }
    @media screen and (max-width:30em) { .navigation .search-form { display:none } }
    ...