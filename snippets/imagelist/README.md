Imagelist snippet
=================
List of images for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/image).  
3. Download [imagelist.php](imagelist.php?raw=true), copy into your `system/snippets` folder.  
4. Use the snippet on your website, edit templates in your `system/templates` folder.
5. Customise style sheets in your `system/themes` folder.

To uninstall delete the snippet and remove it from other files.

How to create a list of images?
-------------------------------
Add imagelist to your templates: `$yellow->snippet("imagelist", PATTERN, STYLE, SIZE)`.  
`PATTERN` is a [regular expression](https://en.wikipedia.org/wiki/Regular_expression) to specify file names of images.  
`STYLE` is the list style (optional).  
`SIZE` is the image size (optional).

Example
-------
Template with list of images from your `media/images` folder:

    <?php /* Example template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg") ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Template with list of images from your `media/images` folder, optional size:

    <?php /* Example template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg", "imagelist", "25%") ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Style for 4 images per row:

    .content .imagelist { margin:0; padding:0; list-style:none; width:100%; }
    .content .imagelist li { padding-bottom:1em; text-align:center; white-space:nowrap; display:inline-block; width:24%; }