Blogrecent snippet
==================
Recent blog pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [Yellow blog plugin](https://github.com/datenstrom/yellow-extensions/blob/master/plugins/blog/README.md).  
3. Download [blogrecent.php](blogrecent.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to show recent blog pages?
------------------------------
Add a snippet in the format `$yellow->snippet("blogrecent", BLOG, PAGESMAX)`:  

`BLOG` = start page of your blog  
`PAGESMAX` = number of pages to show  

The snippet creates a list of pages. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Content snippet with recent 3 blog pages:

    <div class="content main">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("blogrecent", $yellow->pages->find("/blog/"), 3) ?>
    </div>

Blogpages snippet with recent 3 blog pages:

    <div class="content main">
    ...
    <?php $yellow->snippet("blogrecent", $yellow->page, 3) ?>
    <?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
    </div>

CSS for recent blog pages:

    .blogrecent ul { margin:0; padding:0; list-style:none; }