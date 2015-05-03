Breadcrumbs snippet
===================
Website navigation with breadcrumbs.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [breadcrumbs.php](breadcrumbs.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to show breadcrumbs?
------------------------
Add a snippet in the format `$yellow->snippet("breadcrumbs")`, you can add optional arguments:  

`SEPARATOR` = text used between pages

The snippet shows the path from home page to current page. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Content snippet with breadcrumbs:

    <div class="content">
    <?php $yellow->snippet("breadcrumbs") ?>
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    </div>

Content snippet with breadcrumbs, optional separator:

    <div class="content">
    <?php $yellow->snippet("breadcrumbs", ":") ?>
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    </div>
