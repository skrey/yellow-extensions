Core plugin 0.6.1
=================
Core features for your website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [core.php](core.php?raw=true), copy it into your `system/plugins` folder.  

Do not delete this plugin, it's always required.

How to use the core?
--------------------
The plugin provides the core features for your website. It takes care of requests, access to the file system, loading configurations and text strings. To show debug information about your website create a `[debug]` shortcut. You can use the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/commandline) to show software version and updates. You can customise your website in many ways. [Learn more](https://github.com/datenstrom/yellow/wiki/Yellow-customisation).

Example
-------
Showing debug information:

```
[debug]
[debug version]
[debug server]
```