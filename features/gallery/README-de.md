Gallery 0.8.4
=============
Bildergalerie mit Popup.

<p align="center"><img src="gallery-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/gallery.zip). Falls du Safari verwendest, rechtsklicke und wähle "Verknüpfte Datei laden unter".
3. Kopiere `gallery.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man eine Bildergalerie hinzufügt

Erstelle eine `[gallery]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:
  
`Pattern` = Dateiname als regulärer Ausdruck  
`Style` = Galeriestil, z.B. `photoswipe`, `simple`  
`Size` = Bildgröße, Pixel oder Prozent  

Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Alle Mediendateien befinden sich im `media`-Verzeichnis. Das `media/images`-Verzeichnis ist zum Speichern von Bildern gedacht. Das `media/thumbnails`-Verzeichnis enthält Miniaturbilder. Man kann auch weitere Verzeichnisse hinzufügen und Dateien so organisieren wie man will.

Diese Erweiterung benutzt [PhotoSwipe v4.1.2](https://github.com/dimsemenov/photoswipe) von Dmitry Semenov. Es ist unter [MIT-Lizenz](https://opensource.org/licenses/MIT) lizenziert.

## Wie man Bildunterschriften anzeigt

Bildunterschriften können in der Datei `system/settings/text.ini` festgelegt werden.

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`GalleryStyle` = Galeriestil, z.B. `photoswipe`, `simple`  

## Beispiele

Bildergalerie hinzufügen:

    [gallery photo.*jpg]
    [gallery photo.*jpg - 20%]
    [gallery photo.*jpg simple 20%]

Bildergalerie hinzufügen, rechteckige Miniaturbilder:

    [gallery photo.*jpg - 64]
    [gallery photo.*jpg - 150]
    [gallery photo.*jpg simple 150]

Bildergalerie aus einem Unterverzeichnis hinzufügen, rechteckige Miniaturbilder:

    [gallery photo-album/ - 64]
    [gallery photo-album/ - 150]
    [gallery photo-album/ simple 150]

Texteinstellungen für Bildunterschriften:

    Language: de
    picture.jpg: Das ist eine Beispiel-Bildunterschrift.
    photo-2387365-fika-time.jpg: Fika ist ein wichtiger Teil des Lebens in Schweden. Bild: Taylor Franz
    photo-2391666-start-painting.jpg: Aquarellfarben, Pinsel und Papier. Bild: Tim Arterbury

## Entwickler

Datenstrom. [Support finden](https://extensions.datenstrom.se/de/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
