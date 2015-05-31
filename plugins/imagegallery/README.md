Imagegallery plugin 0.0.0 
=========================
Gallery with images. **EXPERIMENTAL.**

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/image).  
3. Download [imagegallery.php](imagegallery.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to add a gallery?
---------------------
Create an `[imagegallery]` shortcut.

The following arguments are available, all but the first argument are optional:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = gallery style  
`SIZE` = image size, pixel or percent

The plugins creates an image gallery from files in your `media/images` folder. 

**THE PLUGIN IS EXPERIMENTAL.** JavaScript and CSS needs to be added, [see here](https://github.com/datenstrom/yellow/issues/70).  
You can help make it better. Please let us know about bugs, ideas and improvements.

Example
-------
Adding an image gallery:

    [imagegallery .*screenshot.jpg]
    [imagegallery .*screenshot.jpg themes 25%]
