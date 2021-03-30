---
Title: Troubleshooting
---
Here's how to find and fix errors.

[toc]

## Problems with installation

The following problems can occur:

```
Datenstrom Yellow requires write access!
```

Run the command `chmod -R a+rw *` in the installation folder. You can also use your FTP software to give write permissions to all files. It's recommended to give write permissions to all files and folders in the installation folder. As soon as the web server has sufficient write access in the `system` folder, the problem should be resolved.

```
Datenstrom Yellow requires configuration file!
```

Copy the supplied `.htaccess` file into the installation folder. Check if your FTP software has a setting to show all files. It sometimes happens that the `.htaccess` file was overlooked during installation. After the missing configuration file has been copied to the web server, the problem should be resolved.

```
Datenstrom Yellow requires rewrite support!
```

Configure the web server, see configuration files below. You either need a configuration file for your web server or you use the built-in web server on your computer. The built-in web server is handy for developers. As soon as the web server forwards HTTP requests to the `yellow.php`, the problem should be resolved.

```
Datenstrom Yellow requires PHP extension!
```

Install the missing PHP extension on your web server. You need `curl exif gd mbstring zip`.

```
Datenstrom Yellow requires PHP 5.6 or higher!
```

Install the latest PHP version on your web server.

## Problems with Apache

Here's a `.htaccess` configuration file for the Apache web server:

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

Here's a `.htaccess` configuration file for a subfolder, for example `http://website/yellow/`:

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

Here's a `.htaccess` configuration file for a subdomain, for example `http://sub.domain.website/`:

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

When your website doesn't work, then you have to [enable the rewrite module](https://stackoverflow.com/questions/869092/how-to-enable-mod-rewrite-for-apache-2-2) and [update the global configuration](https://stackoverflow.com/questions/18740419/how-to-set-allowoverride-all). After the configuration has been changed, you may have to restart/reload the Apache web server.

## Problems with Nginx

Here's a `nginx.conf` configuration file for the Nginx web server:

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

Here's a `nginx.conf` configuration file for a static website:

```nginx
server {
    listen 80;
    server_name website.com;
    root /var/www/website/;
    error_page 404 /404.html;
}
```

When your website doesn't work, then check `server_name` and `root` in the configuration file. After the configuration has been changed, you may have to [restart/reload the Nginx web server](https://stackoverflow.com/questions/21292533/reload-nginx-configuration).

## Problems after installation

The file `system/extensions/yellow.log` shows important information and errors. Here's an example:

```
2020-10-28 14:13:07 info Install Datenstrom Yellow 0.8.17, PHP 7.1.33, Apache 2.4.33, Mac
2020-10-28 14:13:07 info Install extension 'English 0.8.27'
2020-10-28 14:13:07 info Install extension 'German 0.8.27'
2020-10-28 14:13:07 info Install extension 'Swedish 0.8.27'
2020-10-28 14:13:17 info Add user 'Anna'
2020-12-18 21:02:42 info Update extension 'Core 0.8.42'
2020-12-18 21:02:42 error Can't write file 'system/extensions/yellow-system.ini'!
```

Check the log file for error messages. When there are write errors, then give write permissions to the affected files. When there are other errors, then contact the developer/designer and replace the affected files. When you're not 100% sure what causes problems, then activate the debug mode. This will show additional information on the current page. 

Open file `system/extensions/core.php` and change the first line to `<?php define("DEBUG", 1);`

```
YellowCore::sendPage Cache-Control: max-age=60
YellowCore::sendPage Content-Type: text/html; charset=utf-8
YellowCore::sendPage Content-Modified: Wed, 06 Feb 2019 13:54:17 GMT
YellowCore::sendPage Last-Modified: Thu, 07 Feb 2019 09:37:48 GMT
YellowCore::sendPage language:en layout:blogpages theme:stockholm parser:markdown
YellowCore::processRequest file:content/1-en/2-extensions/1-blog/page.md
YellowCore::request status:200 time:19 ms
```

Get file system information by increasing debug level to `<?php define("DEBUG", 2);`

```
YellowSystem::load file:system/extensions/yellow-system.ini
YellowUser::load file:system/extensions/yellow-user.ini
YellowLanguage::load file:system/extensions/english.txt
YellowLanguage::load file:system/extensions/german.txt
YellowLanguage::load file:system/extensions/swedish.txt
YellowLanguage::load file:system/extensions/yellow-language.ini
YellowLookup::findFileFromLocation /extensions/blog/ -> content/1-en/2-extensions/1-blog/page.md
```

Get maximum information by increasing debug level to `<?php define("DEBUG", 3);`

```
YellowSystem::load file:system/extensions/yellow-system.ini
YellowSystem::load Sitename:Datenstrom Yellow
YellowSystem::load Author:Datenstrom
YellowSystem::load Email:webmaster
YellowSystem::load Language:en
YellowSystem::load Layout:default
YellowSystem::load Theme:stockholm
```

## Related information

* [How to use the built-in web server](https://github.com/datenstrom/yellow-extensions/tree/master/source/command)
* [How to show the current version](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)
* [How to create a user account](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)

Do you have questions? [Get help](.) and [contribute](contributing-guidelines).
