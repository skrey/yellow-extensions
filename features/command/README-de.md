Command 0.8.17
==============
Befehlszeile der Webseite.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man die Befehlszeile benutzt

Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet.  Gib ein `php yellow.php`, um die vorhandenen Befehle anzuzeigen.

## Wie man eine statische Webseite erstellt

Du kannst eine eine statische Webseite erstellen, die auf den meisten Webservern funktioniert. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php build`, du kannst wahlweise ein Verzeichnis und einen Ort angeben. Das erstellt eine statische Webseite im `public`-Verzeichnis. Lade die statische Webseite auf deinen Webserver hoch und erstelle bei Bedarf eine neue. Zum Überprüfen nach defekten Links gibt man ein: `php yellow.php check`. Zum Löschen gibt man ein: `php yellow.php clean`.

## Wie man einen statischen Zwischenspeicher erstellt

Du kannst deine Webseite mit einem statischen Zwischenspeicher beschleunigen. Das verbessert die Ladezeit, jedoch muss der Speicher immer wieder aktualisiert werden. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php build cache`, du kannst wahlweise einen Ort angeben. Zum Löschen gibt man ein: `php yellow.php clean cache`.

## Wie man den eingebauten Webserver startet

Du kannst deine Webseite mit dem eingebauten Webserver testen. Das ist praktisch für Entwickler, da alles auf dem eigenem Computer läuft. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php serve`, du kannst wahlweise ein Verzeichnis und eine URL angeben. Öffne einen Webbrowser und gehe zu `http://localhost:8000/`.

## Beispiele

Inhaltsdatei mit Optionen zum Erstellen einer statischen Webseite:

    ---
    Title: Beispielseite
    Build: exclude
    ---
    Diese Seite wird beim Erstellen einer statischen Webseite nicht berücksichtigt.

Vorhandene Befehle anzeigen:

`php yellow.php`

Statische Webseite in der Befehlszeile erstellen:

`php yellow.php build`  
`php yellow.php build public /blog/`  
`php yellow.php build public /wiki/`  

Statische Webseite in der Befehlszeile nach fehlerhaften Links überprüfen:

`php yellow.php check`  
`php yellow.php check public /blog/`  
`php yellow.php check public /wiki/`  

Eingebauten Webserver in der Befehlszeile starten:

`php yellow.php serve`  
`php yellow.php serve public http://localhost:8008/`  
`php yellow.php serve dynamic http://localhost:8008/`  

## Befehle

Die folgenden Befehle sind verfügbar:

`php yellow.php about` um die aktuelle Version der Webseite anzuzeigen mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/update/README-de.md)  
`php yellow.php build` um statische Webseite zu erstellen  
`php yellow.php check` um statische Webseite nach fehlerhaften Links zu überprüfen  
`php yellow.php clean` um statische Webseite zu löschen  
`php yellow.php install` um Erweiterungen hinzuzufügen mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/update/README-de.md)  
`php yellow.php release` um Erweiterungen zu veröffentlichen mit der [Release-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/release/README-de.md)  
`php yellow.php serve` um den eingebauten Webserver zu starten  
`php yellow.php traffic` um Zugriffsanalysen zu erstellen mit der [Traffic-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/traffic/README-de.md)  
`php yellow.php uninstall` um Erweiterungen zu entfernen mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/update/README-de.md)  
`php yellow.php update` um die Webseite zu aktualisieren mit der [Update-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/update/README-de.md)  
`php yellow.php user` um Benutzerkonten zu aktualisieren mit der [Edit-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit/README-de.md)  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
