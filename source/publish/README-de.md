Publish 0.8.24
==============
Erweiterungen verpacken und veröffentlichen.

<p align="center"><img src="publish-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung verpackt

Die [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md) kümmert sich darum Webseiten zu aktualisiert. Deine Erweiterung kann Teil dieses Prozesses werden. Schau dir die [Example-Erweiterung](https://github.com/schulle4u/yellow-extension-example) und [Basic-Erweiterung](https://github.com/schulle4u/yellow-extension-basic) an. Sie zeigen dir welche Dateien und Einstellungen erforderlich sind. Bitte stelle sicher, dass deine Erweiterung unseren Programmierungs- und Dokumentationsstandards entspricht.

## Wie man eine Erweiterung veröffentlicht

Erhöhe zuerst die Versionsnummer in deinem PHP-Code und veröffentliche dann deine Erweiterung in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md). Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php publish` gefolgt von einem Verzeichnis. Das aktualisiert alle notwendigen Dateien. Lade deine Änderungen zu GitHub hoch und erzeuge einen [Pull-Request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request-from-a-fork) für `datenstrom/yellow-extensions`.

Beim ersten Mal wirst du nach deinem Quellcode-Verzeichnis gefragt. Benutze dein GitHub-Konto, [forke das offizielle Repository](https://github.com/datenstrom/yellow-extensions) und speichere eine Kopie auf deiner Festplatte ab. Du kannst das Verzeichnis konfigurieren mit `UpdateSourceCodeDirectory` in der Datei `system/settings/system.ini`.

## Beispiele

Erweiterungs-Einstellungen für eine Funktion:

~~~
# Datenstrom Yellow extension settings

Extension: Example
Version: 0.8.3
Description: Example feature for developers.
HelpUrl: https://github.com/annasvensson/yellow-extension-example
DownloadUrl: https://github.com/datenstrom/yellow-extensions/raw/master/zip/example.zip
Published: 2019-01-24 19:42:13
Developer: Anna Svensson
Tag: feature
system/extensions/example.php: Example,example.php,create,update
~~~

Erweiterungs-Einstellungen für eine Sprache:

~~~
# Datenstrom Yellow extension settings

Extension: German
Version: 0.8.3
Description: German/Deutsch with language 'de'.
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/german
DownloadUrl: https://github.com/datenstrom/yellow-extensions/raw/master/zip/german.zip
Published: 2019-01-24 19:42:13
Translator: David Fehrmann
Tag: language
system/extensions/german.php: German,german.php,create,update
system/extensions/german.txt: German,german.txt,create,update
~~~

Erweiterungs-Einstellungen für ein Thema:

~~~
# Datenstrom Yellow extension settings

Extension: Basic
Version: 0.8.3
Description: Example theme for designers.
HelpUrl: https://github.com/annasvensson/yellow-extension-basic
DownloadUrl: https://github.com/datenstrom/yellow-extensions/raw/master/zip/basic.zip
Published: 2019-01-24 19:42:13
Designer: Anna Svensson
Tag: theme
system/extensions/basic.php: Basic,basic.php,create,update
system/themes/basic.css: Basic,basic.css,create,update,careful
system/themes/basic.png: Basic,basic.png,create
~~~

Erweiterungen in der Befehlszeile veröffentlichen:

`php yellow.php publish yellow-extension-basic`  
`php yellow.php publish yellow-extension-example`  
`php yellow.php publish yellow-extensions/source/german`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `extension.ini` vorgenommen werden:

`Extension` = Name der Erweiterung  
`Version` = Versionsnummer der Erweiterung  
`Description` = Beschreibung der Erweiterung, maximal eine Zeile  
`HelpUrl` = Hilfeseite der Erweiterung  
`DownloadUrl` = Adresse zum Herunterladen der Erweiterung  
`Published` = Veröffentlichungsdatum der Erweiterung, JJJJ-MM-TT Format  
`Status` = Status der Erweiterung, [unterstützte Statuswerte](#einstellungen-status)  
`Developer` = Entwickler einer Funktion  
`Translator` = Übersetzer einer Sprache  
`Designer` = Designer eines Themas  
`Language` = Sprachen der Erweiterung, durch Komma getrennt  
`Tag` = Tags zur Kategorisierung der Erweiterung, durch Komma getrennt  

<a id="einstellungen-status"></a>Die folgenden Erweiterungs-Statuswerte werden unterstützt:

`public` = Erweiterung ist im offiziellen Repository sichtbar  
`unlisted` = Erweiterung ist im offiziellen Repository nicht sichtbar  
`unpublished` = Erweiterung ist im offiziellen Repository nicht vorhanden  

<a id="einstellungen-actions"></a>Die folgenden Dateiaktionen werden unterstützt:

`create` = Datei erstellen falls nicht vorhanden  
`update` = Datei überschreiben falls vorhanden  
`delete` = Datei löschen falls vorhanden  
`multi-language` = Datei aus dem entsprechenden Unterverzeichnis verwenden  
`optional` = nur falls neue Installation  
`careful` = nur falls nicht verändert  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/publish.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
