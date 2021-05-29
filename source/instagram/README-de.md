<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Instagram 0.8.6
===============
Instagram-Fotos einbinden.

<p align="center"><img src="instagram-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man ein Foto einbindet

Erstelle eine `[instagram]`-Abkürzung. 

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
 
`Id` = mitlere Teil eines [Instagram](https://www.instagram.com)-Links, z.B. `https://www.instagram.com/p/BISN9ngjV2-/?taken-by=rick_ande`  
`Theme` = Fotothema, momentan nur `light`  
`Stil` = Fotostil, z.B. `left`, `center`, `right`  
`Width` = Fotobreite, Pixel oder Prozent  
`Height` = Fotohöhe, Pixel oder Prozent  

## Beispiele

Foto einbinden:

    [instagram BISN9ngjV2-]
    [instagram BISN9ngjV2- light - 500]
    [instagram BISN9ngjV2- light right 500]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`InstagramStyle` = Fotostil, z.B. `left`, `center`, `right`  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/instagram.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung verwendet [Instagram](https://www.instagram.com). Der Dienstanbieter sammelt personenbezogene Daten und benutzt Cookies.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
