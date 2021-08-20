<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Traffic 0.8.12

Zugriffsanalysen aus Webserver-Logdateien erstellen.

<p align="center"><img src="traffic-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man Zugriffsanalysen erstellt

Die Zugriffsanalysen sind in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md) vorhanden. Es zeigt verweisende Webseiten, beliebte Inhalte, Dateien und Suchanfragen.  Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php traffic` gefolgt von optionalen Tagen und Ort.

## Beispiele

`php yellow.php traffic 30 /yellow/` 

Zugriffsanalysen in der Befehlszeile erstellen:

`php yellow.php traffic`  

Zugriffsanalysen in der Befehlszeile erstellen, unterschiedliche Anzahl Tage:

`php yellow.php traffic 1`  
`php yellow.php traffic 7`  
`php yellow.php traffic 30`  

Zugriffsanalysen in der Befehlszeile erstellen, unterschiedliche Orte:

`php yellow.php traffic 30 /wiki/`  
`php yellow.php traffic 30 /blog/`  
`php yellow.php traffic 30 /search/`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`TrafficDays` = Anzahl Tage  
`TrafficLinesMax` = Anzahl der Zeilen pro Kategorie  
`TrafficLogDirectory` = Verzeichnis mit Logdateien  
`TrafficLogFile` = Dateiname als regulärer Ausduck  
`TrafficSpamFilter` = Spamfilter als regulärer Ausdruck, `none` um zu deaktivieren  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/traffic.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
