---
Title: API für Entwickler
---
Wir <3 Menschen die programmieren.

[toc]

## Verzeichnisstruktur

``` box-drawing {aria-hidden=true}
├── content               = Inhaltsdateien
│   ├── 1-home            = Startseite
│   ├── 9-about           = Informationsseite
│   └── shared            = geteilte Dateien
├── media                 = Mediendateien
│   ├── downloads         = Dateien zum Herunterladen
│   ├── images            = Bilder für den Inhalt
│   └── thumbnails        = Miniaturbilder für den Inhalt
└── system                = Systemdateien
    ├── extensions        = installierte Erweiterungen und Konfigurationsdateien
    ├── layouts           = konfigurierbare Layoutdateien
    ├── themes            = konfigurierbare Themendateien
    └── trash             = gelöschte Dateien
```

Du kannst alles im Dateimanager auf deinem Computer ändern. Das `content`-Verzeichnis enthält die Inhaltsdateien der Webseite. Hier bearbeitet man seine Webseite. Das `media`-Verzeichnis enthält die Mediendateien der Webseite. Hier speichert man seine Bilder und Dateien. Das `system`-Verzeichnis enthält die Systemdateien der Webseite. Hier passt man installierte Erweiterungen und Konfigurationsdateien an.

`system/extensions/yellow-system.ini` = [Datei mit Systemeinstellungen](how-to-change-the-system#systemeinstellungen)  
`system/extensions/yellow-user.ini` = [Datei mit Benutzereinstellungen](how-to-change-the-system#benutzereinstellungen)  
`system/extensions/yellow-language.ini` = [Datei mit Spracheinstellungen](how-to-change-the-system#spracheinstellungen)  

## Werkzeuge

### Eingebauter Webserver

Du kannst den eingebauten Webserver in der Befehlszeile starten. Der eingebaute Webserver ist praktisch für Entwickler und Designer. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php serve`, du kannst wahlweise eine URL angeben. Öffne einen Webbrowser und gehe zur angezeigten URL.

### Eingebauter Webeditor

Du kannst deine Webseite im Webbrowser bearbeiten. Die Anmeldeseite ist auf deiner Webseite vorhanden als `http://website/edit/`. Melde dich mit deinem Benutzerkonto an. Du kannst die normale Navigation benutzen, Änderungen machen und das Ergebnis sofort sehen. Der eingebauten Webeditor gibt dir die Möglichkeit Inhaltsdateien zu bearbeiten, Mediendateien hochzuladen und Systemeinstellungen zu ändern. Es ist eine großartige Art Webseiten zu aktualisieren.

### Static-Site-Generator

Der größte Unterschied zwischen einer statischen Webseite und einer normalen Webseite besteht darin, dass ein Static-Site-Generator alles im Voraus erstellt, anstatt darauf zu warten dass eine Datei angefordert wird. Öffne ein Terminalfenster. Gehe ins Installations-Verzeichnis, dort wo sich die Datei `yellow.php` befindet. Gib ein `php yellow.php build`, du kannst wahlweise ein Verzeichnis und einen Ort angeben. Das erstellt eine statische Webseite im `public`-Verzeichnis. Lade die statische Webseite auf deinen Webserver hoch und erstelle bei Bedarf eine neue.

## Objekte

Die folgenden Objekte sind vorhanden:

`$this->yellow->page` = [Zugang zur aktuellen Seite](#yellow-page)  
`$this->yellow->content` = [Zugang zu Inhaltsdateien](#yellow-content)  
`$this->yellow->media` = [Zugang zu Mediendateien](#yellow-media)  
`$this->yellow->system` = [Zugang zu Systemeinstellungen](#yellow-system)  
`$this->yellow->user` = [Zugang zu Benutzereinstellungen](#yellow-user)  
`$this->yellow->language` = [Zugang zu Spracheinstellungen](#yellow-language)  
`$this->yellow->extension` = [Zugang zu Erweiterungen](#yellow-extension)  
`$this->yellow->toolbox` = [Zugang zur Werkzeugkiste mit Hilfsfunktionen](#yellow-toolbox)  

Mit Hilfe von `$this->yellow` kann man auf die Webseite zugreifen. Die API ist in mehrere Objekte aufgeteilt und spiegelt im Grunde genommen das Dateisystem wieder. In der Werkzeugkiste findet man Hilfsfunktionen und Dateioperationen für eigene Erweiterungen. Den Quellcode der gesamten API findet man in der Datei `system/extensions/core.php`.

### Yellow-Page

Yellow-Page gibt Zugang zur aktuellen Seite:

**page->get($key)**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen)

**page->getHtml($key)**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen), HTML-kodiert  

**page->getDate($key, $format = "")**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) als [sprachspezifisches Datum](how-to-change-the-system#spracheinstellungen)

**page->getDateHtml($key, $format = "")**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) als [sprachspezifisches Datum](how-to-change-the-system#spracheinstellungen), HTML-kodiert

**page->getDateRelative($key, $format = "", $daysLimit = 30)**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) als [sprachspezifisches Datum](how-to-change-the-system#spracheinstellungen), relativ zu heute

**page->getDateRelativeHtml($key, $format = "", $daysLimit = 30)**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) als [sprachspezifisches Datum](how-to-change-the-system#spracheinstellungen), relativ zu heute, HTML-kodiert

**page->getDateFormatted($key, $format)**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) als [Datum](https://www.php.net/manual/de/function.date.php)

**page->getDateFormattedHtml($key, $format)**  
Hole eine [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) als [Datum](https://www.php.net/manual/de/function.date.php), HTML-kodiert

**page->getContent($rawFormat = false)**  
Hole den Seiteninhalt, HTML-kodiert oder Rohformat

**page->getParent()**  
Hole die übergeordnete Seite, null falls nicht vorhanden

**page->getParentTop($homeFallback = false)**  
Hole die oberste übergeordnete Seite, null falls nicht vorhanden

**page->getSiblings($showInvisible = false)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit Seiten auf dem selben Level

**page->getChildren($showInvisible = false)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit untergeordneten Seiten

**page->getChildrenRecursive($showInvisible = false, $levelMax = 0)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit untergeordneten Seiten rekursiv

**page->getPages($key)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit zusätzlichen Seiten

**page->getPage($key)**  
Hole eine geteilte Seite

**page->getUrl()**  
Hole die URL der Seite 

**page->getBase($multiLanguage = false)**  
Hole die Basis der Seite

**page->getLocation($absoluteLocation = false)**  
Hole den Ort der Seite

**page->getRequest($key)**  
Hole das angefragte Argument der Seite

**page->getRequestHtml($key)**  
Hole das angefragte Argument der Seite, HTML-kodiert

**page->getHeader($key)**  
Hole den Antwort-Header der Seite

**page->getExtra($name)**  
Hole Extradaten der Seite

**page->getModified($httpFormat = false)**  
Hole das Änderungsdatum der Seite, Unix-Zeit oder HTTP-Format

**page->getLastModified($httpFormat = false)**  
Hole das letzte Änderungsdatum der Seite, Unix-Zeit oder HTTP-Format

**page->getStatusCode($httpFormat = false)**  
Hole den Statuscode der Seite, Zahl oder HTTP-Format

**page->status($statusCode, $location = "")**  
Antworte mit Statuscode, ohne Seiteninhalt

**page->error($statusCode, $errorMessage = "")**  
Antworte mit Fehlerseite

**page->isAvailable()**  
Überprüfe ob die Seite vorhanden ist

**page->isVisible()**  
Überprüfe ob die Seite sichtbar ist

**page->isActive()**  
Überprüfe ob die Seite innerhalb der aktuellen HTTP-Anfrage ist

**page->isCacheable()**  
Überprüfe ob die Seite zwischengespeichert werden kann

**page->isError()**  
Überprüfe ob die Seite einen Fehler hat

**page->isExisting($key)**  
Überprüfe ob die [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen) existiert  

**page->isRequest($key)**  
Überprüfe ob das Anfrage-Argument existiert

**page->isHeader($key)**  
Überprüfe ob der Antwort-Header existiert

**page->isPage($key)**  
Überprüfe ob die geteilte Seite existiert

Hier ist ein Beispiel-Layout um den Seiteninhalt anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php echo $this->yellow->page->getContent() ?>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um den Seiteninhalt und den Autor anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p><?php echo $this->yellow->page->getHtml("author") ?></p>
<?php echo $this->yellow->page->getContent() ?>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um den Seiteninhalt und das Änderungsdatum anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p><?php echo $this->yellow->page->getDateHtml("modified") ?></p>
<?php echo $this->yellow->page->getContent() ?>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-Page-Collection

Yellow-Page-Collection gibt Zugang zu mehreren Seiten:

**pages->filter($key, $value, $exactMatch = true)**  
Filtere eine Seitenkollektion nach [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen)

**pages->match($regex = "/.*/", $filterByLocation = true)**  
Filtere eine Seitenkollektion nach Ort oder Datei

**pages->sort($key, $ascendingOrder = true)**  
Sortiere eine Seitenkollektion nach [Seiteneinstellung](how-to-change-the-system#seiteneinstellungen)

**pages->similar($page, $ascendingOrder = false)**  
Sortiere eine Seitenkollektion nach Einstellungsähnlichkeit

**pages->merge($input)**  
Berechne Vereinigungsmenge, füge eine Seitenkollektion hinzu

**pages->intersect($input)**  
Berechne Schnittmenge, entferne Seiten die nicht in einer anderen Seitenkollektion sind

**pages->diff($input)**  
Berechne Restmenge, entferne Seiten die in einer anderen Seitenkollektion sind

**pages->append($page)**  
Hänge an das Ende der Seitenkollektion

**pages->prepend($page)**  
Stelle an den Anfang der Seitenkollektion

**pages->limit($pagesMax)**  
Begrenze die Anzahl der Seiten in der Seitenkollektion

**pages->reverse()**  
Drehe die Seitenkollektion um

**pages->shuffle()**  
Mach die Seitenkollektion zufällig

**pages->paginate($limit)**  
Erstelle eine Nummerierung für die Seitenkollektion

**pages->getPaginationNumber()**  
Hole die aktuelle Seitennummer

**pages->getPaginationCount()**  
Hole die höchste Seitennummer

**pages->getPaginationLocation($absoluteLocation = true, $pageNumber = 1)**  
Hole den Ort einer Seite in der Nummerierung

**pages->getPaginationPrevious($absoluteLocation = true)**  
Hole den Ort der vorherigen Seite in der Nummerierung

**pages->getPaginationNext($absoluteLocation = true)**  
Hole den Ort der nächsten Seite in der Nummerierung

**pages->getPagePrevious($page)**  
Hole die vorherige Seite in der Seitenkollektion, null falls nicht vorhanden

**pages->getPageNext($page)**  
Hole die nächste Seite in der Seitenkollektion, null falls nicht vorhanden

**pages->getFilter()**  
Hole den aktuellen Seitenfilter

**pages->getModified($httpFormat = false)**  
Hole das Änderungsdatum der Seitenkollektion, Unix-Zeit oder HTTP-Format

**pages->isPagination()**  
Überprüfe ob eine Nummerierung vorhanden ist

Hier ist ein Beispiel-Layout um drei zufällige Seiten anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->index()->shuffle()->limit(3) ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("title") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um die neusten Seiten anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->index()->sort("modified", false) ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("title") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um Entwurfseiten anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->index(true, true)->filter("status", "draft") ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("title") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-Content

Yellow-Content gibt Zugang zu Inhaltsdateien:

**content->find($location, $absoluteLocation = false)**  
Hole eine [Seite](#yellow-page), null falls nicht vorhanden

**content->index($showInvisible = false, $multiLanguage = false, $levelMax = 0)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit allen Seiten

**content->top($showInvisible = false, $showOnePager = true)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit Hauptseiten der Navigation

**content->path($location, $absoluteLocation = false)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit Pfad in der Navigation

**content->multi($location, $absoluteLocation = false, $showInvisible = false)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit mehreren Sprachen im Mehrsprachen-Modus

**content->clean()**  
Hole eine [Seitenkollektion](#yellow-page-collection) die leer ist

Hier ist ein Beispiel-Layout um alle Seiten anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->index(true, true) ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("title") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um Seiten unterhalb eines bestimmten Orts anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->find("/help/")->getChildren() ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("title") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um die Hauptseiten der Navigation anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $pages = $this->yellow->content->top() ?>
<?php $this->yellow->page->setLastModified($pages->getModified()) ?>
<ul>
<?php foreach ($pages as $page): ?>
<li><?php echo $page->getHtml("titleNavigation") ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-Media

Yellow-Media gibt Zugang zu Mediendateien:

**media->find($location, $absoluteLocation = false)**  
Hole eine [Seite](#yellow-page) mit Informationen über Mediendatei, null falls nicht vorhanden

**media->index($showInvisible = false, $multiPass = false, $levelMax = 0)**  
Hole eine [Seitenkollektion](#yellow-page-collection) mit allen Mediendateien

**media->clean()**  
Hole eine [Seitenkollektion](#yellow-page-collection) die leer ist

Hier ist ein Beispiel-Layout um alle Mediendateien anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $files = $this->yellow->media->index(true) ?>
<?php $this->yellow->page->setLastModified($files->getModified()) ?>
<ul>
<?php foreach ($files as $file): ?>
<li><?php echo $file->getLocation(true) ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um die neusten Mediendateien anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $files = $this->yellow->media->index()->sort("modified", false) ?>
<?php $this->yellow->page->setLastModified($files->getModified()) ?>
<ul>
<?php foreach ($files as $file): ?>
<li><?php echo $file->getLocation(true) ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um Mediendateien eines bestimmten Typen anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $files = $this->yellow->media->index()->filter("type", "pdf") ?>
<?php $this->yellow->page->setLastModified($files->getModified()) ?>
<ul>
<?php foreach ($files as $file): ?>
<li><?php echo $file->getLocation(true) ?></li>
<?php endforeach ?>
</ul>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-System

Yellow-System gibt Zugang zu Systemeinstellungen:

**system->get($key)**  
Hole eine [Systemeinstellung](how-to-change-the-system#systemeinstellungen)

**system->getHtml($key)**  
Hole eine [Systemeinstellung](how-to-change-the-system#systemeinstellungen), HTML-kodiert

**system->getSettings($filterStart = "", $filterEnd = "")**  
Hole [Systemeinstellungen](how-to-change-the-system#systemeinstellungen)

**system->getValues($key)**  
Hole die unterstützten Werte einer [Systemeinstellung](how-to-change-the-system#systemeinstellungen), leer falls nicht bekannt

**system->getModified($httpFormat = false)**  
Hole das Änderungsdatum von [Systemeinstellungen](how-to-change-the-system#systemeinstellungen), Unix-Zeit oder HTTP-Format

**system->isExisting($key)**  
Überprüfe ob die [Systemeinstellung](how-to-change-the-system#systemeinstellungen) existiert

Hier ist ein Beispiel-Layout um den Webmaster anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php echo "Name: ".$this->yellow->system->getHtml("author")."<br />" ?>
<?php echo "Email: ".$this->yellow->system->getHtml("email")."<br />" ?>
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um zu überprüfen ob eine bestimmte Einstellung aktiviert ist:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php $multiLanguageMode = $this->yellow->system->get("coreMultiLanguageMode") ?>
Multi language mode is <?php echo htmlspecialchars($multiLanguageMode ? "on" : "off") ?>.
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um die Core-Einstellungen anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php foreach ($this->yellow->system->getSettings("core") as $key=>$value): ?>
<?php echo htmlspecialchars("$key: $value") ?><br />
<?php endforeach ?>
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-User

Yellow-User gibt Zugang zu Benutzereinstellungen:

**user->getUser($key, $email = "")**  
Hole eine [Benutzereinstellung](how-to-change-the-system#benutzereinstellungen)

**user->getUserHtml($key, $email = "")**  
Hole eine [Benutzereinstellung](how-to-change-the-system#benutzereinstellungen), HTML-kodiert

**user->getSettings($email = "")**  
Hole [Benutzereinstellungen](how-to-change-the-system#benutzereinstellungen)

**user->getModified($httpFormat = false)**  
Hole das Änderungsdatum von [Benutzereinstellungen](how-to-change-the-system#benutzereinstellungen), Unix-Zeit oder HTTP-Format

**user->isUser($key, $email = "")**  
Überprüfe ob die [Benutzereinstellung](how-to-change-the-system#benutzereinstellungen) existiert

**user->isExisting($email)**  
Überprüfe ob der Benutzer existiert

Hier ist ein Beispiel-Layout um den aktuellen Benutzer anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php echo "Name: ".$this->yellow->user->getUserHtml("name")."<br />" ?>
<?php echo "Email: ".$this->yellow->user->getUserHtml("email")."<br />" ?>
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um zu überprüfen ob ein Benutzer angemeldet ist:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $found = $this->yellow->user->isUser("name") ?>
<p>You are <?php echo htmlspecialchars($found? "" : "not") ?> logged in.</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um Benutzer und ihren Status anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php foreach ($this->yellow->system->getValues("email") as $email): ?>
<?php echo $this->yellow->user->getUserHtml("name", $email) ?> - 
<?php echo $this->yellow->user->getUserHtml("status", $email) ?><br />
<?php endforeach ?>
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-Language

Yellow-Language gibt Zugang zu Spracheinstellungen:

**language->getText($key, $language = "")**  
Hole eine [Spracheinstellung](how-to-change-the-system#spracheinstellungen)

**language->getTextHtml($key, $language = "")**  
Hole eine [Spracheinstellung](how-to-change-the-system#spracheinstellungen), HTML encoded

**language->getSettings($filterStart = "", $filterEnd = "", $language = "")**  
Hole [Spracheinstellungen](how-to-change-the-system#spracheinstellungen)

**language->getModified($httpFormat = false)**  
Hole das Änderungsdatum von [Spracheinstellungen](how-to-change-the-system#spracheinstellungen), Unix-Zeit oder HTTP-Format

**language->isText($key, $language = "")**  
Überprüfe ob die [Spracheinstellung](how-to-change-the-system#spracheinstellungen) existiert

**language->isExisting($language)**  
Überprüfe ob die Sprache existiert

Hier ist ein Beispiel-Layout um eine Spracheinstellung anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p><?php echo $this->yellow->language->getTextHtml("wikiModified") ?> 
<?php echo $this->yellow->page->getDateHtml("modified") ?></p>
<?php echo $this->yellow->page->getContent() ?>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um zu überprüfen ob eine bestimmte Sprache existiert:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $found = $this->yellow->language->isExisting("sv") ?>
<p>Swedish language <?php echo htmlspecialchars($found ? "" : "not") ?> installed.</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um Sprachen und Übersetzer anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php foreach ($this->yellow->system->getValues("language") as $language): ?>
<?php echo $this->yellow->language->getTextHtml("languageDescription", $language) ?> - 
<?php echo $this->yellow->language->getTextHtml("languageTranslator", $language) ?><br />
<?php endforeach ?>
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

### Yellow-Extension

Yellow-Extension gibt Zugang zu Erweiterungen:

**extension->get($key)**  
Hole eine Erweiterung

**extension->getModified($httpFormat = false)**  
Hole das Änderungsdatum von Erweiterungen, Unix-Zeit oder HTTP-Format

**extension->isExisting($key)**  
Überprüfe ob die Erweiterung existiert

Hier ist ein Beispiel-Layout um Erweiterungen anzuzeigen:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<p>
<?php foreach($this->yellow->extension->data as $key=>$value): ?>
<?php echo htmlspecialchars($key." ".$value["version"]) ?><br />
<?php endforeach ?>
</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Layout um zu überprüfen ob eine bestimmte Erweiterung existiert:

``` html
<?php $this->yellow->layout("header") ?>
<div class="content">
<div class="main" role="main">
<h1><?php echo $this->yellow->page->getHtml("titleContent") ?></h1>
<?php $found = $this->yellow->extension->isExisting("search") ?>
<p>Search extension <?php echo htmlspecialchars($found ? "" : "not") ?> installed.</p>
</div>
</div>
<?php $this->yellow->layout("footer") ?>
```

Hier ist ein Beispiel-Code um eine Funktion aus einer anderen Erweiterung aufzurufen:

``` php
if ($this->yellow->extension->isExisting("image")) {
    $fileName = "media/images/photo.jpg";
    list($src, $width, $height) = $this->yellow->extension->get("image")->getImageInformation($fileName, "100%", "100%");
    echo "<img src=\"".htmlspecialchars($src)."\" width=\"".htmlspecialchars($width)."\" height=\"".htmlspecialchars($height)."\" />";
}
```

### Yellow-Toolbox

Yellow-Toolbox gibt Zugang zur Werkzeugkiste mit Hilfsfunktionen:

**toolbox->getCookie($key)**   
Hole das Browsercookie der aktuellen HTTP-Anfrage

**toolbox->getServer($key)**   
Hole das Serverargument der aktuellen HTTP-Anfrage

**toolbox->getLocationArguments()**  
Hole die Ortargumente der aktuellen HTTP-Anfrage

**toolbox->getDirectoryEntries($path, $regex = "/.*/", $sort = true, $directories = true, $includePath = true)**  
Hole Dateien und Verzeichnisse

**toolbox->getDirectoryEntriesRecursive($path, $regex = "/.*/", $sort = true, $directories = true, $levelMax = 0)**  
Hole Dateien und Verzeichnisse rekursiv

**toolbox->readFile($fileName, $sizeMax = 0)**  
Lese eine Datei, leerer String falls nicht vorhanden

**toolbox->createFile($fileName, $fileData, $mkdir = false)**  
Erstelle eine Datei

**toolbox->appendFile($fileName, $fileData, $mkdir = false)**  
Hänge an eine Datei an

**toolbox->copyFile($fileNameSource, $fileNameDestination, $mkdir = false)**  
Kopiere eine Datei  

**toolbox->renameFile($fileNameSource, $fileNameDestination, $mkdir = false)**  
Benenne eine Datei um

**toolbox->renameDirectory($pathSource, $pathDestination, $mkdir = false)**  
Benenne ein Verzeichnis um  

**toolbox->deleteFile($fileName, $pathTrash = "")**  
Lösche eine Datei

**toolbox->deleteDirectory($path, $pathTrash = "")**  
Lösche ein Verzeichnis  

**toolbox->modifyFile($fileName, $modified)**  
Setze das Änderungsdatum von Datei/Verzeichnis, Unix-Zeit

**toolbox->getFileModified($fileName)**  
Hole das Änderungsdatum von Datei/Verzeichnis, Unix-Zeit

**toolbox->getFileType($fileName)**  
Hole den Typ der Datei

**toolbox->getTextLines($text)**  
Hole die Zeilen eines Texts, einschließlich Zeilenumbruch  

**toolbox->getTextList($text, $separator, $size)**  
Hole ein Array mit bestimmter Grösse aus dem Text  

**toolbox->getTextArguments($text, $optional = "-", $sizeMin = 9)**  
Hole ein Array mit variabler Grösse aus dem Text, durch Leerzeichen getrennt  

**toolbox->createTextDescription($text, $lengthMax = 0, $removeHtml = true, $endMarker = "", $endMarkerText = "")**  
Erstelle eine Textbeschreibung, mit oder ohne HTML

**toolbox->normaliseArguments($text, $appendSlash = true, $filterStrict = true)**  
Normalisiere Ortargumente

**toolbox->normaliseData($text, $type = "html", $filterStrict = true)**  
Normalisiere Elemente und Attribute in HTML/SVG-Daten

**toolbox->normalisePath($text)**  
Normalisiere relative Pfadanteile

Hier ist ein Beispiel-Code um Textzeilen von einer Datei zu lesen:

``` php
$fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
$fileData = $this->yellow->toolbox->readFile($fileName);
foreach ($this->yellow->toolbox->getTextLines($fileData) as $line) {
    echo $line;
}
```

Hier ist ein Beispiel-Code um Dateien in einem Verzeichnis anzuzeigen:

``` php
$path = $this->yellow->system->get("coreExtensionDirectory");
foreach ($this->yellow->toolbox->getDirectoryEntries($path, "/.*/", true, false) as $entry) {
    echo "Found file $entry\n";
}
```

Hier ist ein Beispiel-Code um Text in mehreren Dateien zu ändern:

``` php
$path = $this->yellow->system->get("coreContentDirectory");
foreach ($this->yellow->toolbox->getDirectoryEntriesRecursive($path, "/^.*\.md$/", true, false) as $entry) {
    $fileData = $fileDataNew = $this->yellow->toolbox->readFile($entry);
    $fileDataNew = str_replace("I drink a lot of water", "I drink a lot of coffee", $fileDataNew);
    if ($fileData!=$fileDataNew && !$this->yellow->toolbox->createFile($entry, $fileDataNew)) {
        $this->yellow->log("error", "Can't write file '$entry'!");
    }
}
```

### Yellow-String

Die folgenden Funktionen erweitern PHP-Stringfunktionen:

**strtoloweru($string)**  
Wandle String in Kleinschrift um, UTF-8 kompatibel

**strtoupperu($string)**  
Wandle String in Großschrift um, UTF-8 kompatibel

**strlenu($string)** + **strlenb($string)**  
Hole Stringlänge, UTF-8-Zeichen oder Bytes

**strposu($string, $search)** + **strposb($string, $search)**  
Hole Stringposition des ersten Treffers, UTF-8-Zeichen oder Bytes

**strrposu($string, $search)** + **strrposb($string, $search)**  
Hole Stringposition des letzten Treffers, UTF-8-Zeichen oder Bytes

**substru($string, $start, $length)** + **substrb($string, $start, $length)**  
Hole Teilstring, UTF-8-Zeichen oder Bytes

**strempty($string)**  
Überprüfe ob der String leer ist

Hier ist ein Beispiel-Code um verschiedene Stringfunktionen zu benutzen:

```php
$string = "Datenstrom Yellow ist für Menschen die kleine Webseiten machen";
echo strtoloweru($string);    // datenstrom yellow ist für menschen die kleine webseiten machen
echo strtoupperu($string);    // DATENSTROM YELLOW IST FÜR MENSCHEN DIE KLEINE WEBSEITEN MACHEN

$string = "Text mit UTF-8-Zeichen åäö";
echo strlenu($string);        // 26
echo strposu($string, "UTF"); // 9
echo substru($string, -3, 3); // åäö

var_dump(strempty("text"));   // bool(false)
var_dump(strempty("0"));      // bool(false)
var_dump(strempty(""));       // bool(true)
```

## Ereignisse


``` box-drawing {aria-hidden=true}
onLoad ───────▶ onStartup ───────────────────────────────────────────┐
                    │                                                │
                    ▼                                                │
                onRequest ───────────────────┐                       │
                    │                        │                       │
                    ▼                        ▼                       ▼
                onParseMetaData          onEditContentFile       onCommand  
                onParseContentRaw        onEditMediaFile         onCommandHelp
                onParseContentShortcut   onEditSystemFile            │
                onParseContentHtml       onEditUserAccount           │
                onParsePageLayout            │                       ▼
                onParsePageExtra             │                   onUpdate
                onParsePageOutput            │                   onLog
                    │                        │                       │
                    ▼                        │                       │
                onShutDown ◀─────────────────┴───────────────────────┘
```

Wird eine Seite angezeigt, dann werden die Erweiterungen geladen und es wird `onLoad` aufgerufen. Sobald alle Erweiterungen geladen sind wird `onStartup` aufgerufen. Die Seite kann mit verschiedenen [Parse-Ereignissen](#yellow-parse-ereignisse) verarbeitet werden. Dann wird der Inhalt der Seite erzeugt. Sollte ein Fehler aufgetreten sein, wird eine Fehlerseite erzeugt. Zum Schluss wird die Seite ausgegeben und es wird `onShutdown` aufgerufen.

Wird eine Seite bearbeitet, dann werden die Erweiterungen geladen und es wird `onLoad` aufgerufen. Sobald alle Erweiterungen geladen sind wird `onStartup` aufgerufen. Änderungen an der Seite können mit verschiedenen [Edit-Ereignissen](#yellow-edit-ereignisse) verarbeitet werden. Dann wird die Seite gespeichert. Zum Schluss wird ein Statuscode zum Neuladen der Seite ausgegeben und es wird `onShutdown` aufgerufen.

Wird ein Befehl ausgeführt, dann werden die Erweiterungen geladen und es wird `onLoad` aufgerufen. Sobald alle Erweiterungen geladen sind wird `onStartup` aufgerufen. Der Befehl kann mit verschiedenen [Command-Ereignissen](#yellow-command-ereignisse) verarbeitet werden. Sollte kein Befehl eingegeben worden sein, werden die verfügbaren Befehle angezeigt. Zum Schluss wird ein Rückgabecode ausgegeben und es wird `onShutdown` aufgerufen.

### Yellow-Core-Ereignisse

Yellow-Core-Ereignisse unterrichten wenn sich ein Zustand ändert:

**public function onLoad($yellow)**  
Verarbeite die Initialisierung

**public function onStartup()**  
Verarbeite das Hochfahren

**public function onRequest($scheme, $address, $base, $location, $fileName)**  
Verarbeite die Anfrage

**public function onUpdate($action)**  
Verarbeite die Aktualisierung

**public function onLog($action, $message)**  
Verarbeite das Logging

**public function onShutdown()**  
Verarbeite das Runterfahren

Hier ist eine Beispiel-Erweiterung um ein Ereignis zu verarbeiten:

``` php
<?php
class YellowExample {
    const VERSION = "0.1.1";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
}
```

### Yellow-Parse-Ereignisse

Yellow-Parse-Ereignisse unterrichten wenn eine Seite angezeigt wird:

**public function onParseMetaData($page)**  
Verarbeite die Metadaten einer Seite

**public function onParseContentRaw($page, $text)**  
Verarbeite den Seiteninhalt im Rohformat

**public function onParseContentShortcut($page, $name, $text, $type)**  
Verarbeite den Seiteninhalt einer Abkürzung

**public function onParseContentHtml($page, $text)**  
Verarbeite den Seiteninhalt im HTML-Format

**public function onParsePageLayout($page, $name)**  
Verarbeite das Layout einer Seite

**public function onParsePageExtra($page, $name)**  
Verarbeite die Extradaten einer Seite

**public function onParsePageOutput($page, $text)**  
Verarbeite die Ausgabedaten einer Seite

Hier ist eine Beispiel-Erweiterung um eine Abkürzung zu verarbeiten:

``` php
<?php
class YellowExample {
    const VERSION = "0.1.2";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="example" && ($type=="block" || $type=="inline")) {
            $output = "<div class=\"".htmlspecialchars($name)."\">";
            $output .= "Add more HTML code here";
            $output .= "</div>";
        }
        return $output;
    }
}
```

### Yellow-Edit-Ereignisse

Yellow-Edit-Ereignisse unterrichten wenn eine Seite bearbeitet wird:

**public function onEditContentFile($page, $action, $email)**  
Verarbeite Änderungen an Inhaltsdatei

**public function onEditMediaFile($file, $action, $email)**  
Verarbeite Änderungen an Mediendatei

**public function onEditSystemFile($file, $action, $email)**  
Verarbeite Änderungen an Systemdatei

**public function onEditUserAccount($action, $email, $password)**  
Verarbeite Änderungen am Benutzerkonto

Hier ist eine Beispiel-Erweiterung um eine Datei zu verarbeiten:

``` php
<?php
class YellowExample {
    const VERSION = "0.1.3";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle media file changes
    public function onEditMediaFile($file, $action, $email) {
        if ($action=="upload") {
            $fileName = $file->fileName;
            $fileType = $this->yellow->toolbox->getFileType($file->get("fileNameShort"));
            // Add more code here
        }
    }
}
```

### Yellow-Command-Ereignisse

Yellow-Command-Ereignisse unterrichten wenn ein Befehl ausgeführt wird:

**public function onCommand($command, $text)**  
Verarbeite Befehle

**public function onCommandHelp()**  
Verarbeite Hilfe für Befehle


Hier ist eine Beispiel-Erweiterung um einen Befehl zu verarbeiten:

``` php
<?php
class YellowExample {
    const VERSION = "0.1.4";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle command
    public function onCommand($command, $text) {
        $statusCode = 0;
        if ($command=="example") {
            echo "Yellow $command: Add more text here\n";
            $statusCode = 200;
        }
        return $statusCode;
    }

    // Handle command help
    public function onCommandHelp() {
        return "example\n";
    }    
}
```

## Verwandte Informationen

* [Wie man die Befehlszeile benutzt](https://github.com/datenstrom/yellow-extensions/blob/master/source/command/README-de.md)
* [Wie man eine Erweiterung erstellt](https://github.com/datenstrom/yellow-extensions/blob/master/source/publish/README-de.md)
* [Wie man eine Übersetzung erstellt](https://github.com/datenstrom/yellow-extensions/blob/master/source/language/README-de.md)

Hast du Fragen? [Hilfe finden](.).
