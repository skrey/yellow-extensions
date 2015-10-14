Commandline plugin 0.6.1
========================
Execute commands in a terminal window.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [commandline.php](commandline.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to execute commands?
------------------------
Open a terminal window. The following commands are available:

**php yellow.php**  
Show available commands

**php yellow.php build [DIRECTORY LOCATION]**  
Build [static pages](https://github.com/datenstrom/yellow/wiki/Web-server-configuration#static-pages)

**php yellow.php clean [DIRECTORY LOCATION]**  
Clean [static pages](https://github.com/datenstrom/yellow/wiki/Web-server-configuration#static-pages)

**php yellow.php stats [DAYS FILENAME]**  
Create [statistics with the stats plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/stats)

**php yellow.php user [EMAIL PASSWORD NAME LANGUAGE STATUS HOME]**  
Update [user account](https://github.com/datenstrom/yellow/wiki/How-to-add-a-user-account#adding-user-via-command-line)

**php yellow.php version**  
Show software version and updates

The plugin uses the [cURL library](https://github.com/bagder/curl) by Daniel Stenberg for software updates.

Example
-------
Showing available commands:

`php yellow.php`

Here's an example output:
~~~~
Yellow 0.6.1
Syntax: yellow.php build [DIRECTORY LOCATION]
        yellow.php clean [DIRECTORY LOCATION]
        yellow.php stats [DAYS FILENAME]
        yellow.php user [EMAIL PASSWORD NAME LANGUAGE STATUS HOME]
        yellow.php version
~~~~
