Emojiawesome 0.8.5
==================
Jede Menge Emoji.

![Bildschirmfoto](emojiawesome-screenshot.jpg?raw=true)

## Wie man ein Emoji hinzufügt

Füge `:shortcode:` zum Text einer Seite hinzu. Hier ist ein [Emoji-Spickzettel](http://www.emoji-cheat-sheet.com). 

Es ist auch möglich eine `[ea]`-Abkürzung zu erstellen oder HTML `<i class="ea ea-name"></i>` zu benutzen. Du kannst weitere Stile an den Namen anhängen, beispielsweise `ea-lg`, `ea-2x`, `ea-3x`, `ea-4x` und `ea-5x`.

## Beispiele

Emoji hinzufügen:

    :smile: 
    :heart: 
    :coffee:

Emoji hinzufügen, normale Größe:

    [ea ea-smile]
    [ea ea-heart]
    [ea ea-coffee]

Emoji hinzufügen, doppelte Größe:
    
    [ea ea-smile ea-2x]
    [ea ea-heart ea-2x]
    [ea ea-coffee ea-2x]

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`EmojiawesomeCdn` = URL der CDN mit Emoji-Bilder  
`EmojiawesomeToolbarButtons` = Symbolleistenschaltflächen für die [Edit-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/emojiawesome.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung verwendet [Twemoji v2.0.0](https://github.com/twitter/twemoji) von Twitter. Dateien werden von [cdnjs](https://cdnjs.com) geliefert.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
