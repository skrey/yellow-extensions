---
Title: Inhalt anpassen
---
Alle Inhalte befinden sich im `content`-Verzeichnis. Hier bearbeitet man seine Webseite. 

    ├── content
    │   ├── 1-home
    │   └── shared
    ├── media
    └── system

Die `content`-Verzeichnisse stehen auf deiner Webseite zur Verfügung. In jedem Verzeichnis gibt es eine Datei mit Namen `page.md`. Man kann auch weitere Dateien und Verzeichnisse hinzufügen. Im Prinzip ist das, was du im Dateimanager siehst, die Webseite die du bekommst.

## Dateien und Verzeichnisse

Die Navigation wird automatisch aus deinen `content`-Verzeichnissen erstellt:

1. Verzeichnisse können ein numerisches Präfix haben, z.B. `1-home` oder `9-about`
2. Dateien können ein numerisches Präfix haben, z.B. `2020-04-07-blog-example.md`
3. Dateien und Verzeichnisse ohne Präfix haben keine besondere Bedeutung

Präfixe und Suffixe werden aus der Adresse entfernt, damit es besser aussieht. Zum Beispiel ist das Verzeichnis `content/9-about/` vorhanden als `http://website/about/`. Die Datei `content/9-about/privacy.md` wird zu `http://website/about/privacy`.

Es gibt zwei Ausnahmen. Das `home`-Verzeichnis darf keine Unterverzeichnisse besitzen, da es für die Startseite verantwortlich ist und vorhanden als `http://website/`. Das `shared`-Verzeichnis darf nur in andere Seiten eingebunden werden, es ist nicht auf der Webseite vorhanden.

## Markdown

Du kannst [Markdown](markdown-cheat-sheet) benutzen um Webseiten zu bearbeiten. Probier es einfach mal aus. Öffne die Datei `content/1-home/page.md`. Es werden Einstellungen und Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und weitere [Einstellungen](markdown-cheat-sheet#einstellungen) ändern. Hier ist ein Beispiel:

    ---
    Title: Startseite
    TitleContent: Deine Webseite funktioniert!
    ---
    [image photo.jpg Beispiel rounded]
    
    [edit - Du kannst diese Seite bearbeiten]. 
    Die Hilfe zeigt dir wie man kleine Webseiten, Blogs und Wikis erstellt. 
    [Weitere Informationen](https://datenstrom.se/de/yellow/help/).

Text formatieren:

    Normal **Fettschrift** *Kursiv* ~~Durchgestrichen~~ `Code`

Eine Liste erstellen:

    * Punkt eins
    * Punkt zwei
    * Punkt drei
