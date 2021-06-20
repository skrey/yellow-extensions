<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Install 0.8.49
==============
Installera en helt ny, underbar webbplats.

<p align="center"><img src="install-screenshot.png?raw=true" width="795" height="836" alt="Skärmdump"></p>

## Hur man installerar en webbplats

För att installera packa upp en fil och du är redo att gå. Installationsprogrammet kontrollerar först om alla krav har uppfyllts, till exempel om webbservern fungerar som den ska. Sedan låter installationsprogrammet skapa dig ett användarkonto och frågar vad du vill göra. När installationsprogrammet har gjort sitt arbete kommer det att ta bort sig själv. [Läs mer om installation](https://datenstrom.se/sv/yellow/help/how-to-get-started). 

## Hur man gör ett installationspaket

Ett installationspaket består av installationsprogrammet `install.php`, filen `install-languages.zip` och ett grundläggande ramverk för en webbplats. Du kan ladda ner [tillägg](https://github.com/datenstrom/yellow-extensions/tree/master/zip), byta namn på dem och kopiera dem till din `system/extensions` mapp. De erbjuds som ett alternativ under installationen.

## Exempel

Tilläggsinställningar för installationsprogrammet:

~~~
Extension: Install
Version: 0.8.49
Description: Install a brand new, shiny website.
Published: 2021-05-31 11:35:00
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/install
Developer: Datenstrom and various translators
system/extensions/install.php: install.php, create, optional
system/extensions/install-languages.zip: install-languages.zip, create, optional
system/extensions/install-blog.zip: install-blog.zip, create, optional
system/extensions/install-wiki.zip: install-wiki.zip, create, optional
content/1-home/page.md: page.md, create, optional
content/shared/page-error-404.md: page-error-404.md, create, optional
content/shared/page-new-default.md: page-new-default.md, create, optional
media/downloads/yellow.pdf: yellow.pdf, create, optional
~~~

## Inställningar

Tilläggsinställningarna finns i filen `system/extensions/update-current.ini`.

## Installation

Den här tillägget är del av ett installationspaket.

## Developer

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
