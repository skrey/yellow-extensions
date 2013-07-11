Editing templates
=================

All templates are located in the **system folder**.  You can define website layout and functionality here.

![Screenshot](picture_templates.png?raw=true)

A template controls the output of a page. The file `system/templates/default.php` is the default template of your website. An individual template can be defined in the meta data of a page (Info), for example `Template: welcome` uses the file `system/templates/welcome.php`. There are little limitations, templates can generate web pages and any other output format. Here's an example:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <?php echo $yellow->page->getContent() ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Basically, write any [PHP](https://en.wikipedia.org/wiki/PHP) code you like.

Snippets
--------
Snippets are pieces of PHP located in the `snippets` folder. They allow to re-use the same code in multiple templates:

    <?php $yellow->snippet("navigation") ?>

You can pass arguments to snippets:

    <?php $yellow->snippet("pagination", $argument1, $argument2) ?>

Have a look at existing templates and snippets.

Yellow API
----------

Here are the main objects for templates and snippets:

**$yellow->page** is the current page data  
**$yellow->pages** is the current page tree from file system  
**$yellow->config** gives access to configuration  
**$yellow->text** gives access to text strings  

For an overview see [Yellow API Cheatsheet](yellowapi.md).