Command 0.8.18
==============
Befehlszeile der Webseite.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man die Befehlszeile benutzt

Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet.  Gib ein `php yellow.php`, um die vorhandenen Befehle anzuzeigen.

## Wie man den eingebauten Webserver startet

Du kannst deine Webseite mit dem eingebauten Webserver testen. Das ist praktisch für Entwickler, da alles auf dem eigenem Computer läuft. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php serve`, du kannst wahlweise ein Verzeichnis und eine URL angeben. Öffne einen Webbrowser und gehe zu `http://localhost:8000/`.

## Wie man eine statische Webseite erstellt

Du kannst eine statische Webseite erstellen, die auf den meisten Webservern funktioniert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php build`, du kannst wahlweise ein Verzeichnis und einen Ort angeben. Das erstellt eine statische Webseite im `public`-Verzeichnis. Lade die statische Webseite auf deinen Webserver hoch und erstelle bei Bedarf eine neue. Zum Überprüfen nach defekten Links gibt man ein: `php yellow.php check`. Zum Löschen gibt man ein: `php yellow.php clean`.

## Wie man einen statischen Zwischenspeicher erstellt

Du kannst einen statischen Zwischenspeicher erstellen, um deine Webseite zu beschleunigen. In der Regel wird eine Seite zuerst erzeugt und dann an den Browser ausgeliefert. Mit einem Zwischenspeicher werden Seiten direkt an den Browser ausgeliefert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php build cache`, du kannst wahlweise einen Ort angeben. Erstelle bei Bedarf einen neuen Zwischenspeicher. Zum Löschen gibt man ein: `php yellow.php clean cache`.

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

## Befehle

Die folgenden Befehle sind verfügbar:

`php yellow.php about` um die aktuelle Version anzuzeigen mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php build` um statische Webseite zu erstellen mit der Command-Erweiterung  
`php yellow.php check` um statische Webseite zu überprüfen mit der Command-Erweiterung  
`php yellow.php clean` um statische Webseite zu löschen mit der Command-Erweiterung  
`php yellow.php install` um Erweiterungen hinzuzufügen mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php publish` um Erweiterungen zu veröffentlichen mit der [Publish-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish/README-de.md)  
`php yellow.php serve` um den eingebauten Webserver zu starten mit der Command-Erweiterung  
`php yellow.php traffic` um Zugriffsanalysen zu erstellen mit der [Traffic-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/traffic/README-de.md)  
`php yellow.php uninstall` um Erweiterungen zu entfernen mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php update` um die Webseite zu aktualisieren mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`php yellow.php user` um Benutzerkonten zu aktualisieren mit der [Edit-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:
  
`CoreStaticUrl` = URL der statischen Webseite  
`CoreStaticDefaultFile` =  Standard-Datei der statischen Webseite  
`CoreStaticErrorFile` = Fehler-Datei der statischen Webseite  
`CoreStaticDirectory` = Verzeichnis für erzeugte Dateien  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
