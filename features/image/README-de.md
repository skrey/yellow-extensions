Image 0.8.8
===========
Bilder in unterschiedlichen Größen.

<p align="center"><img src="image-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man ein Bild hinzufügt

Erstelle eine `[image]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
 
`Name` = Dateiname  
`Alt` = alternative Bildbeschreibung  
`Style` = Bildstil, z.B. `left`, `center`, `right`  
`Width` = Bildbreite, Pixel oder Prozent  
`Height` = Bildhöhe, Pixel oder Prozent   

Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Alle Mediendateien befinden sich im `media`-Verzeichnis. Das `media/images`-Verzeichnis ist zum Speichern von Bildern gedacht. Das `media/thumbnails`-Verzeichnis enthält Miniaturbilder. Man kann auch weitere Verzeichnisse hinzufügen und Dateien so organisieren wie man will.

Es gibt auch eine [Gallery-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/gallery/README-de.md).

## Beispiele

Bilder hinzufügen:

    [image picture.jpg]
    [image picture.jpg Picture]
    [image picture.jpg "Das ist ein Beispielbild"]

Bilder in unterschiedlichen Stilen hinzufügen:

    [image picture.jpg Beispiel left]
    [image picture.jpg Beispiel center]
    [image picture.jpg Beispiel right]

Bilder in unterschiedliche Größen hinzufügen:

    [image picture.jpg Beispiel - 64 64]
    [image picture.jpg Beispiel - 320 200]
    [image picture.jpg Beispiel - 50%]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`ImageAlt` = alternative Bildbeschreibung  
`ImageUploadWidthMax` = maximale Breite zum Hochladen, größere Bilder werden verkleinert  
`ImageUploadHeightMax` = maximale Höhe zum Hochladen, größere Bilder werden verkleinert  
`ImageUploadJpgQuality` = JPG-Qualität für hochgeladene Bilder  
`ImageThumbnailLocation` = Ort für Miniaturbilder  
`ImageThumbnailDirectory` = Verzeichnis für Miniaturbilder  
`ImageThumbnailJpgQuality` = JPG-Qualität für Miniaturbilder  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/image.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung benutzt die [GD-Grafikbibliothek](https://github.com/libgd/libgd) von Thomas Boutell.

## Entwickler

Datenstrom. [Support finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
