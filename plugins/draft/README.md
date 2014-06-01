Draft plugin 0.1.4
==================
Support for draft pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [draft.php](draft.php?raw=true), copy into your system/plugins folder.  

To uninstall delete the plugin.

How to make a draft page?
-------------------------
Set `Status: draft` in the meta data of a page. The page will no longer be public accessible.  
You can continue to edit a draft in a browser and the file system.

Example
-------
Content file with draft status:

    ---
    Title: New page
    Status: draft
    ---
    Write text here