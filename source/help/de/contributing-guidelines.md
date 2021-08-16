---
Title: Richtlinien zum Mitmachen
---
Wie man mit uns zusammenarbeitet und nützliche Produkte macht.

## Wie man eine Frage stellt

* [Beginne eine neue Diskussion für jede Frage](https://github.com/datenstrom/yellow/discussions).
* Schreibe die Frage in den Titel, damit alle sehen können worum es geht.
* Beschreibe was du machen möchtest und welche Probleme du hast.
* Wähle eine Antwort aus, wenn deine Frage beantwortet wurde.

## Wie man einen Fehler meldet

* [Beginne eine neue Diskussion für jeden Fehler](https://github.com/datenstrom/yellow/discussions/categories/report-a-bug).
* Erkläre wie man den Fehler reproduzieren kann, überprüfe ob es jedesmal passiert.
* Füge viele Details hinzu, vor allem die Logdatei `system/extensions/yellow.log`.
* Teste ob alles funktioniert, wenn dein Problem behoben wurde.

## Wie man die Dokumentation verbessert

* [Beginne mit der Hilfe](https://github.com/datenstrom/yellow-extensions/tree/master/source/help/README-de.md) oder [schaue dir deine eigene Sprache an](https://github.com/datenstrom/yellow-extensions/tree/master/README-de.md#sprachen).
* Bearbeite die vorhandene Dateien, erstelle eine Übersetzung falls deine Sprache fehlt.
* Lade deine Dateien zu GitHub hoch, lass uns wissen falls du Hilfe brauchst.
* Überprüfe ob es für den Benutzer hilfreich ist und gebe praktische Beispiele. 

## Wie man eine Erweiterung entwickelt

* [Beginne mit einer Beispiel-Funktion](https://github.com/schulle4u/yellow-extension-helloworld), [einem Beispiel-Thema](https://github.com/schulle4u/yellow-extension-basic) oder der [API](api-for-developers).
* Stelle dir vor was der Benutzer machen will, strebe eine einfache Lösung an.
* Lade deine Erweiterungen zu GitHub hoch, lass uns wissen falls du Hilfe brauchst.
* Mache eine Ankündigung, zeige was du gemacht hast und frage nach Feedback

## Wie man Erfahrungen austauscht 

Unsere Community ist ein Ort um sich gegenseitig zu helfen. Wo man Fragen stellen und beantworten kann. Die meisten Antworten werden von Community-Mitgliedern, so wie du, bereitgestellt. Denke daran, dass andere Menschen möglicherweise nicht den selben Hintergrund haben wie du. Fühle dich niemals gezwungen, auf jemanden zu reagieren oder zu antworten. Du kannst jederzeit aus einem Gespräch aussteigen, wenn es nicht konstruktiv verläuft. Konzentriere dich auf diejenigen die Interesse zeigen und mit dir zusammenarbeiten wollen. Du findest uns auf [GitHub](https://github.com/datenstrom), [Discord](https://discord.gg/NYvTETsHS9), [Twitter](https://twitter.com/datendeveloper) oder [kontaktiere einen Menschen](https://datenstrom.se/de/contact/).

## Beispiele

Eine Frage auf Englisch stellen:

```
How to change the language of a website?

Hello, during installation I selected the wrong language. Now I want to 
change the language of my website to german. When I change the settings 
it doesn't work as expected. The error message says: Language 'german' 
does not exist! I checked that the german extension is installed.

Thanks for your help.
```

Einen Fehler auf Englisch melden:

```
Call to undefined function YellowToolbox::detectTimezone()

Hello, I updated my website in the web browser and now get the following 
error message: Call to undefined function YellowToolbox::detectTimezone() 
in /var/www/website/system/extensions/fika.php. You can reproduce the bug 
in a new installation, select website, install the fika extension. 
Here's my log file system/extensions/yellow.log:

2020-10-28 14:13:07 info Install Datenstrom Yellow 0.8.17, PHP 7.1.33, Apache 2.4.33, Mac
2020-10-28 14:13:07 info Install extension 'English 0.8.27'
2020-10-28 14:13:07 info Install extension 'German 0.8.27'
2020-10-28 14:13:07 info Install extension 'Swedish 0.8.27'
2020-10-28 14:18:11 info Install extension 'Fika 0.8.15'
2020-10-28 14:18:11 error Can't parse file 'system/extensions/fika.php'!

Let me know if you need more information. Thanks for investigating.
```

Eine Ankündigung auf Englisch machen:

```
New video extension

Hello, I made a new video extension. Its aim is to play videos without 
external services and without tracking cookies. The file formats MP4 and 
OGG are supported at the moment. I would like to know which file formats 
people use and what more I can do to make the extension better.

Let me know what you think. Any comments are welcome.
```

Hast du Fragen? [Hilfe finden](.). 
