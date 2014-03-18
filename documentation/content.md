Adding content
==============

All content is located in the **content folder**. You can update your website by creating files and folders.

![Screenshot](content-screenshot.png?raw=true)

The standard installation of Yellow has two content folders. They are just an example to get you started, change them as you like. All content folders are available on your website. Every folder has a text file called `page.txt` or with the name of the folder. That's the default page for a folder. You can add additional pages to a folder.

Basically, the structure you see in the file manager is the website you'll get.

Files and folders
-----------------
Files and folders can have a prefix. The prefix can contain numbers, hyphen `-`, underscore `_` and dot `.`:

* numerical prefix can be used for sorting, e.g. `1-home` `2-about`
* date prefix can also be used for sorting, e.g. `2013-04-07-blog-article.txt` with date format `YYYY-MM-DD`

The prefix is automatically removed from the location. For example the folder `content/2-about/` is available on your website as `http://website/about/`. The suffix of txt-files is removed as well. For example the file `content/2-about/text.txt` will become `http://website/about/text`. 

The website navigation is created from your content folders. Folders with prefix are for visible pages, folders without prefix are for invisible pages. Only visible pages are shown in the navigation.

Text files
----------
Let's have a closer look at text files. Open the file `content/1-home/page.txt` in your favorite text editor. You'll see the title and text of the page. Additional information can be added to the meta data of a page. Here's an example:

    ---
    Title: Home
    Description: Anna's new website
    ---
    Your website works!
    You can now edit this page or use your favorite text editor.  
    Write more text here.

Feel free to use multiple languages and international characters. Content files should be stored in [UTF-8](http://en.wikipedia.org/wiki/UTF-8), dates in [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601).  

Text formatting
---------------
You can write pages in [Markdown](http://en.wikipedia.org/wiki/Markdown)
and [HTML](http://en.wikipedia.org/wiki/HTML).

Emphasize text:

`Normal *italic* **bold**`

Make a list:

    * item one
    * item two
    * item three

Make a link:

`[Yellow](https://github.com/markseu/yellowcms)`

For the most part, write text like you would do in an email and it becomes a web page.