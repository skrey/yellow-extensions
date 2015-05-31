Googlemaps plugin 0.5.1
=======================
Embed [Google maps](https://maps.google.com/).

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [googlemaps.php](googlemaps.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to embed a map?
-------------------
Create a `[googlemaps]` shortcut.

The following arguments are available, all but the first argument are optional:

`ADDRESS` = text you enter on Google maps, wrap multiple words into quotes  
`ZOOM` = zoom value, the default zoom is 15  
`STYLE` = map style, e.g. `left`, `center`, `right`  
`WIDTH` = map width, pixel or percent  
`HEIGHT` = map height, pixel or percent  

Example
-------
Embedding a map:

    [googlemaps Stockholm]
    [googlemaps "Bredgatan 1, Lund, Sweden" 9 right 320 200]