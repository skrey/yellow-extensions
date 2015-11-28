Commandline plugin 0.6.1
========================
Run commands in a terminal window.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [commandline.php](commandline.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to run a command?
---------------------
Yellow offers commands that you run from within a folder containing the Yellow installation. Open a terminal window.  Go to your Yellow installation, where the `yellow.php` is. Type `php yellow.php` to show a list of the available commands. The plugin uses the [cURL library](https://github.com/bagder/curl) by Daniel Stenberg for software updates.

The following commands are available:

**php yellow.php**  
Show available commands

**php yellow.php build [DIRECTORY LOCATION]**  
Build [static files](https://github.com/datenstrom/yellow/wiki/Web-server-configuration#static-website)

**php yellow.php clean [DIRECTORY LOCATION]**  
Clean [static files](https://github.com/datenstrom/yellow/wiki/Web-server-configuration#static-website)

**php yellow.php stats [DAYS FILENAME]**  
Create [statistics with the stats plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/stats)

**php yellow.php user [EMAIL PASSWORD NAME LANGUAGE STATUS HOME]**  
Update [user account with the webinterface plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/webinterface)

**php yellow.php version**  
Show software version and updates

Example
-------
Showing available commands:

`php yellow.php`

~~~~
Yellow 0.6.1
Syntax: yellow.php build [DIRECTORY LOCATION]
        yellow.php clean [DIRECTORY LOCATION]
        yellow.php stats [DAYS FILENAME]
        yellow.php user [EMAIL PASSWORD NAME LANGUAGE STATUS HOME]
        yellow.php version
~~~~
