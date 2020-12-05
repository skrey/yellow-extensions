---
Title: Wie man eine kleine Webseite erstellt
---
Lerne wie man eine eigene Webseite erstellt.

[toc]

## Erste Schritte

1. [Datenstrom Yellow herunterladen](https://github.com/datenstrom/yellow/archive/master.zip).
2. Entpacke und kopiere alle Dateien auf deinen Webserver.
3. Öffne deine Webseite im Webbrowser.

Gebe deinen Namen, E-Mail, Kennwort ein und wähle "Webseite" aus. Deine Webseite ist sofort erreichbar. Die Installation kommt mit einer Seite. Das ist nur ein Beispiel um loszulegen. Verändere alles so wie du willst. Du kannst deine Webseite im Webbrowser oder auf deinem Computer bearbeiten. Falls Probleme bei der Installation auftreten, siehe [Fehlerbehebung](troubleshooting).

## Webseiten bearbeiten

Lass uns ausprobieren wie man Webseiten auf dem Computer bearbeitet. Schau dir das `content`-Verzeichnis an, dort befinden sich alle Webseiten. Öffne die Datei `content/1-home/page.md`. Es werden Einstellungen und der Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und weitere [Einstellungen](markdown-cheat-sheet#einstellungen) ändern. Darunter kannst du [Markdown](markdown-cheat-sheet) benutzen. Hier ist ein Beispiel:

```
---
Title: Startseite
TitleContent: Deine Webseite funktioniert!
---
[image photo.jpg Beispiel rounded]

[edit - Du kannst diese Seite bearbeiten]. 
Die Hilfe zeigt dir wie man kleine Webseiten, Blogs und Wikis erstellt. 
[Weitere Informationen](https://datenstrom.se/de/yellow/help/).
```

Um eine neue Seite hinzuzufügen, erstelle eine neue Datei im Home-Verzeichnis oder in einem anderen `content`-Verzeichnis:

```
---
Title: Beispielseite
---
Das ist eine Beispielseite.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
```

Du kannst Textformatierung hinzufügen:

```
---
Title: Beispielseite
---
Das ist eine Beispielseite.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.

Normal **Fettschrift** *Kursiv* ~~Durchgestrichen~~ `Code`
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

## Funktionen, Sprachen und Themen hinzufügen

Es gibt [Erweiterungen für deine Webseite](https://github.com/datenstrom/yellow-extensions/tree/master/README-de.md). Natürlich haben wir auch eine [API für Entwickler](api-for-developers).

## Verwandte Informationen

* [Wie man eine statische Webseite erstellt](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md)
* [Wie man eine Webseite im Webbrowser bearbeitet](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)
* [Wie man eine Webseite auf dem Computer bearbeitet](https://github.com/datenstrom/yellow-extensions/tree/master/source/core/README-de.md)
