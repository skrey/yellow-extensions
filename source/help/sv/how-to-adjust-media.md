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

Du kan använda [image-tilläget](https://github.com/datenstrom/yellow-extensions/tree/master/source/image/README-sv.md) för att bädda in bilder. För att lägga till en ny bild, kopiera en ny fil till `images` mappen och skapa en `[image]` förkortning. Bildformaten GIF, JPG, PNG och SVG stöds. Här är ett exempel:

    [image photo.jpg]
    [image photo.jpg Exempel]
    [image photo.jpg "Detta är en exempelbild"]

Bilder i olika stilar:

    [image photo.jpg Exempel left]
    [image photo.jpg Exempel center]
    [image photo.jpg Exempel right]

Bilder i olika storlekar:

    [image photo.jpg Exempel - 64 64]
    [image photo.jpg Exempel - 320 200]
    [image photo.jpg Exempel - 50%]

## Videor

Du kan använda [Youtube-tillägget](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube) för att bädda in videor: 

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc left 200 112]
    [youtube fhs55HEl-Gc right 200 112]

Har du några frågor? [Få hjälp](.) och [engagera dig](contributing-guidelines).
