Wiki plugin 0.6.6
=================
Wiki for your website. [See demo](https://developers.datenstrom.se/plugins/wiki-plugin/).

[![Screenshot](wiki-plugin.jpg?raw=true)](https://developers.datenstrom.se/plugins/wiki-plugin/)

How do I install this?
----------------------
1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/wiki.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `wiki.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to use a wiki?
------------------
The wiki is available on your website as `http://website/wiki/`. To show the wiki on your home page, rename the wiki folder to '1-wiki' and delete '1-home'. To create a new wiki page, add a new file to the wiki folder. Set `Title` and other [settings](https://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. Use `Tag` to group similar pages together. [Learn more](https://developers.datenstrom.se/help/how-to-make-a-wiki).

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
