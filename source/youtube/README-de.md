Youtube 0.8.4
=============
Youtube-Videos einbinden.

<p align="center"><img src="youtube-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man ein Video einbindet

Erstelle eine `[youtube]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
 
`Id` = letzte Teil eines [Youtube](https://www.youtube.com)-Links, z.B. `https://www.youtube.com/watch?v=fhs55HEl-Gc`  
`Style` = Videostil, z.B. `left`, `center`, `right`  
`Width` = Videobreite, Pixel oder Prozent  
`Height` = Videohöhe, Pixel oder Prozent   
 
## Beispiele

Video einbinden:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc left 200 112]
    [youtube fhs55HEl-Gc right 200 112]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`YoutubeStyle` = Videostil, z.B. `flexible`  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/youtube.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
