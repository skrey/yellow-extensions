Vimeo plugin 0.5.1
==================
Embed Vimeo videos.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [vimeo.php](vimeo.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed a video?
---------------------
Create a `[vimeo]` shortcut.
 
The following arguments are available:

`ID` = last part of a [Vimeo](http://www.vimeo.com) link, e.g. `http://vimeo.com/13387502`  
`STYLE` = video style, e.g. `left`, `center`, `right`  
`WIDTH` = video width, pixel or percent  
`HEIGHT` = video height, pixel or percent   
 
Example
-------
Embedding a video:

    [vimeo 13387502]
    [vimeo 13387502 left 200 112]
    [vimeo 13387502 right 200 112]