Commandline plugin 0.6.14
=========================
Run commands in a terminal window.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [commandline plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/commandline.zip).
3. Copy `commandline.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to run a command?
---------------------
Yellow offers commands that you run from within a folder containing the Yellow installation. Open a terminal window.  Go to your Yellow installation, where the `yellow.php` is. Type `php yellow.php` to show a list of the available commands. The plugin uses the [cURL library](https://github.com/bagder/curl) by Daniel Stenberg for software updates.

The following commands are available:

**php yellow.php**  
Show available commands

**php yellow.php build [DIRECTORY LOCATION]**  
Build [static files](http://developers.datenstrom.se/help/web-server-configuration#static-website)

**php yellow.php clean [DIRECTORY LOCATION]**  
Clean [static files](http://developers.datenstrom.se/help/web-server-configuration#static-website)

**php yellow.php traffic [DAYS LOCATION FILENAME]**  
Create [traffic analytics with the traffic plugin](https://github.com/datenstrom/yellow-plugins/tree/master/traffic)

**php yellow.php update [FEATURE]**  
Update software

**php yellow.php user [EMAIL PASSWORD NAME LANGUAGE]**  
Update [user account with the webinterface plugin](https://github.com/datenstrom/yellow-plugins/tree/master/webinterface)

**php yellow.php version**  
Show software version and updates

Example
-------
Showing available commands:

`php yellow.php`

~~~~
Yellow 0.6.4
Syntax: yellow.php build [DIRECTORY LOCATION]
        yellow.php clean [DIRECTORY LOCATION]
        yellow.php traffic [DAYS LOCATION FILENAME]
        yellow.php update [FEATURE]
        yellow.php user [EMAIL PASSWORD NAME LANGUAGE]
        yellow.php version
~~~~
