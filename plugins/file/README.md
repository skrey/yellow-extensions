File plugin 0.5.2
=================
Embed text files.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [file.php](file.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed a text file?
-------------------------
Create a `[file]` shortcut with the following argument:

`FILENAME` = file from your `content` folder 

Example
-------
Embedding a text file:

    [file content/1-home/page.txt]
    [file content/2-about/contact.txt]
