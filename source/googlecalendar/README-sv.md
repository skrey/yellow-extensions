<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Googlecalendar 0.8.9
====================
Bädda in Google-kalender.

<p align="center"><img src="googlecalendar-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man bäddar in en kalender

Skapa en `[googlecalendar]` förkortning.

Följande argument är tillgängliga, alla utom det första argumentet är valfria:

`Id` = offentlig [Google-kalender](https://calendar.google.com/), placera flera kalendrar i citattecken  
`Mode` = kalenderläge, t.ex. `week`, `month`, `events`, `agenda`  
`Date` = startdatum eller antal händelser, ÅÅÅÅ-MM-DD format  
`Style` = kalenderstil, t.ex. `left`, `center`, `right`  
`Width` = kalendebredd, pixel eller procent  
`Height` = kalendehöjd, pixel eller procent  

## Exempel

Bädda in en kalender:

    [googlecalendar en.swedish#holiday]
    [googlecalendar en.swedish#holiday week]
    [googlecalendar en.swedish#holiday month - right 240 240]

Bädda in en kalender, flera kalendrar tillsammans:

    [googlecalendar "sv.swedish#holiday, de.german#holiday, fr.french#holiday"]
    [googlecalendar "sv.swedish#holiday, de.german#holiday, fr.french#holiday" week 2017-01-01]
    [googlecalendar "sv.swedish#holiday#0044AA, de.german#holiday#AA0000, fr.french#holiday#00AA00" month 2021-01-01]

Bädda in en kalender, events och agenda:

    [googlecalendar de.german#holiday events]
    [googlecalendar de.german#holiday events 10]
    [googlecalendar de.german#holiday agenda 10]

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`GooglecalendarMode` = kalenderläge, t.ex. `week`, `month`, `events`, `agenda`  
`GooglecalendarEntriesMax` = antal inlägg  
`GooglecalendarStyle` = kalenderstil, t.ex. `flexible`  
`GooglecalendarApiKey` = din Google API-nyckel  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlecalendar.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

Detta tilläg använder [Google-kalender](https://calendar.google.com/). Tjänsteleverantören samlar in personuppgifter och använder cookies.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
