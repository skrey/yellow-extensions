Breadcrumb 0.8.6
================
Brotkrümel-Navigation.

<p align="center"><img src="breadcrumb-screenshot.png?raw=true" width="795" height="836" alt="Bildschirmfoto"></p>

## Wie man eine Navigation hinzufügt

Erstelle eine `[breadcrumb]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle Argument sind optional:
 
`Separator` = Text der zwischen Elementen angezeigt wird  
`Style` = Brotkrümel-Stil, z.B. `breadcrumb`  

## Beispiele

Navigation hinzufügen:

    [breadcrumb]
    [breadcrumb > breadcrumb]
    [breadcrumb / breadcrumb]

Inhaltsdatei mit Brotkrümel:

    ---
    Title: Beispielseite
    ---
    [breadcrumb]
        
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Layoutdatei mit Brotkrümel:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getExtra("breadcrumb") ?>
    <?php echo $this->yellow->page->getContent() ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`BreadcrumbSeparator` = Text der zwischen Elementen angezeigt wird  
`BreadcrumbStyle` = Brotkrümel-Stil, z.B. `breadcrumb`  
`BreadcrumbPagesMin` = Anzahl der Seiten um Brotkrümel-Navigation anzuzeigen  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/breadcrumb.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>