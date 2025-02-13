<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Bundle 0.8.27

Bundle website files.

<p align="center"><img src="bundle-screenshot.png?raw=true" width="795" height="512" alt="Screenshot"></p>

## How to bundle website files

This extension bundles and minifies files for a better loading time. Your website may contain multiple CSS and JavaScript files. Usually these will be cached in the browser, but nevertheless each file has to be checked. This is where a file bundler comes in. It looks in the HTML header for included files and replaces them with one single file for CSS and one for JavaScript.

If you don't want that a file is bundled, specify `data-bundle="exclude"` in the HTML header.

## Examples

Website with unbundled CSS and JavaScript files:

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

Website with bundled CSS and JavaScript files:

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

Website with bundled and unbundled files:

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

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/bundle.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Minify 1.3.68](https://github.com/matthiasmullie/minify) by Matthias Mullie.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
