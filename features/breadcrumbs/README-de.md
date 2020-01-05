Breadcrumbs 0.8.2
=================
Brotkrümel-Navigation.

<p align="center"><img src="breadcrumbs-screenshot.png?raw=true" alt="Bildschirmfoto"></p>

## Wie man diese Erweiterung installiert

1. [Datenstrom Yellow herunterladen und installieren](https://github.com/datenstrom/yellow/).
2. [Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/breadcrumbs.zip). Falls du Safari verwendest, rechtsklicke und wähle "Verknüpfte Datei laden unter".
3. Kopiere `breadcrumbs.zip` in dein `system/extensions`-Verzeichnis.

Zum Deinstallieren lösche einfach die [Erweiterungsdateien](extension.ini).

## Wie man Brotkrümel hinzufügt

Erstelle eine `[breadcrumbs]`-Abkürzung.

Die folgenden Argumente sind verfügbar, alle Argument sind optional:
 
`Separator` = Text der zwischen Brotkrümel angezeigt wird  
`Style` = Brotkrümel-Stil, z.B. `breadcrumbs`  

## Einstellungen

Die folgenden Einstellungen können in der Datei `system/settings/system.ini` vorgenommen werden:

`BreadcrumbsSeparator` = Text der zwischen Brotkrümel angezeigt wird  
`BreadcrumbsStyle` = Brotkrümel-Stil, z.B. `breadcrumbs`  

## Beispiele

Brotkrümel hinzufügen:

    [breadcrumbs]
    [breadcrumbs > breadcrumbs]
    [breadcrumbs / breadcrumbs]

Inhaltsdatei mit Brotkrümel:

    ---
    Title: Beispielseite
    ---
    [breadcrumbs]
        
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Layoutdatei mit Brotkrümel:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <?php $this->yellow->layout("sidebar") ?>
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getExtra("breadcrumbs") ?>
    <?php echo $this->yellow->page->getContent() ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

## Entwickler

Datenstrom. [Support finden](https://extensions.datenstrom.se/de/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>