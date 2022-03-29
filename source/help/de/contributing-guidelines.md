---
Title: Richtlinien zum Mitmachen
---
Erfahre wie du mit uns zusammenarbeitest und nützliche Produkte machst.

## Wie man eine Frage stellt

* [Beginne eine neue Diskussion für jede Frage](https://github.com/datenstrom/yellow/discussions/categories/ask-a-question).
* Schreibe deine Frage in den Titel, es ist das Erste was alle sehen.
* Beschreibe ausführlich was du machen möchtest und welche Probleme du hast.
* Wähle eine Antwort aus, wenn deine Frage beantwortet wurde.

## Wie man einen Fehler meldet

* [Beginne eine neue Diskussion für jeden Fehler](https://github.com/datenstrom/yellow/discussions/categories/report-a-bug).
* Erkläre wie man den Fehler reproduziert, überprüfe ob es jedesmal passiert.
* Füge viele Details hinzu, vor allem die Logdatei `system/extensions/yellow-website.log`.
* Teste ob alles funktioniert, wenn dein Problem behoben wurde.

## Wie man mit uns zusammenarbeitet

* Verbessere die vorhandenen Erweiterungen, [erstelle eine Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish/README-de.md).
* Überprüfe die vorhandene Dokumentation, [bearbeite die Hilfe](https://github.com/datenstrom/yellow-extensions/tree/master/source/help/README-de.md) oder [erstelle eine Übersetzung](https://github.com/datenstrom/yellow-extensions/tree/master/source/language/README-de.md).
* Werde aktiv in unserer Community, [helfe neuen Benutzern und beantworte Fragen](https://github.com/datenstrom/yellow/discussions/685).
* Mache eine Ankündigung und zeige was du gemacht hast. [Schau dir an was neu ist](https://github.com/datenstrom/yellow/discussions/categories/see-what-s-new).

## Wie man Erfahrungen austauscht

Unsere Community ist ein Ort um sich gegenseitig zu helfen. Wo man Fragen stellen und beantworten kann. Die meisten Antworten werden von Community-Mitgliedern, so wie du, bereitgestellt. Denke daran, dass andere Menschen möglicherweise nicht das gleiche Wissen haben. Du kannst jederzeit aus Diskussionen aussteigen. Erzwinge nichts. Konzentriere dich auf die Menschen die Interesse zeigen und mit dir zusammenarbeiten wollen. Du findest uns auf [Discord](https://discord.gg/NYvTETsHS9), [GitHub](https://github.com/datenstrom), [Twitter](https://twitter.com/datenstromnews) oder [kontaktiere einen Menschen](https://datenstrom.se/de/contact/).

## Beispiele

Eine Frage auf Englisch stellen:

```
How do I change the language of my website?

Hello, during installation I selected the wrong language. Now I want to 
change the language of my website to german. When I change the settings 
it doesn't work. I checked that the german extension is installed. 
Here are my settings in file `system/extensions/yellow-system.ini`:

Sitename: Datenstrom Yellow
Author: Datenstrom
Email: webmaster
Layout: default
Theme: stockholm
Language: german

Thanks for your help.
```

Einen Fehler auf Englisch melden:

```
Call to undefined function detectTimezone()

Hello, I get the error message: Call to undefined function detectTimezone() 
in /var/www/website/system/extensions/fika.php. You can reproduce the bug 
in a new installation, select small website, install the fika extension. 
Here's my log file `system/extensions/yellow-website.log`:

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

Hello, I made a new video extension. My goal is to play videos without 
external services. You can copy videos to your web server and play them 
from there. The file formats MP4 and OGG are supported at the moment. 
I would like to know which file formats people use.

Let me know what you think. Any comments are welcome.
```

Hast du Fragen? [Hilfe finden](.).
