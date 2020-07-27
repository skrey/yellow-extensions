---
Title: Medien anpassen 
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

Du kannst die [Image-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/image) benutzen um Bilder einzubinden. Um ein neues Bild hinzuzufügen, kopierst du eine neue Datei ins `images`-Verzeichnis und erstellst eine `[image]`-Abkürzung. Die Bildformate GIF, JPG, PNG und SVG werden unterstützt. Hier ist ein Beispiel:


    [image photo.jpg]
    [image photo.jpg Beispiel]
    [image photo.jpg "Das ist ein Beispielbild"]

Bilder in unterschiedlichen Stilen:

    [image photo.jpg Beispiel left]
    [image photo.jpg Beispiel center]
    [image photo.jpg Beispiel right]

Bilder in unterschiedlichen Größen:

    [image photo.jpg Beispiel - 64 64]
    [image photo.jpg Beispiel - 320 200]
    [image photo.jpg Beispiel - 50%]

## Videos

Du kannst die [Youtube-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube) benutzen um Videos einzubinden.

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc left 200 112]
    [youtube fhs55HEl-Gc right 200 112]
