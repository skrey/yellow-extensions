<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Command 0.8.31

Befehlszeile der Webseite.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man die Befehlszeile benutzt

Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php`, um die verfügbaren Befehle anzuzeigen. Die verfügbaren Befehle hängen von den installierten Erweiterungen ab. Gib ein `php yellow.php about`, um die aktuelle Version und Erweiterungen anzuzeigen. Falls du kein PHP auf deinem Computer hast, [siehe PHP Installation](https://www.php.net/manual/de/install.php).

## Wie man eine statische Webseite erstellt

Du kannst eine statische Webseite erstellen, die auf den meisten Webservern funktioniert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php build`, du kannst wahlweise ein Verzeichnis und einen Ort angeben. Das erstellt eine statische Webseite im `public`-Verzeichnis. Lade die statische Webseite auf deinen Webserver hoch und erstelle bei Bedarf eine neue. Zum Überprüfen nach defekten Links gibt man ein: `php yellow.php check`. Zum Löschen gibt man ein: `php yellow.php clean`.

Falls du nicht willst dass eine Seite erstellt wird, kannst du `Build: exclude` in den [Seiteneinstellungen](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md#einstellungen-seite) ganz oben auf einer Seite festlegen.

## Wie man einen statischen Zwischenspeicher erstellt

Du kannst einen statischen Zwischenspeicher erstellen, um deine Webseite zu beschleunigen. In der Regel wird eine Seite zuerst erzeugt und dann an den Browser ausgeliefert. Mit einem statischen Zwischenspeicher werden Dateien direkt an den Browser ausgeliefert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php build cache`, du kannst wahlweise einen Ort angeben. Erstelle bei Bedarf einen neuen Zwischenspeicher. Zum Löschen gibt man ein: `php yellow.php clean cache`.

Falls du nicht willst dass eine Seite erstellt wird, kannst du `Build: exclude` in den [Seiteneinstellungen](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md#einstellungen-seite) ganz oben auf einer Seite festlegen.

## Beispiele

Inhaltsdatei mit Option zum Erstellen einer statischen Webseite:

    ---
    Title: Beispielseite
    Build: exclude
    ---
    Diese Seite ist in einer statischen Webseite oder Zwischenspeicher nicht enthalten.

Übersicht der verfügbaren Befehle:

`php yellow.php about` = Aktuelle Version und Erweiterungen anzeigen, erfordert Command-Erweiterung    
`php yellow.php build` = Statische Webseite erstellen, erfordert Command-Erweiterung  
`php yellow.php check` = Statische Webseite überprüfen, erfordert Command-Erweiterung  
`php yellow.php clean` = Statische Webseite löschen, erfordert Command-Erweiterung  
`php yellow.php install` = Erweiterungen hinzufügen, [erfordert Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php publish` = Erweiterungen veröffentlichen, [erfordert Publish-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish/README-de.md)  
`php yellow.php serve` = Eingebauten Webserver starten, [erfordert Serve-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/serve/README-de.md)  
`php yellow.php traffic` = Zugriffsanalysen erstellen, [erfordert Traffic-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/traffic/README-de.md)  
`php yellow.php uninstall` = Erweiterungen entfernen, [erfordert Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php update` = Webseite aktualisieren, [erfordert Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php user` = Benutzerkonten erstellen, [erfordert Edit-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)  

Verfügbare Befehle in der Befehlszeile anzeigen:

`php yellow.php`

Aktuelle Version und Erweiterungen in der Befehlszeile anzeigen:
 
`php yellow.php about` 

Statische Webseite in der Befehlszeile erstellen:

`php yellow.php build`  

Statische Webseite in der Befehlszeile nach fehlerhaften Links überprüfen:

`php yellow.php check`  

Statische Webseite und andere Dateien in der Befehlszeile löschen:

`php yellow.php clean`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`CoreStaticUrl` = URL der Webseite, bei Verwendung als Static-Site-Generator  
`CommandStaticBuildDirectory` = Verzeichnis für statisch erzeugte Dateien  
`CommandStaticDefaultFile` = Standard-Datei der statischen Webseite  
`CommandStaticErrorFile` = Fehler-Datei der statischen Webseite  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
