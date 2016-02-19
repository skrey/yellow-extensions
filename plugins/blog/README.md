Blog plugin 0.6.2
=================
Blog for your website. [See demo](http://demo.datenstrom.se/blog/).

[![Screenshot](blog-plugin.jpg?raw=true)](http://demo.datenstrom.se/blog/)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [blog.php](blog.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [blog.html](blog.html?raw=true) and [blogpages.html](blogpages.html?raw=true), copy them into your `system/themes/templates` folder.  
4. Download [content-blog.php](content-blog.php?raw=true) and [content-blogpages.php](content-blogpages.php?raw=true), copy them into your `system/themes/snippets` folder.  
5. Download [page-new-blog.txt](page-new-blog.txt?raw=true), copy it into your `system/config` folder.
6. Create a new folder '3-blog' in your `content` folder.
7. Add [page.txt](page.txt?raw=true) and [2013-04-07-blog-example.txt](2013-04-07-blog-example.txt?raw=true) to your `/content/3-blog` folder.

To uninstall delete the plugin files.

How to use a blog?
------------------
The blog is available on your website as `http://website/blog/`. To make the blog your home page, rename the blog folder to '1-blog' and delete '1-home'. To create a new blog page, add a new file to the blog folder. Set `Published` and other [settings](https://github.com/datenstrom/yellow/wiki/Yellow-API#meta-data) at the top of an page. Dates should be written in the format [YYYY-MM-DD](https://github.com/datenstrom/yellow/wiki/Yellow-API#date-format). Use `Tag` to group similar pages together. [Learn more](https://github.com/datenstrom/yellow/wiki/How-to-make-a-blog).

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