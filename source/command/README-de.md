Command 0.8.27
==============
Befehlszeile der Webseite.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man die Befehlszeile benutzt

Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php`, um die vorhandenen Befehle anzuzeigen. Die vorhandenen Befehle hängen von den installierten Erweiterungen ab. Gib ein `php yellow.php about`, um die aktuelle Version und Erweiterungen anzuzeigen. Du kannst [den eingebauten Webserver verwenden](#wie-man-den-eingebauten-webserver-verwendet), [eine statische Webseite erstellen](#wie-man-eine-statische-webseite-erstellt), [eine Webseite aktualisieren](https://github.com/datenstrom/yellow-extensions/blob/master/source/update/README-de.md#wie-man-eine-webseite-aktualisiert), [ein Benutzerkonto erstellen](https://github.com/datenstrom/yellow-extensions/blob/master/source/edit/README-de.md#wie-man-ein-benutzerkonto-erstellt) und vieles mehr.

## Wie man den eingebauten Webserver verwendet

Du kannst deine Webseite mit dem eingebauten Webserver testen. Das ist praktisch für Entwickler, da alles auf dem eigenem Computer läuft. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php serve`, du kannst wahlweise ein Verzeichnis und eine URL angeben. Öffne einen Webbrowser und gehe zu `http://localhost:8000/`.

## Wie man eine statische Webseite erstellt

Du kannst eine statische Webseite erstellen, die auf den meisten Webservern funktioniert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php build`, du kannst wahlweise ein Verzeichnis und einen Ort angeben. Das erstellt eine statische Webseite im `public`-Verzeichnis. Lade die statische Webseite auf deinen Webserver hoch und erstelle bei Bedarf eine neue. Zum Überprüfen nach defekten Links gibt man ein: `php yellow.php check`. Zum Löschen gibt man ein: `php yellow.php clean`.

## Wie man einen statischen Zwischenspeicher erstellt

Du kannst einen statischen Zwischenspeicher erstellen, um deine Webseite zu beschleunigen. In der Regel wird eine Seite zuerst erzeugt und dann an den Browser ausgeliefert. Mit einem statischen Zwischenspeicher werden Dateien direkt an den Browser ausgeliefert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php build cache`, du kannst wahlweise einen Ort angeben. Erstelle bei Bedarf einen neuen Zwischenspeicher. Zum Löschen gibt man ein: `php yellow.php clean cache`.

## Beispiele

Inhaltsdatei mit normaler Seite:

    ---
    Title: Beispielseite
    ---
    Diese Seite ist in der statischen Webseite enthalten.

Inhaltsdatei mit ausgeschlossener Seite:

    ---
    Title: Beispielseite
    Build: exclude
    ---
    Diese Seite ist in der statischen Webseite nicht enthalten.

Vorhandene Befehle in der Befehlszeile anzeigen:

`php yellow.php`

Aktuelle Version und Erweiterungen in der Befehlszeile anzeigen:
 
`php yellow.php about`

Eingebauten Webserver in der Befehlszeile starten:

`php yellow.php serve`  
`php yellow.php serve public http://localhost:8008/`  
`php yellow.php serve dynamic http://localhost:8008/`  

Statische Webseite in der Befehlszeile erstellen:

`php yellow.php build`  
`php yellow.php build public /blog/`  
`php yellow.php build public /wiki/`  

Statische Webseite in der Befehlszeile nach fehlerhaften Links überprüfen:

`php yellow.php check`  
`php yellow.php check public /blog/`  
`php yellow.php check public /wiki/`  

Statische Webseite und Dateien in der Befehlszeile löschen:

`php yellow.php clean`  
`php yellow.php clean public /blog/`  
`php yellow.php clean public /wiki/`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`CoreStaticUrl` = URL der statischen Webseite  
`CommandStaticBuildDirectory` = Verzeichnis für erzeugte Dateien  
`CommandStaticDefaultFile` = Standard-Datei der statischen Webseite  
`CommandStaticErrorFile` = Fehler-Datei der statischen Webseite  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
