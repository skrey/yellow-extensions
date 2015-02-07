Disqus snippet
==============
Add [Disqus](http://disqus.com) comments to website or blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [disqus.php](disqus.php?raw=true), copy into your `system/snippets` folder.  
3. Use the snippet on your website, edit templates in your `system/templates` folder.

To uninstall delete the snippet and remove it from other files.

How to enable comments?
------------------------
Create a Disqus account, add Disqus snippet to templates: `$yellow->snippet("disqus", SHORTNAME)`.  
`SHORTNAME` is the name of your website, you can find it in the Disqus dashboard.

Example
-------
Template with comments:

    <?php /* Example template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("disqus", "annasdesign") ?>
    </div>
    <?php $yellow->snippet("footer") ?>

Blog template with comments:

    <?php /* Blog template */ ?>
    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("sitename") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content blog">
    ...
    <?php $yellow->snippet("disqus", "annasdesign") ?>
    </div>
    <?php $yellow->snippet("footer") ?>