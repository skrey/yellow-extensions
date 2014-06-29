Googlemaps plugin 0.1.5
=======================
Embed [Google maps](https://maps.google.com/).

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [googlemaps.php](googlemaps.php?raw=true), copy into your system/plugins folder.  

To uninstall delete the plugin.

How to embed a map?
-------------------
Create a shortcut in the format `[googlemaps ADDRESS]`, you can add optional zoom, style, width and height.  
ADDRESS is the text you enter on Google maps, wrap multiple words into quotes `"`. The default zoom is 15.

Example
-------
Embedding a map, different addresses and styles:

    [googlemaps Stockholm]
    [googlemaps "Bredgatan 1, Lund, Sweden" 9 right 320 200]