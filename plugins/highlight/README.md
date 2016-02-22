Highlight plugin 0.6.1
======================
Highlighting for source code.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [highlight.php](highlight.php?raw=true) and [highlight.css](highlight.css?raw=true), copy them into your `system/plugins` folder.  
3. Create a new folder 'highlight' in your `system/plugins` folder.  
4. Download [highlight](highlight) folder, copy all files into your `system/plugins/highlight` folder.

To uninstall delete the plugin files.

How to highlight source code?
-----------------------------
Wrap your code blocks in \`\`\`, add an optional language identifier for highlighting. For line numbers add a colon separated number to the language. All languages have individual colors and can be defined via style sheet. There's a `highlight.css` which you can adjust or use in your own style sheets.

The plugin uses [GeSHi 1.0.8.12](https://github.com/GeSHi/geshi-1.0) by Benny Baumann, which supports about 200 programming languages. It's licensed under [GPLv2](http://opensource.org/licenses/GPL-2.0). The following languages are included: [C](https://en.wikipedia.org/wiki/C_(programming_language)) [CPP](https://en.wikipedia.org/wiki/C++), [CSS](https://en.wikipedia.org/wiki/CSS), [HTML](https://en.wikipedia.org/wiki/HTML), [JavaScript](https://en.wikipedia.org/wiki/JavaScript), [PHP](https://en.wikipedia.org/wiki/PHP), [Python](https://en.wikipedia.org/wiki/Python_(programming_language)), [Ruby](https://en.wikipedia.org/wiki/Ruby_(programming_language)). You can download more [languages](https://github.com/GeSHi/geshi-1.0/tree/master/src/geshi).

Example
-------
Highlighting of HTML code, default and with line numbers:

    ```html
    <body>
    <p>Hello world!</p>
    </body>
    ```
    
    ```html:1
    <body>
    <p>Hello world!</p>
    </body>
    ```