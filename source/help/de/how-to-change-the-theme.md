---
Title: Wie man das Thema ändert
---
Wie man das Aussehen seiner Webseite ändert.

## CSS anpassen

Um das [CSS](https://www.w3schools.com/css/) deiner Webseite anzupassen, ändere das Thema. Das Standardthema wird in den [Systemeinstellungen](adjusting-system#systemeinstellungen) festgelegt. Ein anderes Thema lässt sich in den [Einstellungen](markdown-cheat-sheet#einstellungen) ganz oben auf jeder Seite festlegen, zum Beispiel `Theme: custom`. 

Hier ist eine Beispiel-Datei `system/themes/custom.css`:

``` css
.page {
    background-color: #fc4;
    color: #fff;
    text-align:center; 
}
```

## JavaScript anpassen

Um deine Webseiten noch weiter anzupassen, kannst du [JavaScript](https://www.w3schools.com/js/) benutzen. Damit kannst du dynamische Funktionen für Webseiten erstellen. Du kannst JavaScript in eine Datei speichern die einen ähnlichen Namen hat wie die CSS-Datei. Sie wird dann automatisch eingebunden.

Hier ist eine Beispiel-Datei `system/themes/custom.js`:

``` javascript
var ready = function() {
	console.log("Hello world");
	// Add more JavaScript code here
}
window.addEventListener("load", ready, false);
```

## Bilder und Dateien anpassen

Im `system/themes`-Verzeichnis befinden sich alle Themendateien. Hier speichert man Bilder und Schriftarten, die in Themen verwendet werden. Jede Webseite hat ein kleines Icon, auch Favicon genannt. Der Webbrowser zeigt dieses Icon beispielsweise in der Adresszeile an.

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
