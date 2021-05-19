<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Slider 0.8.11
=============
Bildergalerie mit Schieber.

<p align="center"><img src="slider-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Bildergalerie hinzufügt

Erstelle eine `[slider]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
  
`Pattern` = Dateiname als regulärer Ausdruck  
`Style` = Galeriestil, z.B. `flickity`  
`Size` = Bildgröße, Pixel oder Prozent    
`Autoplay` = Bilder automatisch abspielen, Verzögerungszeit in Millisekunden  

Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Alle Mediendateien befinden sich im `media`-Verzeichnis. Das `media/images`-Verzeichnis ist zum Speichern von Bildern gedacht. Das `media/thumbnails`-Verzeichnis enthält Miniaturbilder. Man kann auch weitere Verzeichnisse hinzufügen und Dateien so organisieren wie man will.

## Beispiele

Bildergalerie hinzufügen:

    [slider photo.*jpg]
    [slider photo.*jpg - 20%]
    [slider photo.*jpg simple 20%]

Bildergalerie hinzufügen, automatisch abspielen:

    [slider photo.*jpg - - 1000]
    [slider photo.*jpg - - 5000]
    [slider photo.*jpg - 20% 5000]

Bildergalerie aus einem Unterverzeichnis hinzufügen, automatisch abspielen:

    [slider photo-album/ - - 1000]
    [slider photo-album/ - - 5000]
    [slider photo-album/ - 20% 5000]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SliderStyle` = Galeriestil, z.B. `flickity`  
`SliderAutoplay` = Bilder automatisch abspielen, Verzögerungszeit in Millisekunden  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/slider.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung benutzt [Flickity 2.0.9](https://github.com/metafizzy/flickity) von David DeSandro.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
