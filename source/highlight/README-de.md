Highlight 0.8.7
===============
Quellcode hervorheben.

<p align="center"><img src="highlight-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man Quellcode hervorhebt

Wickle Codeblöcke in \`\`\` ein und fügen eine Sprachidentifizierung hinzu.

Die folgenden Programmiersprachen sind enthalten: C, CPP, CSS, HTML, JavaScript, JSON, PHP, Python, YAML. Du kannst weitere [Sprachdateien](https://github.com/scrivo/highlight.php/tree/master/Highlight/languages) herunterladen, umbenennen und in dein `system/extensions`-Verzeichnis kopieren.

## Beispiele

Hervorhebung von JavaScript-Quellcode:

    ``` javascript
    var ready = function() 
    {
        console.log("Hello world");
        // Add more JavaScript code here
    }
    window.addEventListener('load', ready, false);
    ```

Hervorhebung von HTML-Quellcode, ohne und mit Zeilennummer:
    
    ``` html
    <body>
    <p>Hello world!</p>
    </body>
    ```

    ``` html {.with-line-number}
    <body>
    <p>Hello world!</p>
    </body>
    ```

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`HighlightClass` = Hervorhebungs-Klasse, z.B. `highlight`  
`HighlightLineNumber` = Zeilennummer anzeigen, 1 oder 0   
`HighlightAutodetectLanguages` = Sprachen zur automatischen Erkennung, durch Komma getrennt  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/highlight.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung benutzt [highlight.php 9.15.10](https://github.com/scrivo/highlight.php) von Ivan Sagalaev und Geert Bergman.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
