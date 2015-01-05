Blog template
=============
Blog for news.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [blog.php](blog.php?raw=true) and [blogarticles.php](blogarticles.php?raw=true), copy both files into your `system/templates` folder.  
3. Create a new folder '3-blog' in your `content` folder.
4. Download [page.txt](page.txt?raw=true) and [2013-04-07-blog-article.txt](2013-04-07-blog-article.txt?raw=true), copy both files into your `/content/3-blog` folder.
5. Download [newblog.txt](newblog.txt?raw=true), copy into your `system/config` folder.
6. Add these [text lines](blogtext.ini?raw=true) to your `system/config/language-en.ini` file, there are also [languages](https://github.com/markseu/yellowcms-extensions/tree/master/languages) you can download.

To uninstall delete the template files and folder.

How to use a blog?
------------------
The blog is available on your website as `http://website/blog/`. To make the blog your home page, rename the blog folder to '1-blog' and delete '1-home'. To create a new blog article, add a new file to the blog folder. Set `Published` and more settings at the top of an article. Dates should be written in the format [YYYY-MM-DD](http://en.wikipedia.org/wiki/ISO_8601). Use `Tag` to group similar articles together.

Example
-------
Content file for a new blog article:

    ---
    Title: Blog article
    Published: 2013-04-07
    Author: Anna Svensson
    Tag: Example
    ---
    This is a new blog article.