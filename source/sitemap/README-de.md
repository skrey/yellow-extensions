<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Sitemap 0.8.10
==============
Sitemap mit allen Seiten.

<p align="center"><img src="sitemap-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Sitemap benutzt

Die Sitemap ist auf deiner Webseite vorhanden als `http://website/sitemap/` und `http://website/sitemap/page:sitemap.xml`. Es ist eine Übersicht über die gesamte Webseite, nur sichtbare Seiten sind enthalten. Du kannst einen Link zur Sitemap irgendwo auf deiner Webseite einbauen.

## Beispiele

Inhaltsdatei mit Link zur Sitemap:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Alle Seiten anzeigen](/sitemap/).

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SitemapLocation` = Ort der Sitemap  
`SitemapFileXml` = Sitemap-Dateiname mit XML-Informationen  
`SitemapPaginationLimit` = Anzahl der Einträge pro Seite  

Die folgenden Dateien können angepasst werden:

`system/layouts/sitemap.html` = Layoutdatei für Sitemap  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/sitemap.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
