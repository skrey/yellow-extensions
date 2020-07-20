Traffic 0.8.6
=============
Zugriffsanalysen aus Webserver-Logdateien erstellen.

<p align="center"><img src="traffic-screenshot.png?raw=true" width="794" height="478" alt="Bildschirmfoto"></p>

## Wie man Zugriffsanalysen erstellt

Die Zugriffsanalysen sind in der [Befehlszeile](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md) vorhanden. Es zeigt verweisende Webseiten, beliebte Inhalte, Dateien und Suchanfragen.  Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die `yellow.php` befindet. Gib ein `php yellow.php traffic` gefolgt von optionalen Tagen und Ort.

## Beispiele

Zugriffsanalysen in der Befehlszeile erstellen:

`php yellow.php traffic`  
`php yellow.php traffic 1`  
`php yellow.php traffic 30 /yellow/` 

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`TrafficDays` = Anzahl Tage  
`TrafficLinesMax` = Anzahl der Zeilen pro Kategorie  
`TrafficLogDirectory` = Verzeichnis mit Logdateien  
`TrafficLogFile` = Dateiname als regulärer Ausduck  
`TrafficSpamFilter` = Spamfilter als regulärer Ausdruck, `none` um zu deaktivieren  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/traffic.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
