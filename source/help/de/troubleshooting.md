---
Title: Fehlerbehebung
---
Wie man Fehler findet und behebt.

[toc]

## Probleme bei der Installation

Die folgenden Probleme können auftreten:

```
Datenstrom Yellow requires write access!
```

Führe den Befehl `chmod -R a+rw *` im Installations-Verzeichnis aus. Du kannst auch deine FTP-Software verwenden, um allen Dateien Schreibrechte zu geben. Es wird empfohlen allen Dateien und Verzeichnissen im Installations-Verzeichnis Schreibrechte zu geben. Sobald der Webserver ausreichende Schreibrechte im `system`-Verzeichnis hat, sollte das Problem behoben sein.

```
Datenstrom Yellow requires configuration file!
```

Kopiere die mitgelieferte `.htaccess` Datei ins Installations-Verzeichnis. Überprüfe ob deine FTP-Software eine Einstellung hat, um alle Dateien anzuzeigen. Es passiert manchmal dass die `.htaccess` Datei bei der Installation übersehen wurde. Nachdem die fehlende Konfigurationsdatei auf den Webserver kopiert wurde, sollte das Problem behoben sein.

```
Datenstrom Yellow requires rewrite support!
```

Konfiguriere den Webserver, siehe Konfigurationsdateien weiter unten. Du benötigst entweder eine Konfigurationsdatei für deinen Webserver oder du verwendest den eingebauten Webserver auf deinem Computer. Der eingebaute Webserver ist praktisch für Entwickler. Sobald der Webserver HTTP-Anfragen an die `yellow.php` weiterleitet, sollte das Problem behoben sein.

```
Datenstrom Yellow requires PHP extension!
```

Installiere die fehlende PHP-Erweiterung auf deinem Webserver. Du benötigst `curl exif gd mbstring zip`.

```
Datenstrom Yellow requires PHP 5.6 or higher!
```

Installiere die neuste PHP-Version auf deinem Webserver.

## Probleme mit Apache

Hier ist eine `.htaccess` Konfigurationsdatei für den Apache-Webserver:

```apache
<IfModule mod_rewrite.c>
RewriteEngine on
DirectoryIndex index.html yellow.php
RewriteRule ^(cache|content|system)/ error [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ yellow.php [L]
</IfModule>
```

Hier ist eine `.htaccess` Konfigurationsdatei für ein Unterverzeichnis, beispielsweise `http://website/yellow/`:

```apache
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteBase /yellow/
DirectoryIndex index.html yellow.php
RewriteRule ^(cache|content|system)/ error [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ yellow.php [L]
</IfModule>
```

Hier ist eine `.htaccess` Konfigurationsdatei für eine Subdomain, beispielsweise `http://sub.domain.website/`:

```apache
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteBase /
DirectoryIndex index.html yellow.php
RewriteRule ^(cache|content|system)/ error [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ yellow.php [L]
</IfModule>
```

