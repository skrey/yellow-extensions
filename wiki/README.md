Wiki plugin 0.6.5
=================
Wiki for your website. [See demo](http://developers.datenstrom.se/plugins/wiki-plugin/).

[![Screenshot](wiki-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/wiki-plugin/)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [wiki plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/wiki.zip).
3. Copy `wiki.php` into your `system/plugins` folder.
4. Copy `wiki.html` and `wikipages.html` into your `system/themes/templates` folder.
5. Copy `content-wiki.php` and `content-wikipages.php` into your `system/themes/snippets` folder.
6. Copy `page-new-wiki.txt` into your `system/config` folder.
7. Create a new folder '3-wiki' in your `content` folder.
8. Copy `page.txt`, `wiki-page.txt` and `sidebar.txt` into your `/content/3-wiki` folder.

To uninstall delete the plugin files.

How to use a wiki?
------------------
The wiki is available on your website as `http://website/wiki/`. To make the wiki your home page, rename the wiki folder to '1-wiki' and delete '1-home'. To create a new wiki page, add a new file to the wiki folder. Set `Title` and other [settings](http://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. Use `Tag` to group similar pages together. [Learn more](http://developers.datenstrom.se/help/how-to-make-a-wiki).

How to configure a wiki?
------------------------
You can use shortcuts to show information about the wiki:

`[wikirecent LOCATION PAGESMAX]` for recently changed pages  
`[wikirelated LOCATION PAGESMAX]` for related pages to current page  
`[wikipages LOCATION PAGESMAX]` for a list of pages  
`[wikitags LOCATION]` for a list of tags  

The following arguments are available, all but the first argument are optional:

`LOCATION` = wiki location  
`PAGESMAX` = number of pages  

Example
-------
Showing recently changed pages:

    [wikirecent]
    [wikirecent /wiki/ 10]
    [wikirecent / 10]