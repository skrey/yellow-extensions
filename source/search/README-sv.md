<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Search 0.8.12
=============
Heltekstsökning.

<p align="center"><img src="search-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man använder en sökning

Sökningen är tillgänglig på din webbplats som `http://website/search/`. Den söker igenom innehållet på hela webbplatsen, endast synliga sidor ingår. För att visa ett sökfält, lägg till en `[search]` förkortning. Du kan också lägga till en länk till sökningen någonstans på din webbplats.

## Exempel

Söka på en webbplats:

    kaffe
    mjölk socker 
    "mjölk och socker"

Söka på en webbplats, olika filter:

    kaffe author:datenstrom
    kaffe language:sv
    kaffe tag:exempel

Lägga till ett sökfält:

    [search]
    [search /search/]
    [search /sv/search/]

Innehållsfil med sökfält:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [search]

Innehållsfil med länk till sökningen:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [Sök på alla sidor](/search/). [Se senaste ändringar](/search/special:changes/).

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`SearchLocation` = plats för sökningen  
`SearchPaginationLimit` = antal inlägg att visa per sida  
`SearchPageLength` = maximal sidlängd att visa  

Följande filer kan anpassas:

`system/layouts/search.html` = layoutfil för sökningen  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/search.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
