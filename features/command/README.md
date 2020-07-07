Command 0.8.16
==============
Build your website at the command line.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Screenshot"></p>

## How to use the command line

Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php` to show available commands.

## How to build a static website

You can build a static website that works on most web servers. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php build`, you can optionally add a folder and a location. This will build a static website in the `public` folder. Upload the static website to your web server and build a new one when needed. To check for broken links type: `php yellow.php check`. To clean the static website type the following: `php yellow.php clean`.

## How to build a static cache

You can speed up your website with a static cache. This improves loading time, but the cache needs to be updated repeatedly. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php build cache`, you can optionally add a location. To clean the cache type following: `php yellow.php clean cache`.

## How to start the built-in web server

You can test your website with the built-in web server. This is handy for developers, since everything runs on your own computer. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php serve`, you can optionally add a folder and a URL. Open a web browser and go to `http://localhost:8000/`.

## Commands

The following commands are available:

`php yellow.php about` to show current website version  
`php yellow.php build [directory location]` to build static website    
`php yellow.php check [directory location]` to check static website  
`php yellow.php clean [directory location]` to clean static website  
`php yellow.php install [extension]` to add extensions with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php release [directory]` to publish extensions with the [release extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/release)  
`php yellow.php serve [directory url]` to start built-in web server  
`php yellow.php traffic [days location]` to create traffic analytics with the [traffic extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/traffic)  
`php yellow.php uninstall [extension]` to remove extensions with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php update [extension]` to update website with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php user [option email password name]` to update user accounts with the [edit extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit)  

The following arguments are supported:

`directory` = directory name  
`location` = location name  
`extension` = extension name  
`url` = webserver URL  
`days` = number of days  
`option` = option for user accounts, e.g. `add`, `change`, `remove`  
`email` = email of the user  
`password` = password of the user  
`name` = name of the user  

## Examples

Showing available commands:

`php yellow.php`

Building static website at the command line:

`php yellow.php build`  
`php yellow.php build public /blog/`  
`php yellow.php build public /wiki/`  

Checking static website for broken links at the command line:

`php yellow.php check`  
`php yellow.php check public /blog/`  
`php yellow.php check public /wiki/`  

Start built-in web server at the command line:

`php yellow.php serve`  
`php yellow.php serve public http://localhost:8008/`  
`php yellow.php serve dynamic http://localhost:8008/`  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [cURL network library](https://github.com/curl/curl) by Daniel Stenberg.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
