Imagelist snippet
=================
List of images.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/image).  
3. Download [imagelist.php](imagelist.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to make a list?
-------------------
Add a snippet in the format `$yellow->snippet("imagelist")`, you can add optional arguments:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = list style  
`SIZE` = image size, pixel or percent

The snippet creates a list of images from your `media/images` folder. Images can be be shown unmodified or resized. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Content snippet with list of images from your `media/images` folder:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg") ?>
    </div>

Content snippet with list of images from your `media/images` folder, optional arguments:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg", "imagelist", "25%") ?>
    </div>

CSS for four images in a row:

    .content .imagelist { margin:0; padding:0; list-style:none; width:100%; }
    .content .imagelist li { padding-bottom:1em; text-align:center; white-space:nowrap; display:inline-block; width:24%; }