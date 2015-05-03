Disqus snippet
==============
Add [Disqus](http://disqus.com) comments to website or blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [disqus.php](disqus.php?raw=true), copy it into your `system/themes/snippets` folder.  

To uninstall delete the snippet.

How to show comments?
---------------------
Add a snippet in the format `$yellow->snippet("disqus", SHORTNAME)`:
  
`SHORTNAME` = name of your website, you can find it in the Disqus dashboard.  

The snippet shows [Disqus](http://disqus.com) comments, which is a comment service for websites. To use the snippet on your website, add it to snippets in your `system/themes/snippets` folder. See example below.

Example
-------
Content snippet with comments:

    <div class="content">
    <h1><?php echo $yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $yellow->page->getContent() ?>
    <?php $yellow->snippet("disqus", "annasdesign") ?>
    </div>

Blog snippet with comments:

    <div class="content blog">
    <div class="entry">
    ...
    </div>
    <?php $yellow->snippet("disqus", "annasdesign") ?>
    </div>
