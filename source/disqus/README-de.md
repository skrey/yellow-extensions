Disqus 0.8.4
============
Disqus-Kommentare im Blog anzeigen.

<p align="center"><img src="disqus-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man Kommentare anzeigt

[Disqus](https://disqus.com) ist ein Kommentarservice für Webseiten. Um diese Erweiterung zu verwenden, öffnen die Datei `system/extensions/yellow-system.ini` und ändere `DisqusShortname: website`. Du kannst den Namen deiner Webseite im Disqus-Dashboard finden. Kommentare werden auf Blogseiten angezeigt. Um Kommentare auf anderen Seiten anzuzeigen, füge eine `[disqus]`-Abkürzung in die Seite hinzu.

## Beispiele

Inhaltsdatei mit Kommentare:

    ---
    Title: Beispielseite
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [disqus]

Layoutdatei mit Kommentare:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getContent() ?>
    <?php echo $this->yellow->page->getExtra("disqus") ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`DisqusShortname` = dein Disqus-Name  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/disqus.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

Diese Erweiterung verwendet [Disqus](https://disqus.com), ein Dienstanbieter der personenbezogene Daten sammelt.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
