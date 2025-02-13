<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Core 0.8.82

Kernfunktionalität der Webseite.

<p align="center"><img src="core-screenshot.png?raw=true" width="795" height="520" alt="Bildschirmfoto"></p>

## Wie man eine Webseite auf dem Computer bearbeitet

Du kannst alles im Dateimanager auf deinem Computer ändern. Das `content`-Verzeichnis enthält die Inhaltsdateien der Webseite. Hier bearbeitet man seine Webseite. Das `media`-Verzeichnis enthält die Mediendateien der Webseite. Hier speichert man seine Bilder und Dateien. Das `system`-Verzeichnis enthält die Systemdateien der Webseite. Hier passt man installierte Erweiterungen und Konfigurationsdateien an.

## Wie man eine Seite versteckt

Ganz oben auf einer Seite kannst du `Status: unlisted` in den [Seiteneinstellungen](#einstellungen-seite) festlegen. Die Seite ist dann in der Navigation und den Suchergebnissen nicht mehr sichtbar. Du kannst zwischen verschiedenen [Statuswerten](#einstellungen-status) wählen, um zu bestimmen wer eine Seite sehen und darauf zugreifen kann.

## Wie man eine Seite weiterleitet

Ganz oben auf einer Seite kannst du `Redirect` in den [Seiteneinstellungen](#einstellungen-seite) festlegen. Die Seite wird dann zu einer anderen Seite oder URL weitergeleitet. Du kannst die Seite weiterhin im [Webbrowser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md) und auf deinem Computer bearbeiten.

## Wie man eine Seite anpasst

Ganz oben auf einer Seite kannst du `Layout` in den [Seiteneinstellungen](#einstellungen-seite) festlegen. Alle Layoutdateien befinden sich im `system/layouts`-Verzeichnis. Den HTML-Code einer Seite kannst du in der Layoutdatei anpassen. Schau dir die Layoutdatei für die Standard-Seite an und erstelle bei Bedarf deine eigenen Layoutdateien. Deine Änderungen werden bei der Aktualisierung der Webseite nicht überschrieben.

## Beispiele

Inhaltsdatei mit normaler Seite:

    ---
    Title: Normale Seite
    ---
    Das ist eine Beispielseite.

Inhaltsdatei mit ungelisteter Seite:

    ---
    Title: Ungelistete Seite
    Status: unlisted
    ---
    Diese Seite ist in der Navigation und den Suchergebnissen nicht sichtbar.

Inhaltsdatei mit Weiterleitung:

    ---
    Title: Seite weiterleiten
    Redirect: https://datenstrom.se/de/yellow/
    ---
    Diese Seite wird zu einer anderen Seite weitergeleitet.

Inhaltsdatei für Fehlerseite:

    ---
    Title: Datei nicht gefunden
    Layout: error
    ---
    Die angeforderte Datei wurde nicht gefunden. Oh nein...

Layoutdatei für Standard-Seite:

    <?php $this->yellow->layout("header") ?>
    <div class="content">
    <div class="main" role="main">
    <h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
    <?php echo $this->yellow->page->getContent() ?>
    </div>
    </div>
    <?php $this->yellow->layout("footer") ?>

## Einstellungen

<a id="einstellungen-system"></a>Die folgenden Einstellungen können in der Datei `system/extensions/yellow-system.ini` vorgenommen werden:

`Sitename` = Name der Webseite  
`Author` = Name des Webmasters  
`Email` = E-Mail des Webmasters  
`Layout` = Standard-Layout  
`Theme` = Standard-Thema  
`Language` = Standard-Sprache  
`Parser` = Standard-Seitenparser  
`Status` = Standard-Seitenstatus, [unterstützte Statuswerte](#einstellungen-status)  
`CoreServerUrl` = URL der Webseite, bei Verwendung als Content-Management-System  
`CoreStaticUrl` = URL der Webseite, bei Verwendung als Static-Site-Generator  
`CoreTimezone` = Zeitzone der Webseite, [unterstützte Zeitzonen](https://www.php.net/manual/de/timezones.php)  
`CoreContentExtension` = Dateiformat für den Inhalt  
`CoreContentDefaultFile` = Inhaltsdatei für Verzeichnisse  
`CoreContentErrorFile` =  Inhaltsdatei für Fehlerseite  
`CoreUserFile` = Datei mit Benutzereinstellungen  
`CoreLanguageFile` = Datei mit Spracheinstellungen  
`CoreWebsiteFile` = Logdatei der Webseite  
`CoreMediaLocation` = Ort für Mediendateien  
`CoreDownloadLocation` = Ort für Dateien zum Herunterladen  
`CoreImageLocation` = Ort für Bilder  
`CoreThumbnailLocation` = Ort für Miniaturbilder  
`CoreExtensionLocation` = Ort für virtuell zugeordnete Erweiterungsdateien  
`CoreThemeLocation` = Ort für virtuell zugeordnete Themendateien  
`CoreMultiLanguageMode` = Mehrsprachen-Modus aktivieren, 1 oder 0  
`CoreDebugMode` = Debug-Modus aktivieren, 0 bis 3  

<a id="einstellungen-seite"></a>Die folgenden Einstellungen können ganz oben auf einer Seite vorgenommen werden:

`Title` = Seitentitel  
`TitleContent` = Seitentitel der im Inhalt angezeigt wird  
`TitleNavigation` = Seitentitel der in der Navigation angezeigt wird  
`TitleHeader` = Seitentitel der im Webbrowser angezeigt wird  
`TitleSlug` = Seitentitel zum Speichern der Seite  
`Description` = Beschreibung der Seite  
`Author` = Autoren der Seite, durch Komma getrennt  
`Email` = E-Mail des Seitenautors  
`Layout` = Layout der Seite  
`LayoutNew` = Layout um eine neue Seite zu erzeugen  
`Theme` = Thema der Seite  
`Language` = Sprache der Seite  
`Parser` = Parser der Seite  
`Status` = Status der Seite, [unterstützte Statuswerte](#einstellungen-status)  
`Redirect` = Weiterleitung zu einer anderen Seite oder URL  
`Image` = Bild der Seite  
`ImageAlt` = Beschreibung des Bildes der Seite  
`Modified` = Änderungsdatum der Seite, JJJJ-MM-TT Format  
`Published` = Veröffentlichungsdatum der Seite, JJJJ-MM-TT Format  
`Tag` = Tags zur Kategorisierung der Seite, durch Komma getrennt  
`Build` = Optionen zum Erstellen einer statischen Webseite, durch Komma getrennt  
`Comment` = Optionen zum Anzeigen von Kommentaren, durch Komma getrennt  

<a id="einstellungen-status"></a>Die folgenden Seiten-Statuswerte werden unterstützt:

`public` = Seite ist eine normale Seite  
`private` = Seite ist nicht sichtbar, Benutzer muss das Kennwort eingeben, [erfordert Private-Erweiterung](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private/README-de.md)  
`draft` = Seite ist nicht sichtbar, Benutzer muss sich einloggen, [erfordert Draft-Erweiterung](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft/README-de.md)  
`unlisted` = Seite ist nicht sichtbar, aber kann mit dem richtigen Link abgerufen werden  
`shared` = Seite ist nicht sichtbar, aber kann in andere Seiten eingebunden werden  

<a id="einstellungen-files"></a>Die folgenden Dateien können angepasst werden:

`content/1-home/page.md` = Inhaltsdatei für die Startseite  
`content/shared/page-error-404.md` = Inhaltsdatei für Fehlerseite  
`system/layouts/default.html` = Layoutdatei für Standard-Seite  
`system/layouts/error.html` = Layoutdatei für Fehler-Seite  
`system/layouts/header.html` = Layoutdatei für Standard-HTML-Header  
`system/layouts/footer.html` = Layoutdatei für Standard-HTML-Footer  
`system/layouts/navigation.html` = Layoutdatei für Standard-HTML-Navigation  
`system/layouts/pagination.html` = Layoutdatei für Standard-HTML-Pagination  

## Installation

[Erweiterung herunterladen](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip) und die Zip-Datei in dein `system/extensions`-Verzeichnis kopieren. Rechtsklick bei Safari.

## Entwickler

Datenstrom. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
