<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Feed 0.8.10
===========
Feed mit letzten Änderungen.

<p align="center"><img src="feed-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Feed benutzt

Der Feed ist auf deiner Webseite vorhanden als `http://website/feed/` und `http://website/feed/page:feed.xml`. Es ist ein Feed für die gesamte Webseite, nur sichtbare Seiten sind enthalten. Um einen Blog-Feed zu machen, öffne die Datei `system/extensions/yellow-system.ini` und ändere `FeedFilterLayout: blog`. Du kannst einen Link zum Feed irgendwo auf deiner Webseite einbauen.

## Beispiele

Inhaltsdatei mit Link zum Feed:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Letzte Änderungen anzeigen](/feed/). [RSS-Feed](/feed/page:feed.xml).

Inhaltsdatei mit Link zum Feed, von einem bestimmter Autor:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Letzte Änderungen von Datenstrom anzeigen](/feed/author:datenstrom/). 
    [RSS-Feed](/feed/author:datenstrom/page:feed.xml).

Inhaltsdatei mit Link zum Feed, für einen bestimmten Tag:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Letzte Änderungen für Beispiel anzeigen](/feed/tag:beispiel/). 
    [RSS-Feed](/feed/tag:beispiel/page:feed.xml).

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`FeedLocation` = Ort des Feed  
`FeedFileXml` = Feed-Dateiname für RSS-Feed  
`FeedFilterLayout` = Feedfilter für ein bestimmtes Layout  
`FeedPaginationLimit` = Anzahl der Einträge pro Seite  

Die folgenden Dateien können angepasst werden:

`system/layouts/feed.html` = Layoutdatei für Feed  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/feed.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
