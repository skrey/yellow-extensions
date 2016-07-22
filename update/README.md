Update plugin 0.6.4
===================
Update your website.

How do I install this?
----------------------
1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/update.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `update.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to update your website?
---------------------------
**Coming this summer - planned feature**: The first option is to update your website in a web browser. Click the edit link on a page. Go to your settings and check for updates. Yellow will show when software updates are available. The webmaster can restrict user accounts, if you don't want them to update a website. 

The second option is to update your website at the [command line](https://github.com/datenstrom/yellow-plugins/tree/master/commandline). Open a terminal window. Go to your Yellow installation, where the `yellow.php` is. Type `php yellow.php update`, you can add an optional feature name. Deleted files can be found in the `system/trash` folder. See example below.

The plugin uses the [cURL library](https://github.com/bagder/curl) by Daniel Stenberg to download files.

Example
-------
Updating software at the command line:
 
`php yellow.php update`  
`php yellow.php update blog`  
`php yellow.php update theme`  
