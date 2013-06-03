Editing templates
=================

All templates are located in folder `system/templates` and written in [PHP](https://en.wikipedia.org/wiki/PHP). Here you define functionality and layout of your pages.

There's a template called `default.php`, that's the default template for all pages. An individual template can be defined in the meta data of a page (Info), for example `Template:sitemap` uses the file `system/templates/sitemap.php`. Feel free to write your own templates, here's an example:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">More text on this page.</div>
    <?php $yellow->snippet("footer") ?>

Snippets
--------
Snippets are pieces of PHP located in folder `system/snippets`. They allow to re-use the same code in multiple templates:

    <?php $yellow->snippet("navigation") ?>

You can pass arguments to snippets:

    <?php $yellow->snippet("pagination", $argument1, $argument2) ?>

It's good to have a look at existing templates and snippets.

Yellow API
----------

Here are the main objects for templates and snippets:

**$yellow->page** is the current page data  
**$yellow->pages** is the current page tree from file system  
**$yellow->config** gives access to site configuration  
**$yellow->text** gives access to site text strings  

For an overview see [Yellow API Cheatsheet](yellowapi.md).