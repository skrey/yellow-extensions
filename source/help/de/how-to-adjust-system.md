---
Title: Wie man das System anpasst
---
Alle Einstellungen befinden sich im `system`-Verzeichnis. Hier passt man seine Webseite an.

    ├── content
    ├── media
    └── system
        ├── extensions
        ├── layouts
        ├── themes
        └── trash

Das `extensions`-Verzeichnis enthält installierte Erweiterungen. Im `layouts`-Verzeichnis und im `themes`-Verzeichnis kann man das Aussehen seiner Webseite anpassen. Das `trash`-Verzeichnis enthält gelöschte Dateien.

## Systemeinstellungen

Die zentrale Konfigurationsdatei ist `system/extensions/yellow-system.ini`. Hier ist ein Beispiel:

    Sitename: Anna Svensson Design
    Author: Anna Svensson
    Email: anna@svensson.de
    Theme: berlin
    Language: de
    Layout: default

Dort kannst du die Systemeinstellungen festlegen, zum Beispiel den Namen der Webseite. Die individuellen [Seiteneinstellungen](#seiteneinstellungen) lassen sich ganz oben auf jeder Seite festlegen. Bei einer neuen Installation sollte man `Sitename`, `Author` und `Email` anpassen.

## Benutzereinstellungen

Alle Benutzerkonten sind in `system/extensions/yellow-user.ini` gespeichert. Hier ist ein Beispiel:

    Email: anna@svensson.com
    Name: Anna Svensson
    Description: Designer
    Language: de
    Home: /
    Access: create, edit, delete, restore, upload, configure, install, uninstall, update
    Hash: $2y$10$j26zDnt/xaWxC/eqGKb9p.d6e3pbVENDfRzauTawNCUHHl3CCOIzG
    Stamp: 21196d7e857d541849e4
    Pending: none
    Failed: 0
    Modified: 2000-01-01 13:37:00
    Status: active

Im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md) und der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md) kannst du neue Benutzerkonten anlegen und Kennwörter ändern. Ein Benutzerkonto besteht aus `Email` und weiteren Einstellungen. Falls du nicht willst dass Seiten im Webbrowser bearbeitet werden, dann ändere `Home` und `Access`. Benutzer dürfen Seiten innerhalb ihrer Startseite bearbeiten, aber nirgendwo sonst.

## Spracheinstellungen

Eine weitere Konfigurationsdatei ist `system/extensions/yellow-language.ini`. Hier ist ein Beispiel:

    Language: de
    CoreDateFormatShort: F Y
    CoreDateFormatMedium: d.m.Y
    CoreDateFormatLong: d.m.Y H:i
    EditMailFooter: @sitename
    ImageDefaultAlt: Bild ohne Beschreibung
    media/images/photo.jpg: Das ist ein Beispielbild

Dort kannst du die Spracheinstellungen festlegen, zum Beispiel das Datumsformat. Spracheinstellungen bestehen aus `Language` und weiteren Einstellungen. Du kannst die [Standardeinstellungen aus Sprachdateien](https://github.com/datenstrom/yellow-extensions/blob/master/source/german/german.txt) kopieren und in diese Datei einfügen. Du kannst auch deine eigenen Spracheinstellungen hinzufügen, beispielsweise Bildunterschriften.

## Seiteneinstellungen

Die folgenden Einstellungen können ganz oben auf einer Seite vorgenommen werden

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
`Status` = Status für Arbeitsablauf  
`Redirect` = Umleitung zu einer neuen Seite oder URL  
`Image` = Bild der Seite  
`ImageAlt` = Beschreibung des Bildes der Seite  
`Modified` = Änderungsdatum der Seite, JJJJ-MM-TT Format  
`Published` = Veröffentlichungsdatum der Seite, JJJJ-MM-TT Format  
`Tag` = Tags zur Kategorisierung der Seite, durch Komma getrennt  
`Build` = Optionen zum Erstellen einer statischen Webseite, durch Komma getrennt  
`Comment` = Optionen zum Anzeigen von Kommentaren, durch Komma getrennt  

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
