Bundle 0.8.13
=============
Webseiten-Dateien bündeln.

<p align="center"><img src="bundle-screenshot.png?raw=true" width="795" height="512" alt="Bildschirmfoto"></p>

## Wie man Webseiten-Dateien bündelt

Diese Erweiterung bündelt und verkleinert Dateien für eine bessere Ladezeit. Deine Webseite enthält möglicherweise mehrere CSS- und JavaScript-Dateien. In der Regel werden die im Browser zwischengespeichert, trotzdem muss jede Datei überprüft werden. Hier kommt der Dateibündler ins Spiel. Er sucht nach eingebundenen Dateien und ersetzt diese durch eine einzelne Datei für CSS und eine für JavaScript.

## Beispiele

Webseite mit ungebündelten CSS- und JavaScript-Dateien:

```
<!DOCTYPE html>
<html>
<head>
<title>Example page</title>
<link rel="stylesheet" type="text/css" media="all" href="/media/extensions/gallery.css" />
<link rel="stylesheet" type="text/css" media="all" href="/media/extensions/twitter.css" />
<link rel="stylesheet" type="text/css" media="all" href="/media/resources/stockholm.css" />
<script type="text/javascript" defer="defer" src="/media/extensions/gallery-photoswipe.min.js"></script>
<script type="text/javascript" defer="defer" src="/media/extensions/gallery.js"></script>
<script type="text/javascript" defer="defer" src="/media/extensions/twitter.js"></script>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>
```

Webseite mit gebündelten CSS- und JavaScript-Dateien:

```
<!DOCTYPE html>
<html>
<head>
<title>Example page</title>
<link rel="stylesheet" type="text/css" media="all" href="/media/resources/bundle-dfd1ef8a4c.min.css" />
<script type="text/javascript" defer="defer" src="/media/resources/bundle-3808f805bc.min.js"></script>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>
```

Webseite mit ausgeschlossener Datei:

```
<!DOCTYPE html>
<html>
<head>
<title>Example page</title>
<link rel="stylesheet" type="text/css" media="all" href="/media/resources/bundle-dfd1ef8a4c.min.css" />
<script type="text/javascript" defer="defer" src="/media/resources/bundle-3808f805bc.min.js"></script>
<script type="text/javascript" defer="defer" data-bundle="exclude" src="/media/extensions/debug.js"></script>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>
```

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/bundle.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung benutzt [Minify v1.3.62](https://github.com/matthiasmullie/minify) von Matthias Mullie.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
