<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Install 0.8.50
==============
Installiere eine brandneue, wunderbare Website.

<p align="center"><img src="install-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Webseite installiert

Zum Installieren entpackt man eine Datei und los geht's. Das Installationsprogramm überprüft zuerst ob alle Anforderungen erfüllt sind, zum Beispiel ob der Webserver richtig funktioniert. Dann bietet das Installationsprogramm an ein Benutzerkonto anzulegen und fragt was man machen möchte. Nachdem das Installationsprogramm seine Arbeit erledigt hat löscht es sich von selbst. [Weitere Informationen zur Installation](https://datenstrom.se/de/yellow/help/how-to-get-started).

## Wie man ein Installationspaket erstellt

Ein Installationspaket besteht aus dem Installationsprogramm `install.php`, der Datei `install-languages.zip` und dem Grundgerüst einer Webseite. Im Standard-Installationspaket sind ausserdem das Blog und das Wiki enthalten. Du kannst [Erweiterungen](https://github.com/datenstrom/yellow-extensions/tree/master/zip) herunterladen, umbenennen und in dein `system/extensions`-Verzeichnis kopieren. Sie werden dann bei der Installation zur Auswahl angeboten.

## Beispiele

Erweiterungseinstellungen für das Installationsprogramm:

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
content/shared/page-new-default.md: page-new-default.md, create, optional
content/shared/page-error-404.md: page-error-404.md, create, optional
media/downloads/yellow.pdf: yellow.pdf, create, optional
~~~

## Einstellungen

Die Erweiterungseinstellungen findet man in der Datei `system/extensions/update-current.ini`.

Die folgenden Dateien werden bei der Installation angepasst:

`content/1-home/page.md` = Inhaltsdatei für die Startseite  
`content/shared/page-new-default.md` = Inhaltsdatei für neue Seite  
`content/shared/page-new-blog.md` = Inhaltsdatei für neue Blogseite  
`content/shared/page-new-wiki.md` = Inhaltsdatei für neue Wikiseite  
`content/shared/page-error-404.md` = Inhaltsdatei für Fehlerseite  
`system/extensions/yellow-system.ini` = Datei mit Systemeinstellungen  
`system/extensions/yellow-user.ini` = Datei mit Benutzereinstellungen  
`system/extensions/yellow-language.ini` = Datei mit Spracheinstellungen  

## Installation

Diese Erweiterung ist Teil des [Standard-Installationspaketes](https://github.com/datenstrom/yellow).

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
