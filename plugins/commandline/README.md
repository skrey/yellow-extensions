Commandline plugin 0.6.1
========================
Command line interface for Yellow.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [commandline.php](commandline.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to execute commands?
------------------------
Go to your Yellow installation, where the yellow.php is. The following commands are available:

```
php yellow.php build [DIRECTORY LOCATION]
php yellow.php clean [DIRECTORY LOCATION]
php yellow.php stats [DAYS FILENAME]
php yellow.php user [EMAIL PASSWORD NAME LANGUAGE STATUS HOME]
php yellow.php version
```

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
Show software version

Example
-------
Showing software version:

`php yellow.php version`

Here's an example output:
~~~~
Yellow 0.6.1
YellowCommandline 0.6.1
YellowCore 0.6.1
YellowMarkdown 0.6.1
YellowWebinterface 0.6.1
~~~~
