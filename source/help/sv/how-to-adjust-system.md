---
Title: Hur man anpassar systemet
---
Alla inställningar finns i `system` mappen. Du kan anpassa din webbplats här. 

    ├── content
    ├── media
    └── system
        ├── extensions
        ├── layouts
        ├── themes
        └── trash

Mappen `extensions` innehåller installerade tillägg. Du kan använda `layouts` mappen och `themes` mappen för att justera utseendet på din webbplats. Mappen `trash` innehåller raderade filer. 

## Systeminställningar

Den centrala konfigurationsfilen är `system/extensions/yellow-system.ini`. Här är ett exempel: 

    Sitename: Anna Svensson Design
    Author: Anna Svensson
    Email: anna@svensson.com
    Theme: stockholm
    Language: sv
    Layout: default

Du kan definiera systeminställningarna här, till exempel namnet på webbplatsen. Enskilda [sidinställningar](#sidinställningar) kan definieras högst upp på varje sida. För en ny installation bör du ställa in `Sitename`, `Author` och `Email`.

## Användarinställningar

Alla användarkonton lagras i filen `system/extensions/yellow-user.ini`. Här är ett exempel:

    Email: anna@svensson.com
    Name: Anna Svensson
    Description: Formgivare
    Language: sv
    Home: /
    Access: create, edit, delete, restore, upload, configure, install, uninstall, update
    Hash: $2y$10$j26zDnt/xaWxC/eqGKb9p.d6e3pbVENDfRzauTawNCUHHl3CCOIzG
    Stamp: 21196d7e857d541849e4
    Pending: none
    Failed: 0
    Modified: 2000-01-01 13:37:00
    Status: active

Du kan använda [webbläsaren](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-sv.md) och [kommandoraden](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md) för att skapa nya användarkonton och ändra lösenord. Ett användarkonto består av `Email` och andra inställningar. Om du inte vill att sidorna ska ändras i en webbläsare ändrar du `Home` och `Access`. Användare får redigera sidor på sin hemsida, men inte någon annanstans.

## Språkinställningar

En annan konfigurationsfil är `system/extensions/yellow-language.ini`. Här är ett exempel:

    Language: sv
    CoreDateFormatShort: F Y
    CoreDateFormatMedium: Y-m-d
    CoreDateFormatLong: Y-m-d H:i
    EditMailFooter: @sitename
    ImageDefaultAlt: Bild utan beskrivning
    media/images/photo.jpg: Detta är en exempelbild

Du kan definiera språkinställningarna här, till exempel datumformat. Språkinställningar består av `Language` och andra inställningar. Du kan kopiera [standardinställningarna från språkfiler](https://github.com/datenstrom/yellow-extensions/blob/master/source/swedish/swedish.txt) och klistra in dem i den här filen. Du kan också lägga till dina egna språkinställningar, till exempel bildtexter.

## Sidinställningar

Följande inställningar kan konfigureras högst upp på en sida:

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
`Status` = sidans status  
`Redirect` = omdirigera till en ny sida eller URL  
`Image` = sidans bild  
`ImageAlt` = alternativ text för sidans bild  
`Modified` = sidans ändringsdatum, ÅÅÅÅ-MM-DD format  
`Published` = sidans publiceringsdatum, ÅÅÅÅ-MM-DD format  
`Tag` = taggar för kategorisering av sidan, kommaseparerade  
`Build` = alternativ för att skapa en statisk webbsida, kommaseparerade  
`Comment` = alternativ för att visa kommentarer, kommaseparerade  

Har du några frågor? [Få hjälp](.) och [engagera dig](contributing-guidelines).
