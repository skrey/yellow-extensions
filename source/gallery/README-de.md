<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Gallery 0.8.15

Bildergalerie mit Popup.

<p align="center"><img src="gallery-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Bildergalerie hinzufügt

Erstelle eine `[gallery]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:

`Pattern` = Dateiname als regulärer Ausdruck  
`Style` = Galeriestil, z.B. `zoom`, `simple`  
`Size` = Bildgröße, Pixel oder Prozent  

Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Alle Mediendateien befinden sich im `media`-Verzeichnis. Das `media/images`-Verzeichnis ist zum Speichern von Bildern gedacht. Das `media/thumbnails`-Verzeichnis enthält Miniaturbilder. Man kann auch weitere Verzeichnisse hinzufügen und Dateien so organisieren wie man will.

## Wie man Bildunterschriften anzeigt

Bildunterschriften können in den Spracheinstellungen festgelegt werden. Öffne die Datei `system/extensions/yellow-language.ini` und füge für jedes Bild eine neue Zeile hinzu. Eine Zeile besteht aus Dateinamen und Beschreibung.

## Beispiele

Bildergalerie hinzufügen, unterschiedliche Stile:

    [gallery photo.*jpg zoom]
    [gallery photo.*jpg simple]

Bildergalerie hinzufügen, unterschiedliche Größen:

    [gallery photo.*jpg zoom 25%]
    [gallery photo.*jpg zoom 50%]
    [gallery photo.*jpg zoom 100%]

Bildergalerie hinzufügen, rechteckige Miniaturbilder:

    [gallery photo.*jpg zoom 64]
    [gallery photo.*jpg zoom 150]
    [gallery photo.*jpg zoom 300]

Bildergalerie aus einem Unterverzeichnis hinzufügen, rechteckige Miniaturbilder:

    [gallery photo-album/ zoom 64]
    [gallery photo-album/ zoom 150]
    [gallery photo-album/ zoom 300]

Bildunterschriften in den Spracheinstellungen festlegen:

    Language: de
    media/images/photo.jpg: Das ist ein Beispielbild
    media/images/photo-2387365-fika-time.jpg: Fika ist ein wichtiger Teil des Lebens in Schweden. Bild: Taylor Franz
    media/images/photo-2391666-start-painting.jpg: Aquarellfarben, Pinsel und Papier. Bild: Tim Arterbury
    media/images/photo-album/screenshot-2020-01.png: Eine kleine Webseite von Adam Engel aus Schweden.

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`GalleryStyle` = Galeriestil, z.B. `zoom`, `simple`  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/gallery.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung benutzt [PhotoSwipe 4.1.2](https://github.com/dimsemenov/photoswipe) von Dmitry Semenov.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
