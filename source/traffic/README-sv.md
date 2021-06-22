<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Traffic 0.8.11
==============
Skapa trafikanalys från webbserverns loggfiler.

<p align="center"><img src="traffic-screenshot.png?raw=true" width="794" height="478" alt="Skärmdump"></p>

## Hur man skapar trafikanalys

Trafikanalysen finns tillgänglig på [kommandoraden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md). Den visar hänvisande webbplatser, populärt innehåll, filer och sökfrågor. Öppna ett terminalfönster. Gå till installationsmappen där `yellow.php` finns. Skriv `php yellow.php traffic`, du kan lägga till valfria dagar och plats. 

## Exempel

Skapa trafikanalys på kommandoraden:

`php yellow.php traffic`  
`php yellow.php traffic 1`  
`php yellow.php traffic 30 /yellow/` 

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`TrafficDays` = antal dagar  
`TrafficLinesMax` = antal rader att visa per kategori  
`TrafficLogDirectory` = mapp med logfiler  
`TrafficLogFile` = filnamn som reguljära uttryck  
`TrafficSpamFilter` = skräplänkfilter som reguljära uttryck, `none` för att inaktivera  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/traffic.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
