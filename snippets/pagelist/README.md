Pagelist snippet
================
List of pages with image preview.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/image).  
3. Download [pagelist.php](pagelist.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to make a list?
-------------------
Add a snippet in the format `$yellow->snippet("pagelist")`, you can add optional arguments:

`PAGES` = collection of pages  
`STYLE` = list style  
`SIZE` = image size, pixel or percent  

The snippet creates a list of pages. For every page there should be an image of similar file name in your `media/images` folder. Images can be be shown unmodified or resized. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Content snippet with list of pages in current folder:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("pagelist") ?>
    </div>

Content snippet with list of pages in current folder, optional arguments:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("pagelist", $yellow->page->getChildren(), "pagelist", "25%") ?>
    </div>

CSS for four pages in a row:

    .content .pagelist { margin:0; padding:0; list-style:none; width:100%; }
    .content .pagelist li { padding-bottom:1em; text-align:center; white-space:nowrap; display:inline-block; width:24%; }