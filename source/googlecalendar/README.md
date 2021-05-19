<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Googlecalendar 0.8.8
====================
Embed Google calendar.

<p align="center"><img src="googlecalendar-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to embed a calendar

Create a `[googlecalendar]` shortcut.

The following arguments are available, all but the first argument are optional:

`Id` = public [Google calendar](https://calendar.google.com/), wrap multiple calendars into quotes  
`Mode` = calendar mode, e.g. `week`, `month`, `events`, `agenda`  
`Date` = start date or number of events, YYYY-MM-DD format  
`Style` = calendar style, e.g. `left`, `center`, `right`  
`Width` = calendar width, pixel or percent  
`Height` = calendar height, pixel or percent  

## Examples

Embedding a calendar:

    [googlecalendar en.swedish#holiday]
    [googlecalendar en.swedish#holiday week]
    [googlecalendar en.swedish#holiday month - right 240 240]

Embedding a calendar, multiple calendars together:

    [googlecalendar "sv.swedish#holiday, de.german#holiday, fr.french#holiday"]
    [googlecalendar "sv.swedish#holiday, de.german#holiday, fr.french#holiday" week 2017-01-01]
    [googlecalendar "sv.swedish#holiday#0044AA, de.german#holiday#AA0000, fr.french#holiday#00AA00" month 2017-01-01]

Embedding a calendar, events and agenda:

    [googlecalendar de.german#holiday events]
    [googlecalendar de.german#holiday events 10]
    [googlecalendar de.german#holiday agenda 10]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`GooglecalendarMode` = calendar mode, e.g. `week`, `month`, `events`, `agenda`  
`GooglecalendarEntriesMax` = number of entries  
`GooglecalendarStyle` = calendar style, e.g. `flexible`  
`GooglecalendarApiKey` = your Google API key  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/googlecalendar.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Google calendar](https://calendar.google.com/). The service provider collects personal data and uses cookies.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
