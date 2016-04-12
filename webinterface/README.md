Webinterface plugin 0.6.6
=========================
Edit your website in a web browser. [See demo](http://developers.datenstrom.se).

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
3. Download [webinterface.php](webinterface.php?raw=true), [webinterface.css](webinterface.css?raw=true) and [webinterface.js](webinterface.js?raw=true), copy them into your `system/plugins` folder.  

To uninstall delete the plugin files.

How to add a user account?
-------------------------
The fist option is to create a user account [online](https://developers.datenstrom.se/tests/new-user). The second option is to add it at the [command line](https://github.com/datenstrom/yellow-plugins/tree/master/commandline). Open a terminal window. Go to your Yellow installation, where the `yellow.php` is. Type `php yellow.php user` followed by email and password. You can add  optional name, language, status and home page. Users can not change pages outside their home page. [Learn more](http://developers.datenstrom.se/help/how-to-add-a-user-account).

How to edit a website?
----------------------
Click the edit link on a page. You can browse your website, use the normal navigation, make some changes and see the result. You can write text like an email and it becomes a web page, see [Markdown](https://github.com/datenstrom/yellow-plugins/tree/master/markdown) for more information. To show an edit link add an `[edit]` shortcut to a page.

Example
-------
Adding a user account at the command line:
 
`php yellow.php user`  
`php yellow.php user email@example.com horsebattery`  
`php yellow.php user guest@guest.com guest Guest en active /wiki/`  

Adding an edit link:

    [edit]
    [edit this page]
    [edit - Click here to edit page]
