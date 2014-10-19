Adding content
==============
All content is located in the **content folder**. You can update your website by creating files and folders.

![Screenshot](content-screenshot.png?raw=true)

The installation of Yellow has two content folders. They are just an example to get you started, change them as you like. All content folders are available on your website. Every folder has a text file called `page.txt` or with the name of the folder. That's the default page for a folder. You can also add additional text files.

Basically, what you see in the file manager is the website you'll get.

Files and folders
-----------------
The website navigation is automatically created from your content folders. Only folders with a prefix are shown in the navigation. Folders with prefix are for visible pages, folders without prefix are for invisible pages. The difference is that invisible pages don't show up in navigation, search and sitemap. All files and folders can have a prefix for sorting:

1. Folders can have a numerical prefix, e.g. `1-home` `2-about`
2. Files can have a date prefix for sorting, e.g. `2013-04-07-blog-article.txt`
3. No prefix means there is no special order, e.g. `wiki-article.txt`

Prefix and suffix are removed from the location. For example the folder `content/2-about/` is available on your website as `http://website/about/`. The file `content/2-about/contact.txt` becomes `http://website/about/contact`. 

Text files
----------
Let's have a closer look at text files. Open the file `content/1-home/page.txt` in your favorite text editor. You'll see settings and text of the page. You can change `Title` and other setting at the top of a page. Here's an example:

    ---
    Title: Home
    Description: Yellow is for people who make websites.
    Keywords: Yellow, people, website, fun
    ---
    Your website works!
    
    You can now edit this page or use your text editor.

Feel free to use multiple languages and international characters.

Text formatting
---------------
You can write pages in [Markdown](http://en.wikipedia.org/wiki/Markdown). For the most part, write text like an email and it becomes a web page. Advanced formatting is possible with [HTML](http://en.wikipedia.org/wiki/HTML). There are [plugins](https://github.com/markseu/yellowcms-extensions/tree/master/plugins) to add even more features to your pages.

Emphasize text:

    Normal *italic* **bold** `code`

Make a list:

    * item one
    * item two
    * item three

Make a link:

    http://datenstrom.se/yellow
    [Yellow](http://datenstrom.se/yellow)
    [About](/about/)

[Next: Adding media →](media.md)