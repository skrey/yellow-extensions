Wiki plugin 0.5.1
=================
Wiki for collaboration.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [wiki.php](wiki.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [wiki.html](wiki.html?raw=true) and [wikipages.html](wikipages.html?raw=true), copy them into your `system/themes/templates` folder.  
4. Download [content-wiki.php](content-wiki.php?raw=true) and [content-wikipages.php](content-wikipages.php?raw=true), copy them into your `system/themes/snippets` folder.  
5. Download latest [language-en.ini](https://github.com/datenstrom/yellow-extensions/blob/master/languages/english/language-en.ini?raw=true) and [page-new-wiki.txt](page-new-wiki.txt?raw=true), copy them into your `system/config` folder.
6. Create a new folder '3-wiki' in your `content` folder.
7. Add [page.txt](page.txt?raw=true) and [wiki-page.txt](wiki-page.txt?raw=true) to your `/content/3-wiki` folder.

To uninstall delete the plugin files and folder.

How to use a wiki?
------------------
The wiki is available on your website as `http://website/wiki/`. To make the wiki your home page, rename the wiki folder to '1-wiki' and delete '1-home'. To create a new wiki page, add a new file to the wiki folder. Set `Title` and more settings at the top of a page. Use `Tag` to group similar pages together.

Example
-------
Content file for a new wiki page:

    ---
    Title: Wiki page
    Tag: Example
    ---
    This is a new wiki page.
