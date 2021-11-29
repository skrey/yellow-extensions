<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Googlecalendar 0.8.10

Bädda in Google-kalender.

<p align="center"><img src="googlecalendar-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man bäddar in en kalender

Skapa en `[googlecalendar]` förkortning.

Följande argument är tillgängliga, alla utom det första argumentet är valfria:

`Id` = offentlig [Google-kalender](https://calendar.google.com/), placera flera kalendrar i citattecken  
`Mode` = kalenderläge, t.ex. `week`, `month`, `events`, `agenda`  
`Date` = startdatum eller antal inlägg, ÅÅÅÅ-MM-DD format  
`Style` = kalenderstil, t.ex. `left`, `center`, `right`  
`Width` = kalendebredd, pixel eller procent  
`Height` = kalendehöjd, pixel eller procent  

## Exempel

Bädda in en kalender, olika kalendrar:

    [googlecalendar en.uk#holiday]
    [googlecalendar de.german#holiday]
    [googlecalendar sv.swedish#holiday]

Bädda in en kalender, flera kalendrar tillsammans:

    [googlecalendar "en.uk#holiday, de.german#holiday"]
    [googlecalendar "en.uk#holiday, de.german#holiday, sv.swedish#holiday"]
    [googlecalendar "en.uk#holiday#0044AA, de.german#holiday#AA0000, sv.swedish#holiday#0000AA"]

Bädda in en kalender, olika lägen:

    [googlecalendar sv.swedish#holiday month]
    [googlecalendar sv.swedish#holiday events]
    [googlecalendar sv.swedish#holiday agenda]

Bädda in en kalender, olika datum:

    [googlecalendar sv.swedish#holiday month 2021-06-01]
    [googlecalendar sv.swedish#holiday month 2021-09-01]
    [googlecalendar sv.swedish#holiday month 2023-12-24]

Bädda in en kalender, olika storlekar:

    [googlecalendar sv.swedish#holiday month 2021-06-01 right 50%]
    [googlecalendar sv.swedish#holiday month 2021-06-01 right 240 240]
    [googlecalendar sv.swedish#holiday month 2021-06-01 right 480 480]

Bädda in en kalender, olika storlekar för aktuella datumet:

    [googlecalendar sv.swedish#holiday month - right 50%]
    [googlecalendar sv.swedish#holiday month - right 240 240]
    [googlecalendar sv.swedish#holiday month - right 480 480]

## Inställningar

Följande inställningar kan konfigureras i filen `system/extensions/yellow-system.ini`:

`GooglecalendarMode` = kalenderläge, t.ex. `week`, `month`, `events`, `agenda`  
`GooglecalendarEntriesMax` = antal inlägg att visa per förkortning, för `events` eller `agenda`  
`GooglecalendarStyle` = kalenderstil, t.ex. `flexible`  
`GooglecalendarApiKey` = din Google API-nyckel  

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlecalendar.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

Detta tilläg använder [Google-kalender](https://calendar.google.com/). Tjänsteleverantören samlar in personuppgifter och använder cookies.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
