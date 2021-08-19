<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Serve 0.8.15

Inbyggd webbserver.

<p align="center"><img src="serve-screenshot.png?raw=true" width="794" height="478" alt="Skärmdump"></p>

## Hur man startar inbyggda webbservern

Du kan starta inbyggda webbservern på [kommandoraden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md). Den inbyggda webbservern är praktisk för utvecklare. Öppna ett terminalfönster. Gå till installationsmappen där `yellow.php` finns. Skriv `php yellow.php serve`, du kan valfritt ange en mapp och en URL. Öppna en webbläsare och gå till `http://localhost:8000/`.

## Exempel

Starta inbyggda webbservern på kommandoraden, olika URL:

`php yellow.php serve`  
`php yellow.php serve dynamic http://localhost:8008/`  
`php yellow.php serve dynamic http://localhost:8080/`  

Starta inbyggda webbservern på kommandoraden, statisk webbplats med olika URL:

`php yellow.php serve public`  
`php yellow.php serve public http://localhost:8008/`  
`php yellow.php serve public http://localhost:8080/`  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/serve.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
