<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Command 0.8.28
==============
Webbplatsens kommandorad.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Skärmdump"></p>

## Hur man använder kommandoraden

Öppna ett terminalfönster. Gå till installationsmappen där `yellow.php` finns. Skriv `php yellow.php` för att visa tillgängliga kommandon. De tillgängliga kommandona beror på installerade tillägg. Skriv `php yellow.php about` för att visa aktuella versionen och tillägg. Om du inte har PHP på din dator, [se PHP-installation](https://www.php.net/manual/en/install.php).

## Hur man startar inbyggda webbservern

Du kan testa din webbplats med inbyggda webbservern. Detta är praktiskt för utvecklare, eftersom allt körs på din egen dator. Öppna ett terminalfönster. Gå till installationsmappen där `yellow.php` finns. Skriv `php yellow.php serve`, du kan valfritt ange en mapp och en URL. Öppna en webbläsare och gå till `http://localhost:8000/`.

## Hur man bygger en statisk webbplats

Du kan bygga en statisk webbplats som fungerar på flesta webbservrar. Öppna ett terminalfönster. Gå till installationsmappen där `yellow.php` finns. Skriv `php yellow.php build`, du kan valfritt ange en mapp och en plats. Detta kommer att bygga en statisk webbplats i `public` mappen. Ladda upp den statiska webbplatsen till din webbserver och bygg en ny när det behövs. För att söka efter trasiga länkar skriv: `php yellow.php check`. För att rengöra statiska webbplatsen skriv: `php yellow.php clean`.

Om du inte vill att en sida ska byggas, ställ in `Build: exclude` i [sidinställningar](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-sv.md#inställningar-page) högst upp på en sida.

## Hur man bygger en statisk cache

Du kan skapa en statisk cache för att påskynda din webbplats. Vanligtvis genereras en sida först och levereras sedan till webbläsaren. Med en statisk cache levereras filer direkt till webbläsaren. Öppna ett terminalfönster. Gå till installationsmappen där `yellow.php` finns. Skriv `php yellow.php build cache`, du kan valfritt ange en plats. Skapa en ny cache vid behov. För att rensa cache skriv: `php yellow.php clean cache`.

Om du inte vill att en sida ska byggas, ställ in `Build: exclude` i [sidinställningar](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-sv.md#inställningar-page) högst upp på en sida.

## Exempel

Visa tillgängliga kommandon på kommandoraden:

`php yellow.php`

Visa aktuell version och tillägg på kommandoraden:
 
`php yellow.php about`

Starta inbyggda webbservern på kommandoraden:

`php yellow.php serve`  
`php yellow.php serve public http://localhost:8008/`  
`php yellow.php serve dynamic http://localhost:8008/`  

Bygg statisk webbplats på kommandoraden: 

`php yellow.php build`  
`php yellow.php build public /blog/`  
`php yellow.php build public /wiki/`  

Kontrollera statisk webbplats för trasiga länkar på kommandoraden:

`php yellow.php check`  
`php yellow.php check public /blog/`  
`php yellow.php check public /wiki/`  

Rengör statisk webbplats och filer på kommandoraden:

`php yellow.php clean`  
`php yellow.php clean public /blog/`  
`php yellow.php clean public /wiki/`  

Använd kommandoraden, översikt över tillgängliga kommandon:

`php yellow.php about` = Visa aktuell version och tillägg, [kräver update-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-sv.md)  
`php yellow.php build` = Bygg statisk webbplats, kräver command-tillägg  
`php yellow.php check` = Kontrollera statisk webbplats, kräver command-tillägg  
`php yellow.php clean` = Rengör statisk webbplats, kräver command-tillägg  
`php yellow.php install` = Lägg till tillägg, [kräver update-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-sv.md)  
`php yellow.php publish` = Publicera tillägg, [kräver publish-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish/README-sv.md)  
`php yellow.php serve` = Starta inbyggda webbservern, kräver command-tillägg  
`php yellow.php traffic` = Skapa trafikanalys, [kräver traffic-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/traffic/README-sv.md)  
`php yellow.php uninstall` = Ta bort tillägg, [kräver update-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-sv.md)  
`php yellow.php update` = Uppdatera webbplats, [kräver update-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-sv.md)  
`php yellow.php user` = Uppdatera användarkonton, [kräver edit-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-sv.md)  

Förhindra att en sida byggs:

    ---
    Title: Exempelsida
    Build: exclude
    ---
    Den här sidan ingår inte i en statisk webbplats eller cache.

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`CommandStaticBuildDirectory` = map för genererade filer  
`CommandStaticDefaultFile` = standardfil för statisk webbplats  
`CommandStaticErrorFile` = felfil för statisk webbplats  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
