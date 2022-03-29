<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Publish 0.8.46

Erweiterungen erstellen und veröffentlichen.

<p align="center"><img src="publish-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung erstellt

Beginne mit einer [Beispiel-Funktion](https://github.com/schulle4u/yellow-extension-helloworld), einem [Beispiel-Thema](https://github.com/schulle4u/yellow-extension-basic) oder einer [Beispiel-Sprache](https://github.com/datenstrom/yellow-extensions/tree/master/source/german). Das zeigt dir welche Dateien und Einstellungen erforderlich sind. Jede Erweiterung benötigt eine `extension.ini`-Datei mit Erweiterungseinstellungen. Bitte stelle sicher, dass deine Erweiterung unseren Programmierungs- und Dokumentationsstandards entspricht. Es ist nicht wichtig welchen Standard wir verwenden, aber dass wir alle den selben verwenden. Lade deine Erweiterung zu GitHub hoch, lass uns wissen falls du Hilfe brauchst.

## Wie man eine Erweiterung veröffentlicht

Erhöhe zuerst die Versionsnummer in deinem PHP-Code und veröffentliche dann deine Erweiterung in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md). Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php publish` gefolgt von einem Verzeichnis. Das aktualisiert alle notwendigen Dateien. Lade deine Änderungen zu GitHub hoch und erzeuge einen Pull-Request für `datenstrom/yellow-extensions`. Deine Erweiterung ist jetzt beim [Aktualisierungsprozess](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md) mit dabei.

## Wie man die Standardinstallation aktualisiert

Die [Standardinstallation](https://github.com/datenstrom/yellow) ist eine Sammlung der wichtigsten Erweiterungen. Du kannst die Standardinstallation in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md) aktualisieren, zum Beispiel nachdem Sprachdateien verändert wurden. Normalerweise kümmern sich die Betreuer darum, doch die gleichen Werkzeuge stehen allen zur Verfügung. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php publish yellow-extensions` und `php yellow.php publish yellow`. Das aktualisiert alle notwendigen Dateien. Lade deine Änderungen zu GitHub hoch und erzeuge einen Pull-Request für `datenstrom/yellow-extensions` und `datenstrom/yellow`.

Falls du Entwickler/Designer/Übersetzer erwähnen möchtest, kannst du [Co-Autoren](https://docs.github.com/en/pull-requests/committing-changes-to-your-project/creating-and-editing-commits/creating-a-commit-with-multiple-authors) zur Commit-Nachricht hinzufügen.

## Beispiele

Erweiterungseinstellungen für eine Funktion:

~~~
# Datenstrom Yellow extension settings

Extension: Helloworld
Version: 0.8.15
Description: Example feature for Datenstrom Yellow.
HelpUrl: https://github.com/annasvensson/yellow-extension-helloworld
DownloadUrl: https://github.com/annasvensson/yellow-extension-helloworld/archive/master.zip
Published: 2019-01-24 19:42:13
Developer: Anna Svensson
Tag: example, feature
system/extensions/helloworld.php: helloworld.php, create, update
system/extensions/helloworld.js: helloworld.js, create, update
system/extensions/helloworld.css: helloworld.css, create, update
system/extensions/helloworld.txt: helloworld.txt, create, update
~~~

Erweiterungseinstellungen für ein Thema:

~~~
# Datenstrom Yellow extension settings

Extension: Basic
Version: 0.8.15
Description: Example theme for Datenstrom Yellow.
HelpUrl: https://github.com/annasvensson/yellow-extension-basic
DownloadUrl: https://github.com/annasvensson/yellow-extension-basic/archive/master.zip
Published: 2019-01-24 19:42:13
Designer: Anna Svensson
Tag: example, theme
system/extensions/basic.php: basic.php, create, update
system/extensions/basic.txt: basic.txt, create, update
system/themes/basic.css: basic.css, create, update, careful
system/themes/basic.png: basic.png, create
~~~

Erweiterungseinstellungen für eine Sprache:

~~~
# Datenstrom Yellow extension settings

Extension: German
Version: 0.8.24
Description: German/Deutsch with language 'de'.
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/german
DownloadUrl: https://github.com/datenstrom/yellow-extensions/raw/master/zip/german.zip
Published: 2019-01-24 19:42:13
Translator: David Fehrmann
Tag: language
system/extensions/german.php: german.php, create, update
system/extensions/german.txt: german.txt, create, update
~~~

Vorhandene Verzeichnisse in der Befehlszeile anzeigen:

`php yellow.php publish`  

Erweiterungen in der Befehlszeile veröffentlichen:

`php yellow.php publish yellow-extension-helloworld`  
`php yellow.php publish yellow-extension-basic`  
`php yellow.php publish yellow-extensions/source/german`  

Standardinstallation in der Befehlszeile aktualisieren:

`php yellow.php publish yellow-extensions`  
`php yellow.php publish yellow`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`PublishSourceCodeDirectory ` = Verzeichnis mit Quellcode  

Die folgenden Einstellungen können in der Datei `extension.ini` vorgenommen werden:

`Extension` = Name der Erweiterung  
`Version` = Versionsnummer der Erweiterung  
`Description` = Beschreibung der Erweiterung, maximal eine Zeile  
`HelpUrl` = Hilfeseite der Erweiterung  
`DownloadUrl` = Adresse zum Herunterladen der Erweiterung  
`Published` = Veröffentlichungsdatum der Erweiterung, JJJJ-MM-TT Format  
`Status` = Status der Erweiterung, [unterstützte Statuswerte](#einstellungen-status)  
`Developer` = Entwickler einer Funktion  
`Designer` = Designer eines Themas  
`Translator` = Übersetzer einer Sprache  
`Tag` = Tags zur Kategorisierung der Erweiterung, durch Komma getrennt  

<a id="einstellungen-status"></a>Die folgenden Erweiterungs-Statuswerte werden unterstützt:

`public` = Erweiterung ist im offiziellen Repository sichtbar  
`unlisted` = Erweiterung ist im offiziellen Repository nicht sichtbar  
`unpublished` = Erweiterung ist im offiziellen Repository nicht vorhanden  

<a id="einstellungen-actions"></a>Die folgenden Dateiaktionen werden unterstützt:

`create` = Datei erstellen falls nicht vorhanden  
`update` = Datei überschreiben falls vorhanden  
`delete` = Datei löschen falls vorhanden  
`optional` = nur falls neue Installation  
`careful` = nur falls nicht verändert  
`multi-language` = Inhalt aus dem entsprechenden Unterverzeichnis verwenden  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/publish.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
