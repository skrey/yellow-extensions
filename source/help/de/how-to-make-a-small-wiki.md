---
Title: Wie man ein kleines Wiki erstellt
---
Lerne wie man ein eigenes Wiki erstellt.

## Installation

1. [Datenstrom Yellow herunterladen](https://github.com/datenstrom/yellow/archive/master.zip).
2. Entpacke und kopiere alle Dateien auf deinen Webserver.
3. Öffne deine Webseite im Webbrowser und wähle "Wiki" aus.

Dein Wiki ist sofort erreichbar. Die Installation kommt mit zwei Seiten, "Startseite" und "Wiki". Das ist nur ein Beispiel um loszulegen, verändere alles so wie du willst. Du kannst die Startseite löschen, wenn du das Wiki auf der Startseite anzeigen willst.

Falls Probleme bei der Installation auftreten, siehe [Fehlerbehebung](troubleshooting).

## Wikiseiten schreiben

Lass uns einen Blick ins `content`-Verzeichnis werfen, dort befindet sich das Wikiverzeichnis mit allen Wikiseiten. Öffne die Datei `wiki-page.md`. Es werden Einstellungen und Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und andere [Einstellungen](markdown-cheat-sheet#einstellungen) ändern. Darunter kannst du [Markdown](markdown-cheat-sheet) benutzen. Hier ist ein Beispiel:

```
---
Title: Wikiseite
Layout: wiki
Tag: Beispiel
---
Das ist eine Beispiel-Wikiseite.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 
```

Um eine neue Wikiseite hinzuzufügen, erstellst du eine neue Datei im Wikiverzeichnis. Ganz oben auf der Seite solltest du `Title` und weitere Einstellungen ändern. Mit `Tag` kannst du ähnliche Seiten gruppieren. Hier ein weiteres Beispiel:

```
---
Title: Kaffee ist gut für dich
Layout: wiki
Tag: Beispiel, Kaffee
---
Kaffee ist ein Getränk aus gerösteten Bohnen der Kaffeepflanze.

1. Verwende frischen Kaffee. Kaffeebohnen fangen nach dem Rösten und Mahlen 
   sofort an, an Qualität zu verlieren. Den besten Kaffee erhält man, wenn 
   man die frisch gemahlenen Bohnen sofort weiterverarbeitet.
2. Eine Tasse Kaffee zubereiten. Kaffee kann durch vielerlei Methoden und mit 
   verschiedenen Zusätzen wie Milch und Zucker zubereitet werden. Es gibt 
   Espresso, Filterkaffee, Kaffee aus der französischen Presse, Italienischer 
   Mokka, Türkischen Kaffee und vieles mehr. Finde deinen Lieblingsgeschmack.
3. Genieße.
```

Ein Video hinzufügen mit der [Youtube-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube):

```
---
Title: Kaffee ist gut für dich
Layout: wiki
Tag: Beispiel, Kaffee, Video
---
Kaffee ist ein Getränk aus gerösteten Bohnen der Kaffeepflanze.

1. Verwende frischen Kaffee. Kaffeebohnen fangen nach dem Rösten und Mahlen 
   sofort an, an Qualität zu verlieren. Den besten Kaffee erhält man, wenn 
   man die frisch gemahlenen Bohnen sofort weiterverarbeitet.
2. Eine Tasse Kaffee zubereiten. Kaffee kann durch vielerlei Methoden und mit 
   verschiedenen Zusätzen wie Milch und Zucker zubereitet werden. Es gibt 
   Espresso, Filterkaffee, Kaffee aus der französischen Presse, Italienischer 
   Mokka, Türkischen Kaffee und vieles mehr. Finde deinen Lieblingsgeschmack.
3. Genieße.

[youtube SUpY1BT9Xf4]
```

Verwende [Abkürzungen](https://github.com/datenstrom/yellow-extensions/tree/master/source/wiki#how-to-show-wiki-information), um Informationen über das Wiki anzuzeigen.

## Kopfzeile anzeigen

Um eine Kopfzeile anzuzeigen, erstelle die Datei `content/shared/header.md`. Hier ist ein Beispiel:

```
---
Title: Header
Status: shared
---
Ich mag Markdown.
```

## Fußzeile anzeigen

Um eine Fußzeile anzuzeigen, erstelle die Datei `content/shared/footer.md`. Hier ist ein Beispiel:

```
---
Title: Footer
Status: shared
---
[Erstellt mit Datenstrom Yellow](https://datenstrom.se/de/yellow/)
```

## Erweiterungen finden

Es gibt [Erweiterungen](https://github.com/datenstrom/yellow-extensions) für dein Wiki. Hier sind einige Beispiele:

* [Wie man ein Inhaltsverzeichnis macht](https://github.com/datenstrom/yellow-extensions/tree/master/source/toc)
* [Wie man eine Suchfunktion benutzt](https://github.com/datenstrom/yellow-extensions/tree/master/source/search)
* [Wie man eine Kontaktseite benutzt](https://github.com/datenstrom/yellow-extensions/tree/master/source/contact)
* [Wie man eine Entwurfseite macht](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft)
* [Wie man eine statische Webseite erstellt](https://github.com/datenstrom/yellow-extensions/tree/master/source/command)

