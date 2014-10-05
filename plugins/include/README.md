Include plugin 0.1.6
====================
Include information in content files.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [include.php](include.php?raw=true), copy into your system/plugins folder.  

To uninstall delete the plugin.

How to include information?
---------------------------
Create a shortcut in the format `[include file NAME]`, you can use files from your content folder.  
To include a snippet use the format `[include snippet NAME]`, you can add optional arguments.  
To include a text string use the format `[include text NAME]`, you can add an optional language.

Snippets are located in your system/snippets folder, text strings in your system/config folder.

Example
-------
Including a content file:

    [include file content/1-home/page.txt]
    [include file content/2-about/contact.txt]

Including a snippet in a content file, default and optional argument:

    [include snippet breadcrumbs]
    [include snippet breadcrumbs /]

Including a text string in a content file, default and specific language:

    [include text languageDescription]
    [include text languageDescription sv]