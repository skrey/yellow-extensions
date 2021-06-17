---
Title: Wie man den Inhalt anpasst
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

Markdown ist eine praktische Art um Webseiten zu bearbeiten. Probier es einfach mal aus. Öffne die Datei `content/1-home/page.md`. Es werden Einstellungen und Text der Seite angezeigt. Ganz oben auf der Seite kannst du `Title` und weitere [Einstellungen](how-to-adjust-system#einstellungen) ändern. Hier ist ein Beispiel:

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

Eine sortierte Liste erstellen:

    1. Punkt eins
    2. Punkt zwei
    3. Punkt drei

Eine Aufgabenliste erstellen:

    - [x] Punkt eins
    - [ ] Punkt zwei
    - [ ] Punkt drei

Eine Überschrift erstellen:

    # Überschrift 1
    ## Überschrift 2
    ### Überschrift 3

Zitate erstellen:

    > Zitat
    >> Zitat im Zitat
    >>> Zitat im Zitat im Zitat

Links erstellen:

    [Link zu Seite](/de/help/how-to-make-a-small-website)
    [Link zu Datei](/media/downloads/yellow.pdf)
    [Link zu Webseite](https://datenstrom.se/de/)

Ein Bild hinzufügen:

    [image photo.jpg]
    [image photo.jpg Beispiel]
    [image photo.jpg "Dies ist ein Beispielbild"]

Ein Bild hinzufügen, alternatives Format:

    ![image](photo.jpg)
    ![image](photo.jpg "Beispiel")
    ![image](photo.jpg "Dies ist ein Beispielbild")

Tabellen erstellen:

    | Kaffee     | Milch | Stärke  |
    |------------|-------|---------|
    | Espresso   | nein  | stark   |
    | Macchiato  | ja    | mittel  |
    | Cappuccino | ja    | schwach |

Fußnoten erstellen:

    Text mit einer Fußnote[^1] und noch weiteren Fußnoten.[^2] [^3]
    
    [^1]: Hier ist die erste Fußnote
    [^2]: Hier ist die zweite Fußnote
    [^3]: Hier ist die dritte Fußnote

Quellcode anzeigen:

    ```
    Quellcode wird unverändert angezeigt.
    function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    ```

Absätze erstellen:

    Hier ist der erste Absatz. Der Text kann über mehrere Zeilen gehen
    und kann durch eine Leerzeile vom nächsten Absatz getrennt werden.

    Hier ist der zweite Absatz.

Zeilenumbrüche erstellen:

    Hier ist die erste Zeile⋅⋅
    Hier ist die zweite Zeile⋅⋅
    Hier ist die dritte Zeile⋅⋅
    
    Leerzeichen am Zeilenende sind dargestellt durch Punkte (⋅)

Hinweise erstellen:

    ! Hier ist ein Hinweis mit Warnung
    
    !! Hier ist ein Hinweis mit Fehler
    
    !!! Hier ist ein Hinweis mit Tipp

CSS benutzen:

    ! {.class}
    ! Hier ist ein Hinweis mit benutzerdefinierter Klasse.
    ! Der Text kann über mehrere Zeilen gehen
    ! und Markdown-Formatierung beinhalten.

HTML benutzen:

    <strong>Text mit HTML</strong> kann wahlweise benutzt werden.
    <a href="https://datenstrom.se/de/" target="_blank">Link in einem neuen Tab öffnen</a>.

## Abkürzungen

Du kannst Abkürzungen benutzen um häufige Funktionen hinzuzufügen.

`[image photo.jpg Beispiel - 50%]` = [Miniaturbild hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/source/image/README-de.md)  
`[gallery photo.*jpg - 25%]` = [Bildergalerie mit Popup hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/source/gallery/README-de.md)  
`[slider photo.*jpg loop]` = [Bildergalerie mit Schieber hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/source/slider/README-de.md)  
`[youtube fhs55HEl-Gc]` = [Youtube-Video einbinden](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube/README-de.md)  
`[soundcloud 101175715]` = [Soundcloud-Audio einbinden](https://github.com/datenstrom/yellow-extensions/tree/master/source/soundcloud/README-de.md)  
`[twitter datendeveloper]` = [Twitter-Nachrichten einbinden](https://github.com/datenstrom/yellow-extensions/tree/master/source/twitter/README-de.md)  
`[instagram BISN9ngjV2-]` = [Instagram-Foto einbinden](https://github.com/datenstrom/yellow-extensions/tree/master/source/instagram/README-de.md)  
`[googlecalendar de.german#holiday]` = [Google-Kalender einbinden](https://github.com/datenstrom/yellow-extensions/tree/master/source/googlecalendar/README-de.md)  
`[googlemap Stockholm]` = [Google-Karte einbinden](https://github.com/datenstrom/yellow-extensions/tree/master/source/googlemap/README-de.md)  
`[blogchanges /blog/]` = [neuste Blogseiten anzeigen](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog/README-de.md)  
`[wikichanges /wiki/]` = [neuste Wikiseiten anzeigen](https://github.com/datenstrom/yellow-extensions/tree/master/source/wiki/README-de.md)  
`[fa fa-envelope-o]` = [Icons und Symbole anzeigen](https://github.com/datenstrom/yellow-extensions/tree/master/source/fontawesome/README-de.md)  
`[ea ea-smile]` = [Emoji und bunte Bilder anzeigen](https://github.com/datenstrom/yellow-extensions/tree/master/source/emojiawesome/README-de.md)  
`[yellow about]` = [Webseite-Version anzeigen](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)  
`[edit]` = [Webseite im Webbrowser bearbeiten](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)  
`[toc]` = [Inhaltsverzeichnis anzeigen](https://github.com/datenstrom/yellow-extensions/tree/master/source/toc/README-de.md)  
`[--more--]` = [Seitenumbruch hinzufügen](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog/README-de.md)  

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
