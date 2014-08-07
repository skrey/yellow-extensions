Adding content
==============
All content is located in the **content folder**. You can update your website by creating files and folders.

![Screenshot](content-screenshot.png?raw=true)

The standard installation of Yellow has two content folders. They are just an example to get you started, change them as you like. All content folders are available on your website. Every folder has a text file called `page.txt` or with the name of the folder. That's the default page for a folder. You can add additional files to a folder.

Basically, the structure you see in the file manager is the website you'll get.

Files and folders
-----------------
Both files and folders can have a prefix. The website navigation is automatically created from your content folders. Only folders with a prefix are shown in the navigation. Folders with prefix are for visible pages, folders without prefix are for invisible pages. The prefix can contain numbers, hyphen `-`, underscore `_` and dot `.`:

1. Numerical prefix can be used for sorting, e.g. `1-home` `2-about`
2. Date prefix can be used for sorting, e.g. `2013-04-07-blog-article.txt`
3. No prefix means there is no special order, e.g. `wiki-article.txt`

Prefix and suffix are removed from the location. For example the folder `content/2-about/` is available on your website as `http://website/about/`. The file `content/2-about/contact.txt` is available as `http://website/about/contact`. 

Text files
----------
Let's have a closer look at text files. Open the file `content/1-home/page.txt` in your favorite text editor. You'll see settings and text of the page. You can define `Title` and other setting at the top of a page. Here's an example:

    ---
    Title: Home
    Description: Yellow is for people who make websites.
    Keywords: Yellow, people, website, fun
    ---
    Your website works!  
    You can now edit this page or use your text editor.  
    Write more text here.

Feel free to use multiple languages and international characters.

Text formatting
---------------
You can write pages in [Markdown](http://en.wikipedia.org/wiki/Markdown).

Emphasize text:

    Normal *italic* **bold** `code`

Make a list:

    * item one
    * item two
    * item three

Make a link:

	http://datenstrom.se/yellow
    [Yellow](http://datenstrom.se/yellow)

Make a heading:

    Level 1 heading
    ===============
    Level 2 heading
    ---------------

For the most part, write text like an email and it becomes a web page. Text formatting can be done with little effort, just by using plain text. Advanced formatting is possible with [HTML](http://en.wikipedia.org/wiki/HTML) or by adding more features. There are [plugins](https://github.com/markseu/yellowcms-extensions/tree/master/plugins) you can download.

[Next: Adding media →](media.md)