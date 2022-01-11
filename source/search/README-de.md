<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Search 0.8.13

Volltext-Suche.

<p align="center"><img src="search-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Suche benutzt

Die Suche ist auf deiner Webseite vorhanden als `http://website/search/`. Sie durchsucht den Inhalt der gesamten Webseite, nur sichtbare Seiten sind enthalten. Um ein Suchfeld anzuzeigen, benutze eine `[search]`-Abkürzung. Du kannst auch einen Link zur Suche irgendwo auf deiner Webseite einbauen.

## Beispiele

Webseite durchsuchen:

    kaffee
    milch zucker
    "milch und zucker"

Webseite durchsuchen, unterschiedliche Filter:

    kaffee author:datenstrom
    kaffee language:de
    kaffee tag:beispiel

Suchfeld hinzufügen:

    [search]
    [search /search/]
    [search /de/search/]

Inhaltsdatei mit Suchfeld:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [search]

Inhaltsdatei mit Link zur Suche:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Alle Seiten durchsuchen](/search/). [Letzte Änderungen anzeigen](/search/special:changes/).

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SearchLocation` = Ort der Suche  
`SearchPaginationLimit` = Anzahl der Einträge pro Seite  
`SearchPageLength` = maximale Seitenlänge die angezeigt wird  

Die folgenden Dateien können angepasst werden:

`system/layouts/search.html` = Layoutdatei für Suche  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/search.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
