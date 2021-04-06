Googlemap 0.8.7
===============
Embed Google map.

<p align="center"><img src="googlemap-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to embed a map

Create a `[googlemap]` shortcut.

The following arguments are available, all but the first argument are optional:

`Address` = text you enter on [Google Maps](https://maps.google.com/), wrap multiple words into quotes  
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

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`GooglemapZoom` = zoom value  
`GooglemapStyle` = map style, e.g. `flexible`   

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlemap.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Google Maps](https://maps.google.com/). The service provider collects personal data and uses cookies.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
