<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Googlecalendar 0.8.9

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

Embedding a calendar, different calendars:

    [googlecalendar en.uk#holiday]
    [googlecalendar de.german#holiday]
    [googlecalendar sv.swedish#holiday]

Embedding a calendar, multiple calendars together:

    [googlecalendar "en.uk#holiday, de.german#holiday"]
    [googlecalendar "en.uk#holiday, de.german#holiday, sv.swedish#holiday"]
    [googlecalendar "en.uk#holiday#0044AA, de.german#holiday#AA0000, sv.swedish#holiday#0000AA"]

Embedding a calendar, different modes:

    [googlecalendar en.uk#holiday month]
    [googlecalendar en.uk#holiday events]
    [googlecalendar en.uk#holiday agenda]

Embedding a calendar, different dates:

    [googlecalendar en.uk#holiday month 2021-06-01]
    [googlecalendar en.uk#holiday month 2021-09-01]
    [googlecalendar en.uk#holiday month 2023-12-24]

Embedding a calendar, different sizes:

    [googlecalendar en.uk#holiday month 2021-06-01 right 50%]
    [googlecalendar en.uk#holiday month 2021-06-01 right 240 240]
    [googlecalendar en.uk#holiday month 2021-06-01 right 480 480]

Embedding a calendar, different sizes for the current date:

    [googlecalendar en.uk#holiday month - right 50%]
    [googlecalendar en.uk#holiday month - right 240 240]
    [googlecalendar en.uk#holiday month - right 480 480]

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
