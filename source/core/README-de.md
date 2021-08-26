<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Core 0.8.51

Kernfunktionalität der Webseite.

<p align="center"><img src="core-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Webseite im Texteditor bearbeitet

Du kannst deinen Lieblings-Texteditor benutzen und alles im Dateimanager verändern. Das `content`-Verzeichnis enthält die Inhaltsdateien der Webseite. Hier bearbeitet man die Webseite. Das `media`-Verzeichnis enthält die Mediendateien der Webseite. Hier speichert man Bilder und andere Dateien. Das `system`-Verzeichnis enthält die Systemdateien der Webseite. Hier passt man die Webseite an und entwickelt Erweiterungen.

## Wie man eine Seite versteckt

Ganz oben auf einer Seite kannst du `Status: unlisted` in den [Seiteneinstellungen](#einstellungen-seite) festlegen. Die Seite ist dann in der Navigation und den Suchergebnissen nicht mehr sichtbar. Du kannst zwischen verschiedenen [Statuswerten](#einstellungen-status) wählen, um zu bestimmen wer eine Seite sehen und darauf zugreifen kann.

## Wie man eine Seite weiterleitet

Ganz oben auf einer Seite kannst du `Redirect` in den [Seiteneinstellungen](#einstellungen-seite) festlegen. Die Seite wird dann zu einer anderen Seite oder URL weitergeleitet. Du kannst die Seite weiterhin im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md) und im Dateisystem bearbeiten.

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

## Einstellungen

<a id="einstellungen-system"></a>Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`Sitename` = Name der Webseite  
`Author` = Name des Webmasters  
`Email` = E-Mail des Webmasters  
`Theme` = Standard-Thema  
`Language` = Standard-Sprache  
`Layout` = Standard-Layout  
`Parser` = Standard-Seitenparser  
`Status` = Standard-Seitenstatus, [unterstützte Statuswerte](#einstellungen-status)  
`CoreStaticUrl` = URL der statischen Webseite  
`CoreServerUrl` = URL der Webseite, `auto` für automatische Erkennung  
`CoreServerTimezone` = Zeitzone der Webseite  
`CoreMultiLanguageMode` = Mehrsprachen-Modus aktivieren, 1 oder 0  
`CoreTrashTimeout` = Speicherung von gelöschten Dateien in Sekunden  

<a id="einstellungen-seite"></a>Die folgenden Einstellungen können ganz oben auf einer Seite vorgenommen werden:

`Title` = Seitentitel  
`TitleContent` = Seitentitel der im Inhalt angezeigt wird  
`TitleNavigation` = Seitentitel der in der Navigation angezeigt wird  
`TitleHeader` = Seitentitel der im Webbrowser angezeigt wird  
`TitleSlug` = Seitentitel zum Speichern der Seite  
`Description` = Beschreibung der Seite  
`Author` = Autoren der Seite, durch Komma getrennt  
`Email` = E-Mail des Seitenautors  
`Theme` = Thema der Seite  
`Language` = Sprache der Seite  
`Layout` = Layout der Seite  
`LayoutNew` = Layout um eine neue Seite zu erzeugen  
`Parser` = Parser der Seite  
`Status` = Status der Seite, [unterstützte Statuswerte](#einstellungen-status)  
`Redirect` = Weiterleitung zu einer anderen Seite oder URL  
`Image` = Bild der Seite  
`ImageAlt` = Beschreibung des Bildes der Seite  
`Modified` = Änderungsdatum der Seite, JJJJ-MM-TT Format  
`Published` = Veröffentlichungsdatum der Seite, JJJJ-MM-TT Format  
`Tag` = Tags zur Kategorisierung der Seite, durch Komma getrennt  
`Build` = Optionen zum Erstellen einer statischen Webseite, durch Komma getrennt  
`Comment` = Optionen zum Anzeigen von Kommentaren, durch Komma getrennt  

<a id="einstellungen-status"></a>Die folgenden Seiten-Statuswerte werden unterstützt:

`public` = Seite ist eine normale Seite  
`private` = Seite ist nicht sichtbar, Benutzer muss das Kennwort eingeben, [erfordert Private-Erweiterung](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private/README-de.md)  
`draft` = Seite ist nicht sichtbar, Benutzer muss sich einloggen, [erfordert Draft-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft/README-de.md)  
`unlisted` = Seite ist nicht sichtbar, aber kann mit dem richtigen Link abgerufen werden  
`shared` = Seite ist nicht vorhanden, aber kann in andere Seiten eingebunden werden  

<a id="einstellungen-files"></a>Die folgenden Dateien können angepasst werden:

`content/shared/page-error-404.md` = Inhaltsdatei für Fehlerseite  
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
