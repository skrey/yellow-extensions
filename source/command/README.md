<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Command 0.8.29
==============
Command line of the website.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Screenshot"></p>

## How to use the command line

Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php` to show available commands. The available commands depend on extensions installed. Type `php yellow.php about` to show the current version and extensions. If you don't have PHP on your computer, [see PHP installation](https://www.php.net/manual/en/install.php).

## How to build a static website

You can build a static website that works on most web servers. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php build`, you can optionally add a folder and a location. This will build a static website in the `public` folder. Upload the static website to your web server and build a new one when needed. To check for broken links type: `php yellow.php check`. To clean the static website type the following: `php yellow.php clean`.

If you don't want that a page is built, set `Build: exclude` in the [page settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) at the top of a page.

## How to build a static cache

You can build a static cache to speed up your website. Usually a page is first generated and then delivered to the browser. With a static cache files are directly delivered to the browser. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php build cache`, you can optionally add a location. Build a new cache when needed. To clean the cache type the following: `php yellow.php clean cache`.

If you don't want that a page is built, set `Build: exclude` in the [page settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) at the top of a page.

## Examples

Showing available commands at the command line:

`php yellow.php`

Showing current version and extensions at the command line:
 
`php yellow.php about` 

Building static website at the command line:

`php yellow.php build`  
`php yellow.php build public /wiki/`  
`php yellow.php build public /blog/`  

Checking static website for broken links at the command line:

`php yellow.php check`  
`php yellow.php check public /wiki/`  
`php yellow.php check public /blog/`  

Cleaning static website and files at the command line:

`php yellow.php clean`  
`php yellow.php clean public /wiki/`  
`php yellow.php clean public /blog/`  

Using the command line, overview of available commands:

`php yellow.php about` = Show current version and extensions, [requires update extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)  
`php yellow.php build` = Build static website, requires command extension  
`php yellow.php check` = Check static website, requires command extension  
`php yellow.php clean` = Clean static website, requires command extension  
`php yellow.php install` = Add extensions, [requires update extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)  
`php yellow.php publish` = Publish extensions, [requires publish extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish)  
`php yellow.php serve` = Start built-in web server, [requires serve extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/serve)  
`php yellow.php traffic` = Create traffic analytics, [requires traffic extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/traffic)  
`php yellow.php uninstall` = Remove extensions, [requires update extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)  
`php yellow.php update` = Update website, [requires update extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/update)  
`php yellow.php user` = Create user accounts, [requires edit extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)  

Preventing that a page is built:

    ---
    Title: Example page
    Build: exclude
    ---
    This page is not included in a static website or cache.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`CommandStaticBuildDirectory` = directory for generated files  
`CommandStaticDefaultFile` = default file for static website  
`CommandStaticErrorFile` = error file for static website  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
