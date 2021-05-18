---
Title: Felsökning
ShowLanguageSelection: 1
---
Så här hittar du och åtgärdar fel.

[toc]

## Problem med installationen

Följande felmeddelanden kan uppstå:

```
Datenstrom Yellow requires write access!
```

Kör kommandot `chmod -R a+rw *` i installationsmappen. Du kan också använda din FTP-programvara för att ge skrivbehörighet till alla filer. Det rekommenderas att ge skrivbehörighet till alla filer och mappar i installationsmappen. Så snart webbservern har tillräcklig skrivåtkomst i `system`-mappen bör problemet lösas.

```
Datenstrom Yellow requires complete upload!
```

Kopiera alla filer igen till webbservern. Kontrollera om din FTP-programvara visar ett felmeddelande under uppladdningen. Ibland händer det att dataöverföringen avbröts, då finns det filer med noll byte på webbservern. Efter alla filer har kopierats till webbservern bör problemet lösas.

```
Datenstrom Yellow requires configuration file!
```

Kopiera medföljande `.htaccess`-filen till installationsmappen. Kontrollera om din FTP-programvara har en inställning för att visa alla filer. Ibland händer det att filen `.htaccess` förbises under installationen. Efter att saknade konfigurationsfilen har kopierats till webbservern bör problemet lösas.

```
Datenstrom Yellow requires rewrite support!
```

Konfigurera webbservern, se [Apache-konfiguration](#problem-med-apache) eller [Nginx-konfiguration](#problem-med-nginx). Du behöver antingen en konfiguration för din webbserver eller så använder du inbyggda webbservern på din dator. Den inbyggda webbservern är praktisk för utvecklare. Så snart webbservern vidarebefordrar HTTP-förfrågningar till `yellow.php`, bör problemet lösas.

```
Datenstrom Yellow requires PHP extension!
```

Installera saknade PHP-tillägget på din webbserver. Du behöver `curl exif gd mbstring zip`.

```
Datenstrom Yellow requires PHP 5.6 or higher!
```

Installera senaste PHP-versionen på din webbserver. Om du har fastnat, [se hjälp för din webbplats](.).

## Problem efter installationen

Följande felmeddelande kan uppstå:

```
Check the log file. Please activate the debug mode for more information.
```

Kontrollera logfilen `system/extensions/yellow.log`. Om det finns skrivfel, ge sedan skrivbehörighet till de drabbade filerna. Om det finns parsersfel, kontakta motsvarande utvecklare/designer och reparera de berörda filerna. Loggfilen ger dig en snabb översikt över vad som händer på din webbplats. Här är ett exempel: 

```
2020-10-28 14:13:07 info Install Datenstrom Yellow 0.8.17, PHP 7.1.33, Apache 2.4.33, Mac
2020-10-28 14:13:07 info Install extension 'English 0.8.27'
2020-10-28 14:13:07 info Install extension 'German 0.8.27'
2020-10-28 14:13:07 info Install extension 'Swedish 0.8.27'
2020-10-28 14:13:17 info Add user 'Anna'
2020-12-18 21:02:42 info Update extension 'Core 0.8.42'
2020-12-18 21:02:42 error Can't write file 'system/extensions/yellow-system.ini'!
```

Aktivera felsökningsläget om du inte är 100% säker på vad som orsakar problem. Detta visar mer information på aktuella sidan. Du kan använda felsökningsläget för att ge en utvecklare/designer ytterligare information, för att undersöka orsaken till ett fel eller om du är nyfiken på hur Datenstrom Yellow fungerar. 

Öppna filen `system/extensions/core.php` och ändra första raden till `<?php define("DEBUG", 1);`

```
YellowCore::sendPage Cache-Control: max-age=60
YellowCore::sendPage Content-Type: text/html; charset=utf-8
YellowCore::sendPage Content-Modified: Wed, 06 Feb 2019 13:54:17 GMT
YellowCore::sendPage Last-Modified: Thu, 07 Feb 2019 09:37:48 GMT
YellowCore::sendPage language:sv layout:blogpages theme:stockholm parser:markdown
YellowCore::processRequest file:content/3-sv/2-blog/page.md
YellowCore::request status:200 time:19 ms
```

Få filsystem information genom att öka debug-level till `<?php define("DEBUG", 2);`

```
YellowSystem::load file:system/extensions/yellow-system.ini
YellowUser::load file:system/extensions/yellow-user.ini
YellowLanguage::load file:system/extensions/english.txt
YellowLanguage::load file:system/extensions/german.txt
YellowLanguage::load file:system/extensions/swedish.txt
YellowLanguage::load file:system/extensions/yellow-language.ini
YellowLookup::findFileFromLocation /sv/blog/ -> content/3-sv/2-blog/page.md
```

Få maximal information genom att öka debug-level till `<?php define("DEBUG", 3);`

```
YellowSystem::load file:system/extensions/yellow-system.ini
YellowSystem::load Sitename:Datenstrom Yellow
YellowSystem::load Author:Datenstrom
YellowSystem::load Email:webmaster
YellowSystem::load Language:sv
YellowSystem::load Layout:default
YellowSystem::load Theme:stockholm
```

## Problem med Apache

Här är en `.htaccess`-konfigurationsfil för Apache-webbservern:

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

Här är en `.htaccess`-konfigurationsfil för en undermapp, till exempel `http://website/yellow/`:

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

Här är en `.htaccess`-konfigurationsfil för en underdomän, till exempel `http://sub.domain.website/`:

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

När din webbplats inte fungerar måste du [aktivera rewrite-modulen](https://stackoverflow.com/questions/869092/how-to-enable-mod-rewrite-for-apache-2-2) och [ändra AllowOverride-konfigurationen](https://stackoverflow.com/questions/18740419/how-to-set-allowoverride-all). Efter att konfigurationen har ändrats kan du behöva starta om Apache-webbservern.

## Problem med Nginx

Här är en `nginx.conf `-konfigurationsfil för Nginx-webbservern:

```nginx
server {
    listen 80;
    server_name website.com;
    root /var/www/website/;
    default_type text/html;
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
        include fastcgi.conf;
    }
}
```

Här är en `nginx.conf`-konfigurationsfil för en statisk webbsida:

```nginx
server {
    listen 80;
    server_name website.com;
    root /var/www/website/;
    default_type text/html;
    error_page 404 /404.html;
}
```

När din webbplats inte fungerar, kontrollera `server_name` och `root` i konfigurationsfilen. Efter att konfigurationen har ändrats kan du behöva [starta om Nginx-webbservern](https://stackoverflow.com/questions/21292533/reload-nginx-configuration).

## Relaterad information

* [Hur man använder inbyggda webbservern](https://github.com/datenstrom/yellow-extensions/tree/master/source/command/README-sv.md)
* [Hur man visar aktuella versionen](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)
* [Hur man skapar ett användarkonto](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)

Har du några frågor? [Få hjälp](.) och [engagera dig](contributing-guidelines).
