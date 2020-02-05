Release 0.8.18
==============
Erweiterungen verpacken und veröffentlichen.

<p align="center"><img src="release-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/release.zip). Falls du Safari verwendest, rechtsklicke und wähle "Verknüpfte Datei laden unter".
3. Kopiere `release.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man eine Erweiterung verpackt

Die [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/update/README-de.md) kümmert sich darum Dateien herunterzuladen und Webseiten zu aktualisiert. Deine Erweiterung kann Teil dieses Prozesses werden. Besorge dir ein GitHub-Konto und [forke das offizielle Repository](https://github.com/datenstrom/yellow-extensions). Schau dir die [Example-Erweiterung](https://github.com/schulle4u/yellow-extension-example) und [Basic-Erweiterung](https://github.com/schulle4u/yellow-extension-basic) an. Sie zeigen dir welche Dateien und Einstellungen notwendig sind. Bitte stelle sicher, dass alle Erweiterungen unseren Programmierungs- und Dokumentationsstandards entsprechen.

## Wie man eine Erweiterung veröffentlicht

Erhöhe zuerst die Versionsnummer in deinem Code und erstelle dann ein neues Release in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/features/command/README-de.md). Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php release` gefolgt von einem Verzeichnis. Dadurch werden alle Dateien aktualisiert. Lade deine Änderungen zu GitHub hoch und erzeuge einen [Pull-Request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request-from-a-fork) für `datenstrom/yellow-extensions`.

## Einstellungen

Die folgenden Einstellungen können in der Datei `extension.ini` vorgenommen werden:

`Extension` = Name der Erweiterung  
`Version` = Versionsnummer der Erweiterung  
`Type` = Typ der Erweiterung, z.B. `feature`, `language`, `theme`  
`Description` = Beschreibung der Erweiterung, maximal eine Zeile  
`Published` = Veröffentlichungsdatum der Erweiterung, JJJJ-MM-TT Format  
`Language` = Sprache(n) der Erweiterung, durch Komma getrennt  
`Status` = Status der Erweiterung, z.B. `public`  
`Developer` = Entwickler einer Funktion  
`Translator` = Übersetzer einer Sprache  
`Designer` = Designer eines Themas  

Die folgenden Dateioperationen werden unterstützt:

`create` = erstellen falls nicht vorhanden  
`update` = überschreiben falls vorhanden  
`delete` = löschen falls vorhanden  
`optional` = nur falls neue Installation, z.B. für Inhaltsdateien  
`careful` = nur falls nicht verändert, z.B. für Systemdateien  
`multi-language` = verwende Datei aus dem entsprechenden Unterverzeichnis  

Die folgenden Erweiterungs-Statuswerte werden unterstützt:

`public` = Erweiterung ist im offiziellen Repository sichtbar  
`unlisted` = Erweiterung ist im offiziellen Repository nicht sichtbar  
`unreleased` = Erweiterung ist im offiziellen Repository nicht vorhanden  

## Beispiele

Erweiterungs-Einstellungen für eine Funktion:

~~~
# Datenstrom Yellow extension

Extension: Example
Version: 0.8.3
Type: feature
Description: Example feature for developers.
Published: 2019-01-24 19:42:13
Developer: Anna Svensson

system/extensions/example.php: Example,example.php,create,update
~~~

Erweiterungs-Einstellungen für eine Sprache:

~~~
# Datenstrom Yellow extension

Extension: German
Version: 0.8.3
Type: language
Description: German/Deutsch with language 'de'.
Published: 2019-01-24 19:42:13
Translator: Anna Svensson

system/extensions/german.php: German,german.php,create,update
system/extensions/german-language.txt: German,german-language.txt,create,update
~~~

Erweiterungs-Einstellungen für ein Thema:

~~~
# Datenstrom Yellow extension

Extension: Basic
Version: 0.8.3
Type: theme
Description: Example theme for designers.
Published: 2019-01-24 19:42:13
Designer: Anna Svensson

system/extensions/basic.php: Basic,basic.php,create,update
system/resources/basic.css: Basic,basic.css,create,update,careful
system/resources/basic-icon.png: Basic,basic-icon.png,create
~~~

Erweiterungen in der Befehlszeile veröffentlichen:

`php yellow.php release yellow-extension-example`  
`php yellow.php release yellow-extension-basic`  
`php yellow.php release yellow-openstreetmap`  

## Entwickler

Datenstrom. [Support finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
