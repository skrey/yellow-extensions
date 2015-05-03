Vimeo plugin 0.5.1
==================
Embed [Vimeo](http://www.vimeo.com) videos.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [vimeo.php](vimeo.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed a video?
---------------------
Create a shortcut in the format `[vimeo ID]`, you can add optional arguments:
 
`ID` = last part of a link, e.g. `http://vimeo.com/13387502`  
`STYLE` = video style, e.g. `left`, `center`, `right`  
`WIDTH` = video width, pixel or percent  
`HEIGHT` = video height, pixel or percent   
 
Example
-------
Embedding a video, default and custom style:

    [vimeo 13387502]
    [vimeo 13387502 right 200 112]