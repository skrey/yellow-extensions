---
Title: Hur man anpassar medier
---
Alla medier finns i `media` mappen. Du kan lagra dina bilder och andra filer här. 

    ├── content
    ├── media
    │   ├── downloads
    │   ├── images
    │   └── thumbnails
    └── system

Mappen `downloads` innehåller filer att ladda ner. Mappen `images` är platsen för att lagra dina bilder. Mappen `thumbnails` innehåller miniatyrbilder. Du kan också skapa ytterligare mappar och organisera filer som du vill. I grund och botten kan alla mediefiler laddas ner från webbplatsen. 

## Bilder

Du kan använda [image-tilläget](https://github.com/datenstrom/yellow-extensions/tree/master/source/image/README-sv.md) för att bädda in bilder. Bildformaten GIF, JPG, PNG och SVG stöds. För att lägga till en ny bild, kopiera en ny fil till `images` mappen och skapa en `[image]` förkortning. Du kan också ladda upp bilder i [webbläsaren](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-sv.md), då händer detta automatiskt.

Lägga till en bild:

    [image photo.jpg]
    [image photo.jpg Exempel]
    [image photo.jpg "Detta är en exempelbild"]

Lägga till en bild, olika stilar:

    [image photo.jpg Exempel left]
    [image photo.jpg Exempel center]
    [image photo.jpg Exempel right]

Lägga till en bild, olika storlekar:

    [image photo.jpg Exempel right 50%]
    [image photo.jpg Exempel right 64 64]
    [image photo.jpg Exempel right 320 200]

Lägga till en bild, olika storlekar med standardstilen:

    [image photo.jpg Exempel - 50%]
    [image photo.jpg Exempel - 64 64]
    [image photo.jpg Exempel - 320 200]

## Videor

Du kan använda [Youtube-tillägget](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube/README-sv.md) för att bädda in videor: 

Bädda in en video:

    [youtube fhs55HEl-Gc]
    [youtube wNiyp89pTi0]
    [youtube OV5J6BfToSw]

Bädda in en video, olika storlekar:

    [youtube fhs55HEl-Gc right 50%]
    [youtube fhs55HEl-Gc right 200 112]
    [youtube fhs55HEl-Gc right 400 224]

Har du några frågor? [Få hjälp](.) och [engagera dig](contributing-guidelines).
