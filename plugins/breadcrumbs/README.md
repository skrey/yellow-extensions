Breadcrumbs plugin 0.5.1
========================
Breadcrumbs navigation for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [breadcrumbs.php](breadcrumbs.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to add breadcrumbs?
-----------------------
Create a shortcut in the format `[breadcrumbs SEPARATOR]`, you can add optional arguments:
 
`SEPARATOR ` = text used between pages  
`STYLE` = breadcrumbs style  
 
Example
-------
Adding breadcrumbs, default and optional arguments:

    [breadcrumbs >]
    [breadcrumbs / crumbs]

Adding breadcrumbs to a content snippet:

    <div class="content main">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getExtra("breadcrumbs") ?>
    <?php echo $yellow->page->getContent() ?>
    </div>
