Webinterface plugin 0.6.9
=========================
Edit your website in a web browser. [See demo](http://developers.datenstrom.se).

[![Screenshot](webinterface-plugin.jpg?raw=true)](http://developers.datenstrom.se)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [webinterface plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/webinterface.zip).
3. Download `webinterface.php`, `webinterface.css` and `webinterface.js` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to edit a website?
----------------------
Click the edit link on a page. You can browse your website, use the normal navigation, make some changes and see the result. You can write text like an email and it becomes a web page. To show an edit link add an `[edit]` shortcut to a page. See example below.

How to create a user account?
-----------------------------
The fist option is to create a user account in a web browser. Click the edit link on a page. You can create a user account and change your password. The webmaster needs to approve new user accounts. The webmaster's email is defined in file `system/config/config.ini`, for example `Email: email@example.com`.

The second option is to create a user account at the [command line](https://github.com/datenstrom/yellow-plugins/tree/master/commandline). Open a terminal window. Go to your Yellow installation, where the `yellow.php` is. Type `php yellow.php user` followed by email and password. You can add  optional name and language. All user accounts are stored in file `system/config/user.ini`. See example below.

Example
-------
Content file with edit link:

```
---
Title: Home
---
Your website works! 

You can [edit this page] or use your text editor.  
```

Creating a user account at the command line:
 
`php yellow.php user`  
`php yellow.php user email@example.com example`  
`php yellow.php user email@example.com example Yellow en`  
