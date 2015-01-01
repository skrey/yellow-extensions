Feed template
=============
Web feed with recent changes.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [feed.php](feed.php?raw=true) and [feedxml.php](feedxml.php?raw=true), copy both files into your system/templates folder.  
3. Create a new folder 'feed' in your content folder.
4. Download [page.txt](page.txt?raw=true) and [feed.xml.txt](feed.xml.txt?raw=true), copy both files into your content/feed folder.

To uninstall delete the template files and folder.

How to use a feed?
------------------
The feed is available on your website as `http://website/feed/` and `http://website/feed/feed.xml`. It shows the recently changed pages of the website, only visible pages are included. For feed readers it's recommended to add a link to the header snippet, see example below.
 
Example
-------
Header snippet with feed:

    <!DOCTYPE html>
    ...
    `<link rel="alternate" type="application/rss+xml" href="<?php echo $yellow->config->get("serverBase")."/feed/feed.xml" ?>" />`
    <?php echo $yellow->page->getHeaderExtra() ?>
    </head>
    <body>
    <div class="page">

Footer snippet with feed:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2015 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->base."/feed/" ?>">Feed</a>. 
    <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
    </div>
    </div>
    </body>
    </html>