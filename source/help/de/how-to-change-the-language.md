---
Title: Wie man die Sprache ändert
---
Wie man die Sprache seiner Webseite ändert.


## Einsprachen-Modus

Die Standardsprache wird in den [Systemeinstellungen](how-to-adjust-system#systemeinstellungen) festgelegt. Eine andere Sprache lässt sich in den [Einstellungen](how-to-adjust-system#einstellungen) ganz oben auf jeder Seite festlegen, zum Beispiel `Language: de`. 

Eine Deutsche Seite:

```
---
Title: Über uns
Language: de
---
Wo zusammenwächst, was zusammen gehört.
```

Eine Englische Seite:

```
---
Title: About us
Language: en
---
Birds of a feather flock together.
```

Eine Schwedische Seite:

```
---
Title: Om oss
Language: sv
---
Lika barn leka bäst.
```

## Mehrsprachen-Modus

Für mehrsprachige Webseiten kann man den Mehrsprachen-Modus benutzen. Öffne die Datei `system/extensions/yellow-system.ini` und ändere `CoreMultiLanguageMode: 1`. Gehe ins `content`-Verzeichnis und erstelle für jede Sprache ein eigenes Verzeichnis. Hier ist ein Beispiel:

```
├── content               
│   ├── 1-en              
│   │   ├── 1-home        = http://website/
│   │   └── shared    
│   ├── 2-de              
│   │   ├── 1-home        = http://website/de/
│   │   └── shared    
│   └── 3-sv              
│       ├── 1-home        = http://website/sv/
│       └── shared    
├── media                 
└── system                
```

Der erste Screenshot zeigt die Verzeichnisse `1-en`, `2-de` und `3-sv`. Das erzeugt die URLs `http://website/` `http://website/de/` `http://website/sv/` für Englisch, Deutsch und Schwedisch. Hier ist noch ein Beispiel:

```
├── content               
│   ├── 1-en              
│   │   ├── 1-home        = http://website/en/
│   │   └── shared    
│   ├── 2-de              
│   │   ├── 1-home        = http://website/de/
│   │   └── shared    
│   ├── 3-sv              
│   │   ├── 1-home        = http://website/sv/
│   │   └── shared    
│   └── default           = http://website/       
├── media                 
└── system                
```

Der zweite Screenshot zeigt die Verzeichnisse `1-en`, `2-de`, `3-sv` und `default`. Das erzeugt die URLs `http://website/en/` `http://website/de/` `http://website/sv/` und die Startseite `http://website/` welche automatisch die Sprache der Besucher ermittelt. 

Um eine Sprachauswahl anzuzeigen, kannst du eine Seite erstellen welche die vorhandenen Sprachen auflistet. Die Sprachauswahl kann man in die Navigation der Webseite einbauen. Das ermöglicht es Besuchern die Sprache auszuwählen.

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
