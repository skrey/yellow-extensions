Preview plugin 0.5.3
====================
Embed pages with image preview.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/image).  
3. Download [preview.php](preview.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to add a preview?
---------------------
Create a `[preview]` shortcut.

The following arguments are available, all but the first argument are optional:

`LOCATION ` = location of parent page  
`STYLE` = preview list style  
`SIZE` = image size, pixel or percent  

For every page there should be an jpg-image of similar file name in your `media/images` folder.

Example
-------
Adding a preview:

    [preview /themes/]
    [preview /themes/ fourpages 25%]

CSS for four pages in a row:

    .content .fourpages { margin:0; padding:0; list-style:none; width:100%; }
    .content .fourpages li { padding-bottom:1em; text-align:center; white-space:nowrap; display:inline-block; width:24%; }