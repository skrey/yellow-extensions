---
Title: Wie man ein kleines Wiki erstellt
---
Lerne wie man ein eigenes Wiki erstellt.

[toc]

## Erste Schritte

1. [Datenstrom Yellow herunterladen](https://github.com/datenstrom/yellow/archive/master.zip).
2. Entpacke und kopiere alle Dateien auf deinen Webserver.
3. Öffne deine Webseite im Webbrowser.

Gebe deinen Namen, E-Mail, Kennwort ein und wähle "Wiki" aus. Dein Wiki ist sofort erreichbar. Die Installation kommt mit zwei Seiten, "Startseite" und "Wiki". Das ist nur ein Beispiel um loszulegen. Verändere alles so wie du willst. Du kannst dein Wiki im Webbrowser oder auf deinem Computer bearbeiten. Du kannst die Startseite löschen, wenn du das Wiki auf der Startseite anzeigen willst. Falls Probleme bei der Installation auftreten, siehe [Fehlerbehebung](troubleshooting).

## Wikiseiten schreiben

Lass uns ausprobieren wie man Wikiseiten auf dem Computer bearbeitet. Schau dir das `content`-Verzeichnis an, dort befindet sich das Wikiverzeichnis mit allen Wikiseiten. Öffne die Datei `wiki-page.md`. Es werden Einstellungen und der Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und andere [Einstellungen](markdown-cheat-sheet#einstellungen) ändern. Darunter kannst du [Markdown](markdown-cheat-sheet) benutzen. Hier ist ein Beispiel:

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

Um eine neue Wikiseite hinzuzufügen, erstellst du eine neue Datei im Wikiverzeichnis. Ganz oben auf der Seite solltest du `Title` und weitere Einstellungen ändern. Mit `Tag` kannst du ähnliche Seiten gruppieren. Hier ist ein weiteres Beispiel:

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

Du kannst ein Video hinzufügen mit der [Youtube-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube/README-de.md):

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

## Kopfzeile und Fußzeile anzeigen

Um eine Kopfzeile anzuzeigen, erstelle die Datei `content/shared/header.md`. Hier ist ein Beispiel:

```
---
Title: Header
Status: shared
---
Webseite ist im Aufbau.
```

Um eine Fußzeile anzuzeigen, erstelle die Datei `content/shared/footer.md`. Hier ist ein Beispiel:

```
---
Title: Footer
Status: shared
---
[Erstellt mit Datenstrom Yellow](https://datenstrom.se/de/yellow/).
```

## Funktionen, Themen und Sprachen hinzufügen

Es gibt [Erweiterungen für deine Webseite](https://github.com/datenstrom/yellow-extensions/tree/master/README-de.md) und eine [API für Entwickler](api-for-developers).

## Verwandte Informationen

* [Wie man eine Webseite im Webbrowser bearbeitet](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)
* [Wie man eine Webseite auf dem Computer bearbeitet](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md)
* [Wie man ein Wiki benutzt](https://github.com/datenstrom/yellow-extensions/tree/master/source/wiki/README-de.md)

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
