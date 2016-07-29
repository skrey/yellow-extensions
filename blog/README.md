Blog plugin 0.6.6
=================
Blog for your website. [See demo](https://developers.datenstrom.se/plugins/blog-plugin/).

[![Screenshot](blog-plugin.jpg?raw=true)](https://developers.datenstrom.se/plugins/blog-plugin/)

How do I install this?
----------------------
1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/blog.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `blog.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to use a blog?
------------------
The blog is available on your website as `http://website/blog/`. To show the blog on your home page, go to your `content` folder and delete the `1-home` folder. To create a new blog page, add a new file to the blog folder. Set `Published` and other [settings](https://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. Use `Tag` to group similar pages together. [Learn more](https://developers.datenstrom.se/help/how-to-make-a-blog).

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
