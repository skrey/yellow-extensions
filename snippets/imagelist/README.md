Imagelist snippet
=================
List of images for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [imagelist.php](imagelist.php?raw=true), copy into your system/snippets folder.  
3. Use the snippet on your website, add it to your footer snippet.

To uninstall delete the snippet.

Example
-------
Content snippet, creates a list of images from your media/images folder:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", ".*screenshot.jpg") ?>
    </div>

Content snippet, creates a list of images from your media/images/product folder:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("imagelist", "product/.*.jpg") ?>
    </div>
