Include plugin 0.5.1
====================
Include information in content files.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [include.php](include.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to include information?
---------------------------
Create a shortcut in the format `[include NAME]`, you can use any file from your content folder.  
To include a snippet use the format `[snippet NAME]`, you can add optional arguments.  

Example
-------
Including a content file:

    [include content/1-home/page.txt]
    [include content/2-about/contact.txt]

Including a snippet in a content file, default and optional argument:

    [snippet breadcrumbs]
    [snippet breadcrumbs /]
