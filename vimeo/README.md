Vimeo plugin 0.6.1
==================
Embed Vimeo videos.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [Vimeo plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/vimeo.zip).
3. Copy `vimeo.php` into your `system/plugins` folder.

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

    [vimeo 5606758]
    [vimeo 5606758 left 200 112]
    [vimeo 5606758 right 200 112]
