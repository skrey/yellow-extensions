Imagelist snippet
=================
List of images for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [imagelist.php](imagelist.php?raw=true), copy into your `system/snippets` folder.  
3. Use the snippet on your website, edit templates in your `system/templates` folder.

To uninstall delete the snippet and remove it from other files.

How to create a list of images?
-------------------------------
Add imagelist to your templates: `$yellow->snippet("imagelist", PATTERN, STYLE)`.  
`PATTERN` is a regular expression to specify file names of images.  
`STYLE` is the list style (optional).

Example
-------
Template with list of images from your `media/images` folder:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg") ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Template with list of images from your `media/images` folder, optional style:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg", "screenshots") ?>
    </div>
    <?php $yellow->snippet("footer") ?>
