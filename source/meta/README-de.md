Meta 0.8.14
===========
Metadaten für soziale Medien.

<p align="center"><img src="meta-screenshot.png?raw=true" width="795" height="512" alt="Bildschirmfoto"></p>

## Wie man Metadaten für soziale Medien hinzufügt

Diese Erweiterung erzeugt Metadaten für das [Open-Graph-Protocol](http://ogp.me/). 

Ganz oben auf einer Seite kannst du `Title`, `Description`, `Image` und `ImageAlt`  in den [Einstellungen](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md#einstellungen) festlegen. Zusätzliche Metadaten kannst du im HTML-Header festlegen, beispielsweise in der Datei `system/layouts/header.html`.

## Beispiele

Inhaltsdatei mit Metadaten:

    ---
    Title: Beispielseite
    Description: Beispiel für deine Webseite
    Image: example.png
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Inhaltsdatei mit Metadaten vom ersten Bild

    ---
    Title: Beispielseite
    Description: Beispiel für deine Webseite
    ---
    [image photo.jpg]

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Layoutdatei mit zusätzlichen Metadaten für Twitter:

    <!DOCTYPE html>
    <html lang="<?php echo $this->yellow->page->getHtml("language") ?>">
    <head>
    <title><?php echo $this->yellow->page->getHtml("titleHeader") ?></title>
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $this->yellow->page->getHtml("description") ?>" />
    <meta name="author" content="<?php echo $this->yellow->page->getHtml("author") ?>" />
    <meta name="generator" content="Datenstrom Yellow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dog_feelings" />
    <?php echo $this->yellow->page->getExtra("header") ?>
    </head>
    ...

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`MetaDefaultImage` = Bild der Seite, `favicon` um das Standard-Icon der Webseite zu verwenden  

Die folgenden Dateien können angepasst werden:

`system/layouts/header.html` = Layoutdatei für Standard-HTML-Header  
`system/layouts/footer.html` = Layoutdatei für Standard-HTML-Footer  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/meta.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom, Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
