Slideshare plugin 0.6.1
=======================
Embed Slideshare presentations. [See demo](http://developers.datenstrom.se/plugins/slideshare-plugin).

[![Screenshot](slideshare-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/slideshare-plugin)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [slideshare plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/slideshare.zip).
3. Copy `slideshare.php` into your `system/plugins` folder.

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

    [slideshare 37321279]
    [slideshare 37321279 left 320 200]
    [slideshare 37321279 right 320 200]
