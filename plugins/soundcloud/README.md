Soundcloud plugin 0.5.1
=======================
Embed [Soundcloud](http://www.soundcloud.com/) audio tracks.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [soundcloud.php](soundcloud.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed an audio track?
----------------------------
Create a shortcut in the format `[soundcloud ID]`, you can add optional arguments:
 
`ID` = last part of a link, e.g. `http://api.soundcloud.com/tracks/101175715`  
`STYLE` = audio track style, e.g. `left`, `center`, `right`  
`WIDTH` = audio track width, pixel or percent  
`HEIGHT` = audio track height, pixel or percent   

Example
-------
Embedding an audio track, default and custom style:

    [soundcloud 101175715]
    [soundcloud 101175715 right 200 166]