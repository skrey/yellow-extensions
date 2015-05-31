Youtube plugin 0.5.1
====================
Embed [Youtube](http://www.youtube.com) videos.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [youtube.php](youtube.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed a video?
---------------------
Create a `[youtube]` shortcut. 

The following arguments are available, all but the first argument are optional:
 
`ID` = last part of a link, e.g. `http://www.youtube.com/watch?v=fhs55HEl-Gc`  
`STYLE` = video style, e.g. `left`, `center`, `right`  
`WIDTH` = video width, pixel or percent  
`HEIGHT` = video height, pixel or percent   
 
Example
-------
Embedding a video:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc right 200 112]