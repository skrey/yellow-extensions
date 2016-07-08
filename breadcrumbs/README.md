Breadcrumbs plugin 0.6.2
========================
Breadcrumbs navigation for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [breadcrumbs plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/breadcrumbs.zip).
3. Copy `breadcrumbs.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to add breadcrumbs?
-----------------------
Create a `[breadcrumbs]` shortcut. 

The following arguments are available:
 
`SEPARATOR ` = text used between pages  
`STYLE` = breadcrumbs style  
 
Example
-------
Adding breadcrumbs:

    [breadcrumbs]
    [breadcrumbs /]
    [breadcrumbs / crumbs]

Adding breadcrumbs to a content snippet:

    <div class="content main">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getExtra("breadcrumbs") ?>
    <?php echo $yellow->page->getContent() ?>
    </div>
