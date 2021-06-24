<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Feed 0.8.10
===========
Feed med senaste ändringarna

<p align="center"><img src="feed-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man använder en feed

Feeden finns tillgängligt på din webbplats som `http://website/feed/` och `http://website/feed/page:feed.xml`. Det är en feed för hela webbplatsen, endast synliga sidor ingår. Att skapa en blogg-feed öppet filen  `system/extensions/yellow-system.ini` och ändra `FeedFilterLayout: blog`. Du kan lägga till en länk till feeden någonstans på din webbplats.

## Exempel

Innehållsfil med länk till feed:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    [Se senaste ändringarna](/feed/). 
    [RSS feed](/feed/page:feed.xml).

Innehållsfil med länk till feed, av en specifik författare:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [Se senaste ändringarna av Datenstrom](/feed/author:datenstrom/). 
    [RSS feed](/feed/author:datenstrom/page:feed.xml).

Innehållsfil med länk till feed, för en specifik tagg:

    ---
    Title: Exempelsida
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [Se senaste ändringarna för exempel](/feed/tag:exempel/). 
    [RSS feed](/feed/tag:example/page:feed.xml).

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`FeedLocation` = plats för feed  
`FeedFileXml` = filnamn för RSS feed  
`FeedFilterLayout` = filter för en specifik layout  
`FeedPaginationLimit` = antal inlägg att visa per sida  

Följande filer kan anpassas:

`system/layouts/feed.html` = layoutfil för feed  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/feed.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
