---
Title: Wie man eine kleine Webseite erstellt
---
Lerne wie man eine eigene Webseite erstellt.

## Webseite installieren

1. [Datenstrom Yellow herunterladen und entpacken](https://github.com/datenstrom/yellow/archive/master.zip).
2. Kopiere alle Dateien auf deinen Webserver.
3. Öffne deine Webseite im Webbrowser und wähle "Webseite" aus.

Deine Webseite ist sofort erreichbar. Die Installation kommt mit einer Startseite. Das ist nur ein Beispiel um loszulegen, verändere alles so wie du willst. Man kann eine Webseite erstellen, indem man weitere Dateien und Verzeichnisse hinzufügt.

Falls Probleme bei der Installation auftreten, siehe [Fehlerbehebung](troubleshooting).

## Webseiten schreiben

Lass uns einen Blick ins `content`-Verzeichnis werfen, hier sind alle Webseiten. Öffne die Datei `content/1-home/page.md`. Es werden Einstellungen und Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und weitere [Einstellungen](markdown-cheat-sheet#einstellungen) ändern. Darunter kannst du [Markdown](markdown-cheat-sheet) benutzen. Hier ist ein Beispiel:

```
---
Title: Startseite
---
Deine Webseite funktioniert!

[edit - Du kannst diese Seite bearbeiten] oder einen Texteditor benutzen.

Du kannst weitere Funktionen und Themen installieren.
[Mehr erfahren](https://datenstrom.se/de/yellow/help/).
```

Um eine neue Seite hinzuzufügen, erstellst du eine neue Datei im Home-Verzeichnis oder einem anderen `content`-Verzeichnis. Die [Navigation](adjusting-content) wird automatisch aus deinen `content`-Verzeichnissen erstellt. Hier ist ein weiteres Beispiel:

```
---
Title: Demo
---
[edit - Du kannst diese Seite bearbeiten]. Die Hilfe zeigt dir 
wie man kleine Webseiten, Blogs und Wikis erstellt.
[Mehr erfahren](https://datenstrom.se/de/yellow/help/).
```

Ein Bild hinzufügen:

```
---
Title: Demo
---
[image photo.jpg Beispiel rounded]

[edit - Du kannst diese Seite bearbeiten]. Die Hilfe zeigt dir 
wie man kleine Webseiten, Blogs und Wikis erstellt.
[Mehr erfahren](https://datenstrom.se/de/yellow/help/).
```

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

Es gibt [Erweiterungen](https://github.com/datenstrom/yellow-extensions) für deine Webseite. Hier sind einige Beispiele:

* [Wie man ein Bildergalerie hinzufügt](https://github.com/datenstrom/yellow-extensions/tree/master/source/gallery)
* [Wie man eine Suchfunktion benutzt](https://github.com/datenstrom/yellow-extensions/tree/master/source/search)
* [Wie man eine Sitemap benutzt](https://github.com/datenstrom/yellow-extensions/tree/master/source/sitemap)
* [Wie man eine Kontaktseite benutzt](https://github.com/datenstrom/yellow-extensions/tree/master/source/contact)
* [Wie man eine statische Webseite erstellt](https://github.com/datenstrom/yellow-extensions/tree/master/source/command)
