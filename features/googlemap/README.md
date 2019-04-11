Googlemap 0.8.3
===============
Embed Google map. [See demo](https://developers.datenstrom.se/features/googlemap).

<p align="center"><img src="googlemap-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlemap.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `googlemap.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to embed a map

Create a `[googlemap]` shortcut.

The following arguments are available, all but the first argument are optional:

`Address` = text you enter on [Google maps](https://maps.google.com/), wrap multiple words into quotes  
`Zoom` = zoom value, the default zoom is 15  
`Style` = map style, e.g. `left`, `center`, `right`  
`Width` = map width, pixel or percent  
`Height` = map height, pixel or percent  

## Examples

Embedding a map:

    [googlemap Stockholm]
    [googlemap "Bredgatan 1, Lund, Sweden"]
    [googlemap "Bredgatan 1, Lund, Sweden" 9 right 320 200]

Embedding a map, GPS coordinates:

    [googlemap "59.32820, 18.07007"]
    [googlemap "59.32820, 18.07007" 16]
    [googlemap "59.32820, 18.07007" 16 right 320 200]

## Developer

Datenstrom. [Get support](https://developers.datenstrom.se/help/support).
