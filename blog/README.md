Blog plugin 0.6.6
=================
Blog for your website. [See demo](http://developers.datenstrom.se/plugins/blog-plugin/).

[![Screenshot](blog-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/blog-plugin/)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [blog plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/blog.zip).
3. Copy `blog.php` into your `system/plugins` folder.
4. Copy `blog.html` and `blogpages.html` into your `system/themes/templates` folder.
5. Copy `content-blog.php` and `content-blogpages.php` into your `system/themes/snippets` folder.
6. Copy `page-new-blog.txt` into your `system/config` folder.
7. Create a new folder '3-blog' in your `content` folder.
8. Copy `page.txt` and `2013-04-07-blog-example.txt` into your `/content/3-blog` folder.

To uninstall delete the plugin files.

How to use a blog?
------------------
The blog is available on your website as `http://website/blog/`. To make the blog your home page, rename the blog folder to '1-blog' and delete '1-home'. To create a new blog page, add a new file to the blog folder. Set `Published` and other [settings](http://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of an page. Dates should be written in the format YYYY-MM-DD. Use `Tag` to group similar pages together. [Learn more](http://developers.datenstrom.se/help/how-to-make-a-blog).

How to configure a blog?
------------------------
You can use shortcuts to show information about the blog:

`[blogarchive LOCATION]` for a list of months  
`[blogrecent LOCATION PAGESMAX]` for recently published pages  
`[blogrelated LOCATION PAGESMAX]` for related pages to current page  
`[blogtags LOCATION]` for a list of tags  

The following arguments are available:

`LOCATION` = blog location  
`PAGESMAX` = number of pages  

Example
-------
Showing recently published pages:

    [blogrecent]
    [blogrecent /blog/ 10]
    [blogrecent / 10]
