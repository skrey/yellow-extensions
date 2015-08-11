Slideshare plugin 0.5.1
=======================
Embed Slideshare presentations.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [slideshare.php](slideshare.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed a presentation?
----------------------------
Create a `[slideshare]` shortcut.

The following arguments are available:

`ID` = last part of a [Slideshare](http://www.slideshare.net/) link, e.g. `http://www.slideshare.net/slideshow/embed_code/16220047`  
`STYLE` = presentation style, e.g. `left`, `center`, `right`  
`WIDTH` = presentation width, pixel or percent  
`HEIGHT` = presentation height, pixel or percent   

Example
-------
Embedding a presentation:

    [slideshare 16220047]
    [slideshare 16220047 left 320 200]
    [slideshare 16220047 right 320 200]