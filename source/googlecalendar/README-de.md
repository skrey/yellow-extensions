<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Googlecalendar 0.8.8
====================
Google-Kalender einbinden.

<p align="center"><img src="googlecalendar-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man einen Kalender einbindet

Erstelle eine `[googlecalendar]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle bis auf das erste Argument sind optional:

`Id` = öffentlicher [Google Calendar](https://calendar.google.com/), mehrere Kalender in Anführungszeichen setzen  
`Mode` = Kalendermodus, z.B. `week`, `month`, `events`, `agenda`  
`Date` = Startdatum oder Anzahl der Ereignisse, JJJ-MM-TT Format  
`Style` = Kalenderstil, z.B. `left`, `center`, `right`  
`Width` = Kalenderbreite, Pixel oder Prozent  
`Height` = Kalenderhöhe, Pixel oder Prozent  

## Beispiele

Kalender einbinden:

    [googlecalendar en.swedish#holiday]
    [googlecalendar en.swedish#holiday week]
    [googlecalendar en.swedish#holiday month - right 240 240]

Kalender einbinden, mehrere Kalender zusammen:

    [googlecalendar "sv.swedish#holiday, de.german#holiday, fr.french#holiday"]
    [googlecalendar "sv.swedish#holiday, de.german#holiday, fr.french#holiday" week 2017-01-01]
    [googlecalendar "sv.swedish#holiday#0044AA, de.german#holiday#AA0000, fr.french#holiday#00AA00" month 2017-01-01]

Kalender einbinden, Events und Agenda:

    [googlecalendar de.german#holiday events]
    [googlecalendar de.german#holiday events 10]
    [googlecalendar de.german#holiday agenda 10]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`GooglecalendarMode` = Kalendermodus, z.B. `week`, `month`, `events`, `agenda`  
`GooglecalendarEntriesMax` = Anzahl der Einträge  
`GooglecalendarStyle` = Kalenderstil, z.B. `flexible`  
`GooglecalendarApiKey` = dein Google-API-Schlüssel  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlecalendar.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung verwendet [Google Calendar](https://calendar.google.com/). Der Dienstanbieter sammelt personenbezogene Daten und benutzt Cookies.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
