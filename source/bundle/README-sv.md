<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Bundle 0.8.27

Bundla webbplatsfiler.

<p align="center"><img src="bundle-screenshot.png?raw=true" width="795" height="512" alt="Skärmdump"></p>

## Hur man buntar webbplatsfiler

Detta tillägg buntar och minskar filer för bättre laddningstid. Din webbplats kan innehålla flera CSS- och JavaScript-filer. Som regel är de cachade i webbläsaren, men varje fil måste kontrolleras. Det är här file-bundlern kommer in. Den letar i HTML-headern efter inbäddade filer och ersätter dem med en enda fil för CSS och en för JavaScript.

Om du inte vill att en fil ska buntas kan du ange `data-bundle="exclude"` i HTML-headern.

## Exempel

Webbplats med obundna CSS- och JavaScript-filer:

```
<!DOCTYPE html>
<html>
<head>
<title>Example page</title>
<link rel="stylesheet" type="text/css" media="all" href="/media/extensions/gallery.css" />
<link rel="stylesheet" type="text/css" media="all" href="/media/extensions/twitter.css" />
<link rel="stylesheet" type="text/css" media="all" href="/media/themes/stockholm.css" />
<script type="text/javascript" defer="defer" src="/media/extensions/gallery-photoswipe.min.js"></script>
<script type="text/javascript" defer="defer" src="/media/extensions/gallery.js"></script>
<script type="text/javascript" defer="defer" src="/media/extensions/twitter.js"></script>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>
```

Webbplats med bundna CSS- och JavaScript-filer:

```
<!DOCTYPE html>
<html>
<head>
<title>Example page</title>
<link rel="stylesheet" type="text/css" media="all" href="/media/extensions/bundle-dfd1ef8a4c.min.css" />
<script type="text/javascript" defer="defer" src="/media/extensions/bundle-3808f805bc.min.js"></script>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>
```

Webbplats med bundna och obundna filer:

```
<!DOCTYPE html>
<html>
<head>
<title>Example page</title>
<link rel="stylesheet" type="text/css" media="all" href="/media/extensions/bundle-dfd1ef8a4c.min.css" />
<script type="text/javascript" defer="defer" src="/media/extensions/bundle-3808f805bc.min.js"></script>
<script type="text/javascript" defer="defer" data-bundle="exclude" src="/media/extensions/debug.js"></script>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>
```

## Installation

[Ladda ner tillägg](https://github.com/datenstrom/yellow-extensions/raw/master/zip/bundle.zip) och kopiera zip-fil till din `system/extensions` mapp. Högerklicka om du använder Safari.

Detta tilläg använder [Minify 1.3.68](https://github.com/matthiasmullie/minify) av Matthias Mullie.

## Utvecklare

Datenstrom. [Få hjälp](https://datenstrom.se/sv/yellow/help/).
