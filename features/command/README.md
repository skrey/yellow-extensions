Command 0.8.7
=============
Run commands in a terminal window.

<p align="center"><img src="command-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/command.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `command.zip` into your `system/extensions` folder.

Do not delete the [extension files](extension.ini), they are always required.

## How to use commands

You can run commands from within the installation folder. Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php` followed by more arguments. To show available commands enter no arguments. You can create a static website and do much more at the command line. See commands below.

This extension uses the [cURL library](https://github.com/curl/curl) by Daniel Stenberg to check links.

## How to build a static website

Create a static website, that works on almost any web server:

1. Go to your installation folder, where the `yellow.php` is.
2. Type the following line: `php yellow.php build`
3. Upload the static website to your web server.

This will build a static website in the `public` folder. A static website contains all necessary files, including content and media files. Upload the static website to your web server and build a new one when needed. The URL of your static website can be defined in the system settings, for example `StaticUrl: http://website/`.

As an alternative to a static website you can build a cache. This speeds up your website significantly, but the cache needs to be updated repeatedly. Here's an example: `php yellow.php build cache`. To clean the cache type the following line: `php yellow.php clean cache`.

You can test a static website without uploading it to a web server. Start the built-in web server. This is especially handy for developers, since everything runs on your own computer. Here's an example: `php yellow.php serve`. Now the website is available as `http://localhost:8000/`.

## Commands

The following commands are available:

`php yellow.php about` = Show website version  
`php yellow.php build` = Build static website    
`php yellow.php check` = Check static website  
`php yellow.php clean` = Clean static website  
`php yellow.php install` = Add extensions with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php release` = Create releases with the [release extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/release)  
`php yellow.php serve` = Start built-in web server  
`php yellow.php traffic` = Create traffic analytics with the [traffic extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/traffic)  
`php yellow.php uninstall` = Remove extensions with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php update` = Update website with the [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update)  
`php yellow.php user` = Update user account with the [edit extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit)  

## Examples

Showing available commands:

`php yellow.php`

~~~~
Datenstrom Yellow is for people who make websites.
Syntax: php yellow.php about
        php yellow.php build [directory location]
        php yellow.php check [directory location]
        php yellow.php clean [directory location]
        php yellow.php install [extension]
        php yellow.php release [directory]
        php yellow.php serve [url]
        php yellow.php traffic [days location filename]
        php yellow.php uninstall [extension]
        php yellow.php update [extension]
        php yellow.php user [option email password name]
~~~~

Building static website at the command line:

`php yellow.php build`  
`php yellow.php build public /blog/`  
`php yellow.php build public /wiki/`  

Checking static website for broken links at the command line:

`php yellow.php check`  
`php yellow.php check public /blog/`  
`php yellow.php check public /wiki/`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
