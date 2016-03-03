Wiki plugin 0.6.3
=================
Wiki for your website. [See demo](http://demo.datenstrom.se/wiki/).

[![Screenshot](wiki-plugin.jpg?raw=true)](http://demo.datenstrom.se/wiki/)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [wiki.php](wiki.php?raw=true), copy it into your `system/plugins` folder.  
3. Download [wiki.html](wiki.html?raw=true) and [wikipages.html](wikipages.html?raw=true), copy them into your `system/themes/templates` folder.  
4. Download [content-wiki.php](content-wiki.php?raw=true) and [content-wikipages.php](content-wikipages.php?raw=true), copy them into your `system/themes/snippets` folder.  
5. Download [page-new-wiki.txt](page-new-wiki.txt?raw=true), copy it into your `system/config` folder.
6. Create a new folder '3-wiki' in your `content` folder.
7. Add [page.txt](page.txt?raw=true), [wiki-page.txt](wiki-page.txt?raw=true) and [sidebar.txt](sidebar.txt?raw=true) to your `/content/3-wiki` folder.

To uninstall delete the plugin files.

How to use a wiki?
------------------
The wiki is available on your website as `http://website/wiki/`. To make the wiki your home page, rename the wiki folder to '1-wiki' and delete '1-home'. To create a new wiki page, add a new file to the wiki folder. Set `Title` and other [settings](https://github.com/datenstrom/yellow/wiki/Yellow-API#meta-data) at the top of a page. Use `Tag` to group similar pages together. [Learn more](https://github.com/datenstrom/yellow/wiki/How-to-make-a-wiki).

How to configure a wiki?
------------------------
You can use shortcuts to show information about the wiki:

`[wikirecent LOCATION PAGESMAX]` for recently changed pages  
`[wikirelated LOCATION PAGESMAX]` for related pages to current page  
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