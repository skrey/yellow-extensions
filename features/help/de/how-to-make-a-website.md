---
Title: Wie man eine Webseite erstellt
---
Lerne wie man eine eigene Webseite erstellt.

## Webseite installieren

1. [Datenstrom Yellow herunterladen und entpacken](https://github.com/datenstrom/yellow/archive/master.zip).
2. Kopiere alle Dateien auf deinen Webserver.
3. Öffne deine Webseite im Webbrowser und wähle "Webseite" aus.

Deine Webseite ist sofort erreichbar. Die Installation kommt mit zwei Seiten, "Startseite" und "Über". Das ist nur ein Beispiel um loszulegen, verändere alles so wie du willst. Man kann eine Webseite erstellen, indem man weitere Dateien und Verzeichnisse hinzufügt.

Falls Probleme auftreten, überprüfe bitte die [Servereinstellungen](server-configuration) oder frage den [Support](/de/help/).

## Webseiten schreiben

Lass uns einen Blick ins `content`-Verzeichnis werfen, hier sind alle Webseiten. Öffne die Datei `content/1-home/page.md`. Es werden Einstellungen und Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und weitere [Einstellungen](markdown-cheat-sheet#einstellungen) ändern. Darunter kannst du [Markdown](markdown-cheat-sheet) benutzen. Hier ist ein Beispiel:

```
---
Title: Startseite
---
Deine Webseite funktioniert!

[edit - Du kannst diese Seite bearbeiten] oder einen Texteditor benutzen.

Du kannst weitere Funktionen und Themen installieren.
[Mehr erfahren](https://extensions.datenstrom.se/de/help/).
```

Um eine neue Seite hinzuzufügen, erstellst du eine neue Datei im Home-Verzeichnis oder einem anderen `content`-Verzeichnis. Die [Navigation](adjusting-content) wird automatisch aus deinen `content`-Verzeichnissen erstellt. Hier ist ein weiteres Beispiel:

```
---
Title: Demo
---
[edit - Du kannst diese Seite bearbeiten]. Die Hilfe zeigt dir 
wie man kleine Webseiten, Blogs und Wikis erstellt.
[Mehr erfahren](https://extensions.datenstrom.se/de/help/).
```

Ein Bild hinzufügen:

```
---
Title: Demo
---
[image picture.jpg Beispiel rounded]

[edit - Du kannst diese Seite bearbeiten]. Die Hilfe zeigt dir 
wie man kleine Webseiten, Blogs und Wikis erstellt.
[Mehr erfahren](https://extensions.datenstrom.se/de/help/).
```

## Kopfzeile anpassen

Um die Kopfzeile anzupassen, erstelle die Datei `content/shared/header.md`. Du kannst auch eine `header.md` in einem `content`-Verzeichnis erstellen und sie wird nur auf Seiten im gleichen Verzeichnis angezeigt. Hier ist ein Beispiel:

```
---
Title: Header
Status: shared
---
Ich mag Markdown.
```

## Fußzeile anpassen

Um die Fußzeile anzupassen, öffne die Datei `content/shared/footer.md`. Du kannst auch eine `footer.md` in einem beliebigen `content`-Verzeichnis erstellen, die Fußzeile wird dann nur auf Seiten im gleichen Verzeichnis angezeigt. Hier ist ein Beispiel:

```
---
Title: Footer
Status: shared
---
[Erstellt mit Datenstrom Yellow](https://datenstrom.se/de/yellow/)
```

## Sidebar anzeigen

Um eine Sidebar anzuzeigen, erstelle die Datei `content/shared/sidebar.md`. Du kannst auch eine `sidebar.md` in einem `content`-Verzeichnis erstellen und sie wird nur auf Seiten im gleichen Verzeichnis angezeigt. Hier ist ein Beispiel:

```
---
Title: Sidebar
Status: shared
---
Links

* [Twitter](https://twitter.com/datenstromse)
* [GitHub](https://github.com/datenstrom)
* [Datenstrom](https://datenstrom.se/de/)
```

## Erweiterungen installieren

* [Eine Bildergalerie zur Webseite hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/features/gallery)
* [Eine Suche zur Webseite hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/features/search)
* [Eine Sitemap zur Webseite hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/features/sitemap)
* [Eine Kontaktseite zur Webseite hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/features/contact)
* [Eine statische Webseite erstellen](server-configuration#statische-webseite)
