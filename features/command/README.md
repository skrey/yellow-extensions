Command 0.8.17
==============
Command line of the website.

<p align="center"><img src="command-screenshot.png?raw=true" width="794" height="478" alt="Screenshot"></p>

## How to use the command line

Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php` to show available commands.

## How to build a static website

You can build a static website that works on most web servers. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php build`, you can optionally add a folder and a location. This will build a static website in the `public` folder. Upload the static website to your web server and build a new one when needed. To check for broken links type: `php yellow.php check`. To clean the static website type the following: `php yellow.php clean`.

## How to build a static cache

You can speed up your website with a static cache. This improves loading time, but the cache needs to be updated repeatedly. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php build cache`, you can optionally add a location. To clean the cache type following: `php yellow.php clean cache`.

## How to start the built-in web server

You can test your website with the built-in web server. This is handy for developers, since everything runs on your own computer. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php serve`, you can optionally add a folder and a URL. Open a web browser and go to `http://localhost:8000/`.

## Examples

Content file with normal page:

    ---
    Title: Example page
    ---
    This page is included in static website.

Content file with excluded page:

    ---
    Title: Example page
    Build: exclude
    ---
    This page is not included in static website.

Showing available commands at the command line:

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

## Commands

The following commands are available:

`php yellow.php about` to show current version with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php build` to build static website with the command extension  
`php yellow.php check` to check static website with the command extension  
`php yellow.php clean` to clean static website with the command extension  
`php yellow.php install` to add extensions with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php release` to publish extensions with the [release extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/release)  
`php yellow.php serve` to start built-in web server with the command extension  
`php yellow.php traffic` to create traffic analytics with the [traffic extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/traffic)  
`php yellow.php uninstall` to remove extensions with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php update` to update website with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php user` to update user accounts with the [edit extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit)  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
