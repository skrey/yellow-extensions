Webinterface plugin 0.6.1
=========================
Edit your website in a web browser. [See demo](http://demo.datenstrom.se/).

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
3. Download [webinterface.php](webinterface.php?raw=true), [webinterface.css](webinterface.css?raw=true) and [webinterface.js](webinterface.js?raw=true), copy them into your `system/plugins` folder.  

To uninstall delete the plugin files.

How to edit a website?
----------------------
Click the edit link on a page. You can browse your website, use the normal navigation, make some changes and see the result. You can write text like an email and it becomes a web page, see [Markdown](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/markdown) for more information. To add an edit link to a web page create an `[edit]` shortcut. Please enable secure connection (HTTPS), if your web server supports it. [Learn more](https://github.com/datenstrom/yellow/wiki/Security-configuration).

Example
-------
Adding an edit link:

    [edit]
    [edit this page]
    [edit - Click here to edit page]

