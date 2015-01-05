Syntaxhighlight plugin 0.1.10
=============================
Syntax highlighting for source code.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [syntaxhighlight.css](syntaxhighlight.css?raw=true) and [syntaxhighlight.php](syntaxhighlight.php?raw=true), copy both files into your `system/plugins` folder.  
3. Create a new folder 'syntaxhighlight' in your `system/plugins` folder.  
4. Download [syntaxhighlight](syntaxhighlight) folder, copy all files into your `system/plugins/syntaxhighlight` folder.

To uninstall delete the plugin files and folder.

How to highlight source code?
-----------------------------
Wrap your code blocks in \`\`\`, add an optional language identifier for syntax highlighting. For line numbers add a colon separated number to the language. All languages have individual colors and can be defined via style sheet. There's a `syntaxhighlight.css` which you can adjust or use in your own style sheets.

The plugin uses [GeSHi 1.0.8.11](https://github.com/GeSHi/geshi-1.0) by Benny Baumann, which supports about 200 programming languages. It's licensed under [GPLv2](http://opensource.org/licenses/GPL-2.0). The following languages are included: [CPP](http://en.wikipedia.org/wiki/C++), [CSS](http://en.wikipedia.org/wiki/CSS), [HTML](http://en.wikipedia.org/wiki/HTML), [JavaScript](http://en.wikipedia.org/wiki/JavaScript), [PHP](http://en.wikipedia.org/wiki/PHP). You can download more [languages](https://github.com/GeSHi/geshi-1.0/tree/master/src/geshi).

Example
-------
Syntax highlighting of HTML code, default and with line numbers:

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