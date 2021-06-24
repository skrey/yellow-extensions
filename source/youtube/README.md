<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Youtube 0.8.5
=============
Embed Youtube videos.

<p align="center"><img src="youtube-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to embed a video

Create a `[youtube]` shortcut. 

The following arguments are available, all but the first argument are optional:
 
`Id` = last part of a [Youtube](https://www.youtube.com) link, e.g. `https://www.youtube.com/watch?v=fhs55HEl-Gc`  
`Style` = video style, e.g. `left`, `center`, `right`  
`Width` = video width, pixel or percent  
`Height` = video height, pixel or percent  
 
## Examples

Embedding a video:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc left 200 112]
    [youtube fhs55HEl-Gc right 200 112]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`YoutubeStyle` = video style, e.g. `flexible`  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/youtube.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Youtube](https://www.youtube.com) by Google. The service provider collects personal data and uses cookies.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
