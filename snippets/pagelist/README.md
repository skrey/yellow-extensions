Pagelist snippet
================
List of pages with image preview.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download and install [image plugin](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/image).  
3. Download [pagelist.php](pagelist.php?raw=true), copy into your `system/snippets` folder.  
4. Use the snippet on your website, edit templates in your `system/templates` folder.
5. Customise style sheets in your `system/themes` folder.
To uninstall delete the snippet and remove it from other files.

How to create a list of pages?
------------------------------
Add pagelist to your templates: `$yellow->snippet("pagelist", PAGES, STYLE, SIZE)`.  
`PAGES` is a collection of pages.  
`STYLE` is the list style (optional).  
`SIZE` is the image size (optional).

For every page there has to be an image of similar name in your `media/images` folder.

Example
-------
Template with list of pages in current folder:

    <?php /* Example template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("pagelist", $yellow->page->getChildren()) ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Template with list of pages in current folder, optional size:

    <?php /* Example template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("pagelist", $yellow->page->getChildren(), "pagelist", "25%") ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Style for 4 pages per row:

    .content .pagelist { margin:0; padding:0; list-style:none; width:100%; }
    .content .pagelist li { padding-bottom:1em; text-align:center; white-space:nowrap; display:inline-block; width:24%; }