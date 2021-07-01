<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Core 0.8.46
===========
Webbplatsens kärnfunktion.

<p align="center"><img src="core-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man redigerar en webbplats på datorn

Du kan använda din favorittextredigerare och ändra allt i filhanteraren. Allt innehåll finns i din `content` mapp. Varje mapp har en fil som heter `page.md`. I grund och botten är det du ser i filhanteraren den webbplats du får. Du kan [starta inbyggda webbservern](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md#hur-man-startar-inbyggda-webbservern) eller [bygga en statisk webbplats](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md#hur-man-bygger-en-statisk-webbplats).

## Hur man anpassar en webbplats på datorn

Om du vill justera HTML ändrar du layouten. Standardlayouten definieras i filen `system/extensions/yellow-system.ini`. En annan layout kan definieras i [sidinställningarna](#inställningar-page) högst upp på varje sida, till exempel `Layout: default`. Alla layoutfiler lagras i `system/layouts` mappen. Natuligtvis finns det ett [API för utvecklare](https://datenstrom.se/sv/yellow/help/api-for-developers).

Om du vill justera CSS ändrar du temat. Standardtemat definieras i filen `system/extensions/yellow-system.ini`. Ett annat tema kan definieras i [sidinställningarna](#inställningar-page) högst upp på varje sida, till exempel `Theme: stockholm`. Strikt taget består teman inte bara av CSS utan av flera filer. Alla temafiler lagras i `system/themes` mappen. Det finns [teman att ladda ner](https://github.com/datenstrom/yellow-extensions/blob/master/README-sv.md#teman) och en [exempel för formgivare](https://github.com/schulle4u/yellow-extension-basic).

## Hur man döljer en sida

Ställ `Status: unlisted` i [sidinställningarna](#inställningar-page) högst upp på en sida. Sidan är inte längre synlig i navigations- och sökresultat. Du kan välja mellan olika [statusvärden](#inställningar-status) för att kontrollera vem som kan se och komma åt en sida. 

## Hur man omdirigerar en sida

Ställ `Redirect` i [sidinställningarna](#inställningar-page) högst upp på en sida. Sidan omdirigeras till en annan sida eller URL. Du kan fortsätta att redigera sidan i [webbläsaren](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-sv.md) och filsystemet. 

## Exempel

Innehållsfil med normal sida:

    ---
    Title: Normal sida
    ---
    Detta är en exempelsida.

Innehållsfil med olistad sida:

    ---
    Title: Olistad sida
    Status: unlisted
    ---
    Den här sidan är inte synlig i navigations- och sökresultat.

Innehållsfil med omdirigering:

    ---
    Title: Omdirigera sida
    Redirect: https://datenstrom.se/sv/yellow/
    ---
    Den här sidan omdirigeras till en annan sida.

## Inställningar

<a id="inställningar-system"></a>Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`Sitename` = webbplatsens namn  
`Author` = webmasterns namn  
`Email` = webmasterns email  
`Theme` = standardtema  
`Language` = standardspråk  
`Layout` = standardlayout  
`Parser` = standard sidparser  
`Status` = standard sidstatus, [stödda statusvärden](#inställningar-status)  
`CoreStaticUrl` = URL för den statiska webbplatsen  
`CoreServerUrl` = URL av webbplatsen, `auto` för automatisk detektering  
`CoreServerTimezone` = webbplatsens tidszon  
`CoreMultiLanguageMode` = aktivera flerspråkigt läge, 1 eller 0  
`CoreTrashTimeout` = lagring av raderade filer i sekunder  

<a id="inställningar-page"></a>Följande inställningar kan konfigureras högst upp på en sida:

`Title` = namn på sidan  
`TitleContent` = namn på sidan som visas i innehållet  
`TitleNavigation` = namn på sidan som visas i navigeringen  
`TitleHeader` = namn på sidan som visas i webbläsaren  
`TitleSlug` = namn för att spara sidan  
`Description` = sidans beskrivning  
`Author` = sidans författare, kommaseparerade  
`Email` = email av sidans författare  
`Theme` = sidans tema  
`Language` = sidans språk  
`Layout` = sidans layout  
`LayoutNew` = sidans layout för att skapa en ny sida  
`Parser` = sidans parser  
`Status` = sidans status, [stödda statusvärden](#inställningar-status)  
`Redirect` = omdirigera till en ny sida eller URL  
`Image` = sidans bild  
`ImageAlt` = beskrivning av sidans bild  
`Modified` = sidans ändringsdatum, ÅÅÅÅ-MM-DD format  
`Published` = sidans publiceringsdatum, ÅÅÅÅ-MM-DD format  
`Tag` = taggar för kategorisering av sidan, kommaseparerade  
`Build` = alternativ för att skapa en statisk webbsida, kommaseparerade  
`Comment` = alternativ för att visa kommentarer, kommaseparerade  

<a id="inställningar-status"></a>Följande sidstatusvärden stöds:

`public` = sidan är en vanlig sida  
`private` = sidan är inte synlig, användaren måste ange lösenord, [kräver private-tillägg](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private)  
`draft` = sidan är inte synlig, användaren måste logga in, [kräver draft-tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft)  
`unlisted` = sidan är inte synlig, men kan nås med rätt länk  
`shared` = sidan är inte synlig, men kan ingå i andra sidor  

<a id="inställningar-files"></a>Följande filer kan anpassas:

`system/layouts/default.html` = layoutfil för standardsidan  
`system/layouts/error.html` = layoutfil för felsidan  
`system/layouts/header.html` = layoutfil för standard HTML-header  
`system/layouts/footer.html` = layoutfil för standard HTML-footer  
`system/layouts/navigation.html` = layoutfil för standard HTML-navigering  
`system/layouts/pagination.html` = layoutfil för standard HTML-paginering  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
