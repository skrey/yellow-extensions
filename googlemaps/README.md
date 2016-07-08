Googlemaps plugin 0.6.1
=======================
Embed Google maps. [See demo](http://developers.datenstrom.se/plugins/googlemaps-plugin).

[![Screenshot](googlemaps-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/googlemaps-plugin)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [Googlemaps plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/googlemaps.zip).
3. Copy `googlemaps.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to embed a map?
-------------------
Create a `[googlemaps]` shortcut.

The following arguments are available:

`ADDRESS` = text you enter on [Google maps](https://maps.google.com/), wrap multiple words into quotes  
`ZOOM` = zoom value, the default zoom is 15  
`STYLE` = map style, e.g. `left`, `center`, `right`  
`WIDTH` = map width, pixel or percent  
`HEIGHT` = map height, pixel or percent  

Example
-------
Embedding a map:

    [googlemaps Stockholm]
    [googlemaps "Bredgatan 1, Lund, Sweden"]
    [googlemaps "Bredgatan 1, Lund, Sweden" 9 right 320 200]
