<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Toc 0.8.7

Inhaltsverzeichnis anzeigen.

<p align="center"><img src="toc-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie zeigt man ein Inhaltsverzeichnis an

Erstelle eine `[toc]`-Abkürzung. Das Inhaltsverzeichnis wird automatisch aus den Überschriften erzeugt.

## Beispiele

Inhaltsdatei mit Inhaltsverzeichnis:

    ---
    Title: Beispielseite
    ---
    [toc]
    
    ## Erste Überschrift
    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    ## Zweite Überschrift
    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.
    
    ## Zusammenfassung
    
    Das ist eine Beispielseite.

Layoutdatei mit Inhaltsverzeichnis:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getExtra("toc") ?>
    <?php echo $this->yellow->page->getContent() ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/toc.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
