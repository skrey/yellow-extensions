User permissions plugin
=======================

Restrictions for web interface users.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [userpermissions.php](userpermissions.php?raw=true), copy into your system/plugins folder.  

To uninstall delete the plugin.

How to restrict what a user can do?
-----------------------------------
Set a user's home page. The user will no longer be able to change pages outside his/her home page.  
You can continue to edit any page in the file system, restrictions apply only to editing in the browser.

Example
-------
Create a guest account from command line, restrict edits to `http://website/wiki/`:

    php yellow.php user email@example.com horsebatterystaple Guest en /wiki/
