<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Core 0.8.45
===========
Kernfunktionalität der Webseite.

<p align="center"><img src="core-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Webseite auf dem Computer bearbeitet

Du kannst deinen Lieblings-Texteditor benutzen und alles im Dateimanager verändern. Alle Inhalte befinden sich im `content`-Verzeichnis. Im Prinzip ist das, was du im Dateimanager siehst, die Webseite die du bekommst. Du kannst den [eingebauten Webserver verwenden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md#wie-man-den-eingebauten-webserver-verwendet) oder eine [statische Webseite erstellen](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md#wie-man-eine-statische-webseite-erstellt).

## Wie man eine Webseite auf dem Computer anpasst

Falls du den Inhalt anpassen willst, kannst du [Markdown](https://github.com/datenstrom/yellow-extensions/tree/master/source/markdown/README-de.md) benutzen. Alle Inhalte befinden sich im `content`-Verzeichnis. Erstelle die Datei `content/shared/header.md` für eine Kopfzeile. Erstelle die Datei `content/shared/footer.md` für eine Fußzeile. Du kannst eine Kopfzeile und Fußzeile auch in einem anderen Verzeichnis erstellen, dann wir sie nur auf Seiten im gleichen Verzeichnis angezeigt.

Falls du HTML anpassen willst, ändere das Layout. Das Standardlayout wird in der Datei `system/extensions/yellow-system.ini` festgelegt. Eine anderes Layout lässt sich in den [Einstellungen](#einstellungen) ganz oben auf jeder Seite festlegen, zum Beispiel `Layout: default`. Alle Layoutdateien befinden sich im `system/layouts`-Verzeichnis. Natürlich gibt es eine [API für Entwickler](https://github.com/datenstrom/yellow-extensions/tree/master/source/help/README-de.md), beispielsweise um eine eigene Navigation zu erstellen.

Falls du CSS anpassen willst, ändere das Thema. Das Standardthema wird in der Datei `system/extensions/yellow-system.ini` festgelegt. Eine anderes Thema lässt sich in den [Einstellungen](#einstellungen) ganz oben auf jeder Seite festlegen, zum Beispiel `Theme: berlin`. Streng genommen bestehen Themen nicht nur aus CSS, sondern aus mehreren Dateien. Alle Themendateien befinden sich im `system/themes`-Verzeichnis. Es gibt [Themen](https://github.com/datenstrom/yellow-extensions/blob/master/README-de.md#themen) zum Herunterladen.

## Wie man eine mehrsprachige Webseite macht

Deine Webseite kommt mit drei Sprachen und man kann weitere [Sprachen](https://github.com/datenstrom/yellow-extensions/blob/master/README-de.md#sprachen) installieren. Die Standardsprache wird in der Datei `system/extensions/yellow-system.ini` festgelegt. Eine andere Sprache lässt sich in den [Einstellungen](#einstellungen) ganz oben auf jeder Seite festlegen, zum Beispiel `Language: de`.

Falls du die gesamte Webseite in mehrere Sprachen übersetzen willst, aktiviere den Mehrsprachen-Modus. Öffne die Datei `system/extensions/yellow-system.ini` und ändere `CoreMultiLanguageMode: 1`. Danach musst du die [Verzeichnisstruktur](#beispiele-folders) anpassen. Gehe ins `content`-Verzeichnis und erstelle ein neues Verzeichnis für jede Sprache.

Falls du Sprachen anpassen willst, ändere die Spracheinstellungen. Öffne die Datei `system/extensions/yellow-language.ini` und ändere die vorhandenen Einstellungen. Du kannst die [Standardeinstellungen aus Sprachdateien](https://github.com/datenstrom/yellow-extensions/blob/master/source/german/german.txt) kopieren und in diese Datei einfügen. Du kannst auch deine eigenen Spracheinstellungen hinzufügen, beispielsweise Bildunterschriften.

## Wie man eine Seite versteckt

Ganz oben auf einer Seite kannst du `Status: unlisted` in den [Einstellungen](#einstellungen) festlegen. Die Seite ist dann in der Navigation und den Suchergebnissen nicht mehr sichtbar. Du kannst zwischen verschiedenen [Statuswerten](#einstellungen-status) wählen, um zu bestimmen wer eine Seite sehen und darauf zugreifen kann.

## Wie man eine Seite weiterleitet

Ganz oben auf einer Seite kannst du `Redirect` in den [Einstellungen](#einstellungen) festlegen. Die Seite wird dann zu einer anderen Seite oder URL weitergeleitet. Du kannst die Seite weiterhin im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md) und im Dateisystem bearbeiten.

## Beispiele

Inhaltsdatei mit normaler Seite:

    ---
    Title: Normale Seite
    ---
    Das ist eine Beispielseite.

Inhaltsdatei mit ungelisteter Seite:

    ---
    Title: Ungelistete Seite
    Status: unlisted
    ---
    Diese Seite ist in der Navigation und den Suchergebnissen nicht sichtbar.

Inhaltsdatei mit Weiterleitung:

    ---
    Title: Seite weiterleiten
    Redirect: https://datenstrom.se/de/yellow/
    ---
    Diese Seite wird zu einer anderen Seite weitergeleitet.

<a id="beispiele-folders"></a>Verzeichnisstruktur für normale Webseite:

```
├── content               = Inhaltsdateien
│   ├── 1-home            = Startseite
│   └── shared            = geteilte Dateien
├── media                 = Mediendateien
│   ├── downloads         = Dateien zum Herunterladen
│   ├── images            = Bilder für den Inhalt
│   └── thumbnails        = Miniaturbilder für den Inhalt
└── system                = Systemdateien
    ├── extensions        = Erweiterungsdateien und Einstellungen
    ├── layouts           = konfigurierbare Layoutdateien
    ├── themes            = konfigurierbare Themendateien
    └── trash             = gelöschte Dateien
```

Verzeichnisstruktur für mehrsprachige Webseite:

```
├── content               
│   ├── 1-en              
│   │   ├── 1-home        = http://website/
│   │   └── shared    
│   ├── 2-de              
│   │   ├── 1-home        = http://website/de/
│   │   └── shared    
│   └── 3-fr              
│       ├── 1-home        = http://website/fr/
│       └── shared    
├── media                 
└── system                
```

Verzeichnisstruktur für mehrsprachige Webseite, mit automatischer Spracherkennung:

```
├── content               
│   ├── 1-en              
│   │   ├── 1-home        = http://website/en/
│   │   └── shared    
│   ├── 2-de              
│   │   ├── 1-home        = http://website/de/
│   │   └── shared    
│   ├── 3-fr              
│   │   ├── 1-home        = http://website/fr/
│   │   └── shared    
│   └── default           = http://website/
├── media                 
└── system                
```

## Einstellungen

Die folgenden Einstellungen können ganz oben auf einer Seite vorgenommen werden:

`Title` = Seitentitel  
`TitleContent` = Seitentitel der im Inhalt angezeigt wird  
`TitleNavigation` = Seitentitel der in der Navigation angezeigt wird  
`TitleHeader` = Seitentitel der im Webbrowser angezeigt wird  
`TitleSlug` = Seitentitel zum Speichern der Seite  
`Description` = Beschreibung der Seite  
`Author` = Autoren der Seite, durch Komma getrennt  
`Email` = E-Mail des Seitenautors  
`Language` = Sprache der Seite  
`Layout` = Layout der Seite  
`LayoutNew` = Layout um eine neue Seite zu erzeugen  
`Theme` = Thema der Seite  
`Parser` = Parser der Seite  
`Status` = Status der Seite, [unterstützte Statuswerte](#einstellungen-status)  
`Redirect` = Weiterleitung zu einer anderen Seite oder URL  
`Image` = Bild der Seite  
`ImageAlt` = Alternative Bildbeschreibung der Seite  
`Modified` = Änderungsdatum der Seite, JJJJ-MM-TT Format  
`Published` = Veröffentlichungsdatum der Seite, JJJJ-MM-TT Format  
`Tag` = Tags zur Kategorisierung der Seite, durch Komma getrennt  
`Build` = Optionen zum Erstellen einer statischen Webseite, durch Komma getrennt  
`Comment` = Optionen zum Anzeigen von Kommentaren, durch Komma getrennt  

<a id="einstellungen-system"></a>Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`Sitename` = Name der Webseite  
`Author` = Name des Webmasters  
`Email` = E-Mail des Webmasters  
`Language` = Standard-Sprache  
`Layout` = Standard-Layout  
`Theme` = Standard-Thema  
`Parser` = Standard-Seitenparser  
`Status` = Standard-Seitenstatus, [unterstützte Statuswerte](#einstellungen-status)  
`CoreStaticUrl` = URL der statischen Webseite  
`CoreServerUrl` = URL der Webseite, `auto` für automatische Erkennung  
`CoreServerTimezone` = Zeitzone der Webseite  
`CoreMultiLanguageMode` = Mehrsprachen-Modus aktivieren, 1 oder 0  
`CoreTrashTimeout` = Speicherung von gelöschten Dateien in Sekunden  

<a id="einstellungen-status"></a>Die folgenden Seiten-Statuswerte werden unterstützt:

`public` = Seite ist eine normale Seite  
`private` = Seite ist nicht sichtbar, Benutzer muss das Kennwort eingeben, [erfordert Private-Erweiterung](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private/README-de.md)  
`draft` = Seite ist nicht sichtbar, Benutzer muss sich einloggen, [erfordert Draft-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft/README-de.md)  
`unlisted` = Seite ist nicht sichtbar, aber kann mit dem richtigen Link abgerufen werden  
`shared` = Seite ist nicht vorhanden, aber kann in andere Seiten eingebunden werden  

<a id="einstellungen-files"></a>Die folgenden Dateien können angepasst werden:

`system/layouts/default.html` = Layoutdatei für Standard-Seite  
`system/layouts/error.html` = Layoutdatei für Fehler-Seite  
`system/layouts/header.html` = Layoutdatei für Standard-HTML-Header  
`system/layouts/footer.html` = Layoutdatei für Standard-HTML-Footer  
`system/layouts/navigation.html` = Layoutdatei für Standard-HTML-Navigation  
`system/layouts/pagination.html` = Layoutdatei für Standard-HTML-Pagination  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
