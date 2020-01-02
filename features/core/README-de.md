Core 0.8.8
==========
Kernfunktionalität der Webseite.

<p align="center"><img src="core-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip). Falls du Safari verwendest, rechtsklicke und wähle "Verknüpfte Datei laden unter".
3. Kopiere `core.zip` in dein `system/extensions`-Verzeichnis.

Die [Erweiterungsdateien](extension.ini) bitte nicht löschen, sie werden immer gebraucht.

## Wie man eine sichere Webseite macht

Überprüfe ob deine Webseite [Datenverschlüsselung](https://www.ssllabs.com/ssltest/) unterstützt. Falls Probleme auftreten, kontaktiere bitte deinen Webhoster. Am Besten ist es wenn deine Webseite automatisch von HTTP nach HTTPS weiterleitet, damit die Internetverbindung immer verschlüsselt ist.

Falls du nicht jedem [Benutzer](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) auf deiner Webseite vertrauen kannst, aktiviere den Sicherheitsmodus. Öffne die Datei `system/settings/system.ini` und ändere `CoreSafeMode: 1`. Benutzer dürfen dann [Markdown](https://github.com/datenstrom/yellow-extensions/tree/master/features/markdown) benutzen, aber kein HTML und JavaScript verwenden.

## Wie man eine mehrsprachige Webseite macht

Die Installation kommt mit drei Sprachen und man kann weitere [Sprachen](https://github.com/datenstrom/yellow-extensions/tree/master/languages) installieren. Falls du die gesamte Webseite übersetzen willst, aktiviere den Mehrsprachen-Modus. Öffne die Datei `system/settings/system.ini` und ändere `CoreMultiLanguageMode: 1`. Gehe ins `content`-Verzeichnis und erstelle ein neues Verzeichnis für jede Sprache.

## Wie man eine Seite versteckt

Ganz oben auf einer Seite kannst du `Status: unlisted` in den [Einstellungen](#einstellungen) festlegen. Die Seite ist dann nicht mehr sichtbar. Du kannst zwischen verschiedenen Statuswerten wählen, um zu bestimmen wer eine Seite sehen und darauf zugreifen kann.

## Wie man eine Seite weiterleitet

Ganz oben auf einer Seite kannst du `Redirect` in den [Einstellungen](#einstellungen) festlegen. Die Seite leitet dann zu einer anderen Seite oder URL weiter. Du kannst die Seite weiterhin im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) und im Dateisystem bearbeiten.

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
`Image` = Bild der Seite  
`ImageAlt` = Alternative Bildbeschreibung der Seite  
`Modified` = Änderungsdatum der Seite, JJJJ-MM-TT Format  
`Published` = Veröffentlichungsdatum der Seite, JJJJ-MM-TT Format  
`Tag` = Tags zur Kategorisierung der Seite, durch Komma getrennt  
`Status` = Status der Seite, z.B. `public`  
`Redirect` = Weiterleitung zu einer anderen Seite oder URL  
`Navigation` = Navigation der Seite  
`Header` = Kopfzeile der Seite  
`Footer` = Fußzeile der Seite  
`Sidebar` = Sidebar der Seite  

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`Sitename` = Name der Webseite  
`Author` = Name des Webmasters  
`Email` = E-Mail des Webmasters  
`Language` = Standard-Sprache  
`Layout` = Standard-Layout  
`Theme` = Standard-Theme  
`Parser` = Standard-Seitenparser  
`Status` = Standard-Seitenstatus, z.B. `public`  
`Navigation` = Standard-Navigation  
`Header` = Standard-Kopfzeile  
`Footer` = Standard-Fußzeile  
`Sidebar` = Standard-Sidebar  

`CoreStaticUrl` = URL der [statischen Webseite](https://github.com/datenstrom/yellow-extensions/tree/master/features/command)  
`CoreStaticDefaultFile` =  Standard-Datei der statischen Webseite  
`CoreStaticErrorFile` = Fehler-Datei der statischen Webseite  
`CoreStaticDir` = Verzeichnis für erzeugte Dateien  
`CoreCacheDir` = Verzeichnis für zwischengespeicherte Dateien  
`CoreTrashDir` = Verzeichnis für gelöschte Dateien  
`CoreServerUrl` = URL der Webseite, `auto` für automatische Erkennung  
`CoreServerTimezone` = Zeitzone der Webseite  
`CoreSafeMode` = Sicherheitsmodus mit Beschränkungen aktivieren, 1 oder 0  
`CoreMultiLanguageMode` = Mehrsprachen-Modus aktivieren, 1 oder 0  

Die folgenden Seiten-Statuswerte werden unterstützt:

`public` = Seite ist eine normale Seite  
`private` = Seite ist nicht sichtbar, Benutzer muss sich einloggen oder Kennwort eingeben, erfordert [Private-Erweiterung](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private)  
`draft` = Seite ist nicht sichtbar, Benutzer muss sich einloggen, erfordert [Draft-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/draft)  
`unlisted` = Seite ist nicht sichtbar, aber kann mit dem richtigen Link abgerufen werden  
`shared` = Seite ist nicht vorhanden, aber kann in andere Seiten eingebunden werden  
`ignore` = Seite wird ignoriert, wenn eine statische Webseite erstellt wird  

Die folgenden Dateien können angepasst werden:

`content/shared/page-new-default.md` = Inhaltsdatei für neue Seite  
`content/shared/header.md` = Inhaltsdatei für Kopfzeile, wahlweise  
`content/shared/footer.md` = Inhaltsdatei für Fußzeile, wahlweise  
`system/layouts/default.html` = Layoutdatei für normale Seite  
`system/layouts/error.html` = Layoutdatei für Fehlerseite  
`system/layouts/header.html` = Layoutdatei für Standard-Kopfzeile  
`system/layouts/footer.html` = Layoutdatei für Standard-Fußzeile  
`system/layouts/navigation.html` = Layoutdatei für Standard-Navigation  
`system/layouts/pagination.html` = Layoutdatei für Standard-Pagination  

## Beispiele

Verzeichnisstruktur für normale Webseite:

~~~
├── content
│   ├── 1-home 
│   └── shared    
├── media             
└── system  
~~~

Verzeichnisstruktur für mehrsprachige Webseite:

~~~
├── content
│   ├── 1-en 
│   │   ├── 1-home 
│   │   └── shared    
│   ├── 2-de          
│   └── 3-fr   
├── media             
└── system  
~~~

Verzeichnisstruktur für mehrsprachige Webseite, mit automatischer Spracherkennung:

~~~
├── content
│   ├── 1-en 
│   │   ├── 1-home 
│   │   └── shared    
│   ├── 2-de          
│   ├── 3-fr   
│   └── default   
├── media             
└── system  
~~~

Inhaltsdatei mit Status:

    ---
    Title: Seite mit Status
    Status: unlisted
    ---
    Diese Seite ist in der Navigation und den Suchergebnissen nicht sichtbar.

Inhaltsdatei mit Weiterleitung:

    ---
    Title: Seite mit Weiterleitung
    Redirect: https://datenstrom.se/yellow/
    ---
    Diese Seite leitet zu einer anderen Seite weiter.

## Entwickler

Datenstrom. [Support finden](https://extensions.datenstrom.se/de/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
