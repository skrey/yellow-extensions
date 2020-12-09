Highlight 0.8.11
================
Highlight source code.

<p align="center"><img src="highlight-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to highlight source code

Wrap your code blocks in \`\`\` and add a language identifier.

The following programming languages are included: C, CPP, CSS, HTML, JavaScript, JSON, PHP, Python, YAML. You can download more [language files](https://github.com/scrivo/highlight.php/tree/master/src/Highlight/languages), rename and copy them into your `system/extensions` folder.

## Examples

Highlighting of JavaScript code:

    ``` javascript
    var ready = function() 
    {
        console.log("Hello world");
        // Add more JavaScript code here
    }
    window.addEventListener('load', ready, false);
    ```

Highlighting of HTML code, without and with line number:
    
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

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`HighlightClass` = highlight class, e.g. `highlight`  
`HighlightLineNumber` = show line number, 1 or 0   
`HighlightAutodetectLanguages` = languages for automatic detection, comma separated  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/highlight.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [highlight.php 9.18.1.5](https://github.com/scrivo/highlight.php) by Ivan Sagalaev and Geert Bergman.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
