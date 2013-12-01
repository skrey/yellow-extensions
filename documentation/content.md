Adding content
==============

All content is located in the **content folder**. You can update your website by creating folders and editing text files.

![Screenshot](content-screenshot.png?raw=true)

The standard installation of Yellow has three content folders. They are just an example to get you started, change them as you like. All content folders are available on your website. Every folder has a file called `page.txt`, that's the default page for a folder. To create more pages, add more txt-files into a folder.

Basically, the structure you see in the file browser is the website you'll get.

Files and folders
-----------------
The website navigation is automatically created from your content folders. Folders without prefix don't show up in the navigation. The prefix for files and folders can contain numbers, hyphen `-`, underscore `_` and dot `.`:

* no prefix mean pages are in alphabetical order, exactly as you see them in the file browser
* numerical prefix can be used for sorting, e.g. folder names`1-home` `2-services` `3-about`
* date prefix is also possible, e.g. file name `2013-04-07-blog-article-example.txt` with date format `YYYY-MM-DD`

Prefix and suffix are removed from the location. For example the folder `content/2-services` is available on your website as `http://website/services/`, the file `content/2-services/webdesign.txt` is available as `http://website/services/webdesign`.

Content files
-------------
Let's have a look at content files. Open the file `content/1-home/page.txt` in your favorite text editor. You'll see the title and text of the page. Additional information can be added to the meta data of a page. Here's an example:

    ---
    Title: Home
    TitleHeader: Yellow is a CMS for people who make websites
    Author: Mark
    ---
    More text on this page.  
    Have fun making your website.

Feel free to use multiple languages and international characters. Content files should be stored in [UTF-8](http://en.wikipedia.org/wiki/UTF-8), dates in [ISO 8601](http://en.wikipedia.org/wiki/ISO_8601).  

Text formatting
---------------
You can write pages in [Markdown](http://en.wikipedia.org/wiki/Markdown)
and [HTML](http://en.wikipedia.org/wiki/HTML). Markdown is a good way to format your text.

Emphasize text:

`Normal *italic* **bold**`

Make a link:

`[Yellow](https://github.com/markseu/yellowcms)`

Make a list:

    * item one
    * item two
    * item three

For the most part, write text like you would do in an email and it becomes a web page.