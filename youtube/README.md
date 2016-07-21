Youtube plugin 0.6.1
====================
Embed Youtube videos. [See demo](http://developers.datenstrom.se/plugins/youtube-plugin).

[![Screenshot](youtube-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/youtube-plugin)

How do I install this?
----------------------
1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/youtube.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `youtube.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to embed a video?
---------------------
Create a `[youtube]` shortcut. 

The following arguments are available:
 
`ID` = last part of a [Youtube](http://www.youtube.com) link, e.g. `http://www.youtube.com/watch?v=fhs55HEl-Gc`  
`STYLE` = video style, e.g. `left`, `center`, `right`  
`WIDTH` = video width, pixel or percent  
`HEIGHT` = video height, pixel or percent   
 
Example
-------
Embedding a video:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc left 200 112]
    [youtube fhs55HEl-Gc right 200 112]
