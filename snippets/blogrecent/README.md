Blogrecent snippet
==================
Recent blog articles.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Yellow blog template](https://github.com/datenstrom/yellow-extensions/blob/master/templates/blog/README.md).  
3. Download [blogrecent.php](blogrecent.php?raw=true), copy it into your `system/themes/snippets` folder.  
4. Use the snippet on your website, edit templates in your `system/themes/templates` folder.
5. Customise style sheets in your `system/themes` folder.

To uninstall delete the snippet and remove it from other files.

Example
-------
Template with recent 3 blog articles:

    <?php /* Example template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("blogrecent", $yellow->pages->find("/blog/"), 3) ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Blogarticles template with recent 3 blog articles:

    <?php /* Blogarticles template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content blogarticles">
    ...
    <?php $yellow->snippet("blogrecent", $yellow->page, 3) ?>
    <?php $yellow->snippet("pagination", $pages) ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Style for recent blog articles:

    .blogrecent ul { margin:0; padding:0; list-style:none; }