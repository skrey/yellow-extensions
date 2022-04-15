<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Traffic 0.8.16

Skapa trafikanalys från webbserverns loggfiler.

<p align="center"><img src="traffic-screenshot.png?raw=true" width="794" height="478" alt="Skärmdump"></p>

## Hur man skapar trafikanalys

Trafikanalysen finns tillgänglig på [kommandoraden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md). Den visar populärt innehåll, filer, sökfrågor och felsidor. Öppna ett terminalfönster. Gå till installationsmappen där filen `yellow.php` finns. Skriv `php yellow.php traffic`, du kan lägga till valfria dagar och plats. 

## Exempel

Visa tillgängliga kommandon på kommandoraden:

`php yellow.php`

Skapa trafikanalys på kommandoraden:

`php yellow.php traffic`  

Skapa trafikanalys på kommandoraden, olika antal dagar:

`php yellow.php traffic 1`  
`php yellow.php traffic 7`  
`php yellow.php traffic 30`  

Skapa trafikanalys på kommandoraden, olika platser:

`php yellow.php traffic 30 /wiki/`  
`php yellow.php traffic 30 /blog/`  
`php yellow.php traffic 30 /search/`  

Konfigurera olika skräplänkfilter i inställningar:

```
TrafficSpamFilter: bot|crawler|spider|checker
TrafficSpamFilter: bot|crawler|spider|checker|youtube.com|instagram.com|twitter.com
TrafficSpamFilter: bot|crawler|spider|checker|www.google|duckduckgo.com|bing.com|baidu.com|yandex.ru
```

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`TrafficDays` = antal dagar  
`TrafficLinesMax` = antal rader att visa per kategori  
`TrafficLogDirectory` = mapp med webbserverns logfiler  
`TrafficAccessFile` = filnamn som reguljära uttryck  
`TrafficSpamFilter` = skräplänkfilter som reguljära uttryck, `none` för att inaktivera  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/traffic.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