Wenn deine Webseite nicht funktioniert, dann musst du das [Rewrite-Modul aktivieren](https://stackoverflow.com/questions/869092/how-to-enable-mod-rewrite-for-apache-2-2) und die [globale Konfiguration aktualisieren](https://stackoverflow.com/questions/18740419/how-to-set-allowoverride-all). Nachdem die Konfiguration verändert wurde, musst du möglicherweise den Apache-Webserver neustarten/neuladen.


## Probleme mit Nginx

Hier ist eine `nginx.conf` Konfigurationsdatei für den Nginx-Webserver:

```nginx
server {
    listen 80;
    server_name website.com;
    root /var/www/website/;
    index index.html yellow.php;

    location /cache {
        rewrite ^(.*)$ /error break;
    }

    location /content {
        rewrite ^(.*)$ /error break;
    }

    location /system {
        rewrite ^(.*)$ /error break;
    }

    location / {
        if (!-e $request_filename) {
            rewrite ^/(.*)$ /yellow.php last;
            break;
        }
    }

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index yellow.php;
        include fastcgi_params;
    }
}
```

Hier ist eine `nginx.conf` Konfigurationsdatei für eine statische Webseite:

```nginx
server {
    listen 80;
    server_name website.com;
    root /var/www/website/;
    error_page 404 /404.html;
}
```

Wenn deine Webseite nicht funktioniert, dann überprüfe `server_name` und `root` in der Konfigurationsdatei. Nachdem die Konfiguration verändert wurde, musst du möglicherweise den [Nginx-Webserver neustarten/neuladen](https://stackoverflow.com/questions/21292533/reload-nginx-configuration).

## Probleme nach der Installation

<a id="logdatei"></a>Die Datei `system/extensions/yellow.log` zeigt wichtige Informationen und Fehler an. Hier ist ein Beispiel:

```
2020-10-28 14:13:07 info Install Datenstrom Yellow 0.8.17, PHP 7.1.33, Apache 2.4.33, Mac
2020-10-28 14:13:07 info Install extension 'English 0.8.27'
2020-10-28 14:13:07 info Install extension 'German 0.8.27'
2020-10-28 14:13:07 info Install extension 'Swedish 0.8.27'
2020-10-28 14:13:17 info Add user 'Anna'
2020-12-18 21:02:42 info Update extension 'Core 0.8.42'
2020-12-18 21:02:42 error Can't write file 'system/extensions/yellow-system.ini'!
```

Überprüfe die Logdatei nach Fehlermeldungen. Wenn Schreibfehler auftreten, dann gebe den betroffenen Dateien Schreibrechte. Wenn andere Fehler auftreten, dann wende dich an den Entwickler/Designer und ersetze die betroffenen Dateien. Wenn du nicht 100% sicher bist was Probleme macht, dann aktiviere den Debug-Modus. Das zeigt zusätzliche Informationen auf der aktuellen Seite. 

Öffne die Datei `system/extensions/core.php` und ändere die erste Zeile zu `<?php define("DEBUG", 1);`

```
YellowCore::sendPage Cache-Control: max-age=60
YellowCore::sendPage Content-Type: text/html; charset=utf-8
YellowCore::sendPage Content-Modified: Wed, 06 Feb 2019 13:54:17 GMT
YellowCore::sendPage Last-Modified: Thu, 07 Feb 2019 09:37:48 GMT
YellowCore::sendPage language:de layout:blogpages theme:stockholm parser:markdown
YellowCore::processRequest file:content/2-de/2-extensions/1-blog/page.md
YellowCore::request status:200 time:19 ms
```

Dateisysteminformationen durch Erhöhen des Debuglevels zu `<?php define("DEBUG", 2);`

```
YellowSystem::load file:system/extensions/yellow-system.ini
YellowUser::load file:system/extensions/yellow-user.ini
YellowLanguage::load file:system/extensions/english.txt
YellowLanguage::load file:system/extensions/german.txt
YellowLanguage::load file:system/extensions/swedish.txt
YellowLanguage::load file:system/extensions/yellow-language.ini
YellowLookup::findFileFromLocation /de/extensions/blog/ -> content/2-de/2-extensions/1-blog/page.md
```

Maximum Informationen durch Erhöhen des Debuglevels zu `<?php define("DEBUG", 3);`

```
YellowSystem::load file:system/extensions/yellow-system.ini
YellowSystem::load Sitename:Datenstrom Yellow
YellowSystem::load Author:Datenstrom
YellowSystem::load Email:webmaster
YellowSystem::load Language:de
YellowSystem::load Layout:default
YellowSystem::load Theme:stockholm
```

## Verwandte Informationen

* [Wie man den eingebauten Webserver verwendet](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-de.md)
* [Wie man ein Benutzerkonto erstellt](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit/README-de.md)
* [Wie man eine Webseite aktualisiert](https://github.com/datenstrom/yellow-extensions/tree/master/source/update/README-de.md)

Hast du Fragen? [Hilfe finden](.) und [mitmachen](contributing-guidelines).
