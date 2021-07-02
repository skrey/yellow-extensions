---
Title: Wie man die Medien anpasst
---
Alle Medien befinden sich im `media`-Verzeichnis. Hier speichert man Bilder und andere Dateien.

    ├── content
    ├── media
    │   ├── downloads
    │   ├── images
    │   └── thumbnails
    └── system

Das `downloads`-Verzeichnis enthält Dateien zum Herunterladen. Das `images`-Verzeichnis ist zum Speichern von Bildern gedacht. Das `thumbnails`-Verzeichnis enthält Miniaturbilder. Man kann auch weitere Verzeichnisse hinzufügen und Dateien so organisieren wie man will. Im Grunde genommen kann jede Mediendatei von der Webseite heruntergeladen werden. 

## Bilder

Du kannst die [Image-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/image/README-de.md) benutzen um Bilder einzubinden. Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Um ein neues Bild hinzuzufügen, kopierst du eine neue Datei ins `images`-Verzeichnis und erstellst eine `[image]`-Abkürzung. Du kannst Bilder auch im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md) hochladen, dann geschieht das automatisch. 

Bild hinzufügen:

    [image photo.jpg]
    [image photo.jpg Beispiel]
    [image photo.jpg "Das ist ein Beispielbild"]

Bild hinzufügen, unterschiedliche Stile:

    [image photo.jpg Beispiel left]
    [image photo.jpg Beispiel center]
    [image photo.jpg Beispiel right]

Bild hinzufügen, unterschiedliche Größen:

    [image photo.jpg Beispiel right 50%]
    [image photo.jpg Beispiel right 64 64]
    [image photo.jpg Beispiel right 320 200]

Bild hinzufügen, unterschiedliche Größen mit dem Standardstil:

    [image photo.jpg Beispiel - 50%]
    [image photo.jpg Beispiel - 64 64]
    [image photo.jpg Beispiel - 320 200]

## Videos

Du kannst die [Youtube-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube/README-de.md) benutzen um Videos einzubinden.

Video einbinden:

    [youtube fhs55HEl-Gc]
    [youtube wNiyp89pTi0]
    [youtube OV5J6BfToSw]

Video einbinden, unterschiedliche Größen:

    [youtube fhs55HEl-Gc right 50%]
    [youtube fhs55HEl-Gc right 200 112]
    [youtube fhs55HEl-Gc right 400 224]

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
