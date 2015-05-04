Blogtagcloud snippet
====================
Tag cloud for blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Yellow blog plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/blog/README.md).  
3. Download [blogtagcloud.php](blogtagcloud.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to show a tag cloud?
------------------------
Add a snippet in the format `$yellow->snippet("blogtagcloud", BLOG)`:  

`BLOG` = start page of your blog

The snippet creates a list of tags. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Blog snippet with tag cloud:

    <div class="content blog">
    <div class="entry">
    ...
    </div>
    <?php $yellow->snippet("blogtagcloud", $yellow->page->getParentTop()) ?>
    <?php echo $yellow->page->getExtra() ?>
    </div>
 
Blogpages snippet with tag cloud:

    <div class="content blogpages">
    ...
    <?php $yellow->snippet("blogtagcloud", $yellow->page) ?>
    <?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
    </div>

CSS for tag cloud:

    .blogtagcloud li { display:inline; }
    .blogtagcloud ul { margin:0; padding:0; list-style:none; }
    .blogtagcloud .type1 { font-size:80%; }
    .blogtagcloud .type2 { font-size:100%; }
    .blogtagcloud .type3 { font-size:120%; }
    .blogtagcloud .type4 { font-size:140%; }
    .blogtagcloud .type5 { font-size:160%; }