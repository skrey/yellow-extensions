Blogarchive snippet
===================
Monthly archive for blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Yellow blog plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/blog/README.md).  
3. Download [blogarchive.php](blogarchive.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to show an archive?
-----------------------
Add a snippet in the format `$yellow->snippet("blogarchive", BLOG)`:  

`BLOG` = start page of your blog

The snippet creates a list of months. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Blog snippet with archive:

    <div class="content main">
    <div class="entry">
    ...
    </div>
    <?php $yellow->snippet("blogarchive", $yellow->page->getParentTop()) ?>
    <?php echo $yellow->page->getExtra() ?>
    </div>

Blogpages snippet with archive:

    <div class="content main">
    ...
    <?php $yellow->snippet("blogarchive", $yellow->page) ?>
    <?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
    </div>

CSS for blog archive:

    .blogarchive ul { margin:0; padding:0; list-style:none; }