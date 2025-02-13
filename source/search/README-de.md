<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Search 0.8.23

Volltext-Suche.

<p align="center"><img src="search-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Suche benutzt

Die Suche ist auf deiner Webseite vorhanden als `http://website/search/`. Sie durchsucht den Inhalt der gesamten Webseite, nur sichtbare Seiten sind enthalten. Um ein Suchfeld auf deiner Webseite anzuzeigen, benutze eine `[search]`-Abkürzung.

## Wie man eine Suche anpasst

Falls du nicht die gesamte Webseite durchsuchen willst, kannst du unterschiedliche Filter benutzen um Suchergebnisse anzupassen. Der Filter `author:` findet Seiten von einem bestimmten Autor. Der Filter `language:` findet Seiten in einer bestimmten Sprache. Der Filter `tag:` findet Seiten mit einem bestimmten Tag. Der Filter `folder:` findet Seiten in einem bestimmten Verzeichnis. Sobald du mit deinem Benutzerkonto angemeldet bist, kannst du mit dem Filter `status:` nach [versteckten Seiten](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md) und [Entwurfsseiten](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft/README-de.md) suchen.

## Beispiele

Webseite durchsuchen:

    kaffee
    milch zucker
    "milch und zucker"

Webseite durchsuchen, unterschiedliche Filter:

    kaffee author:datenstrom
    kaffee language:de
    kaffee tag:beispiel
    kaffee folder:help

Webseite durchsuchen, zusätzliche Filter für angemeldete Benutzer:

    status:private
    status:draft
    status:unlisted
    status:shared

Suchfeld anzeigen:

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
    
    [Alle Seiten durchsuchen](/search/).

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`SearchLocation` = Ort der Suche  
`SearchPaginationLimit` = Anzahl der Einträge pro Seite, 0 für unbegrenzt  
`SearchPageLength` = maximale Seitenlänge die angezeigt wird  

Die folgenden Dateien können angepasst werden:

`system/layouts/search.html` = Layoutdatei für Suche  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/search.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
