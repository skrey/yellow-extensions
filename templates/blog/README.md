Blog template
=============

Blog for news.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [blog.php](blog.php?raw=true) and [blogarticles.php](blogarticles.php?raw=true), copy both files into your system/templates folder.  
3. Create a new folder 'blog' in your content folder.
4. Download [page.txt](page.txt?raw=true) and [2013-04-07-blog-article.txt](2013-04-07-blog-article.txt?raw=true), copy both files into your content/blog folder.
5. Add these [text lines](text.ini?raw=true) to your system/config/text.ini file.

To uninstall delete the template files and folder.

How to write a blog?
--------------------
The blog is available on your website as `http://website/blog/`. To create a new blog page, add a new file to your blog folder. Set `Published` and more meta data at the top of a page. Dates should be written in the format [YYYY-MM-DD](http://en.wikipedia.org/wiki/ISO_8601). Use `Tag` to group similar pages together. This should get you started, you can improve your blog with more extensions.

Example
-------
Content file for a new blog page:

    ---
    Title: New blog page
    Published: YYYY-MM-DD
    Tag: Example
    ---
    Write text here