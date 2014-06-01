Include plugin 0.1.2
====================
Server include for content files.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [include.php](include.php?raw=true), copy into your system/plugins folder.  

To uninstall delete the plugin.

How to include information in content files?
--------------------------------------------
For a snippet use the format `[include snippet NAME]`, you can add optional arguments.  
For a text string use the format `[include text NAME]`, you can add an optional language.

All snippets are located in the system/snippets folder, text strings in the system/config folder.

Example
-------
Including a snippet, default and optional argument:

    [include snippet breadcrumbs]
    [include snippet breadcrumbs /]

Including a text string, default and specific language:

    [include text languageDescription]
    [include text languageDescription sv]