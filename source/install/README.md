<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Install 0.8.52
==============
Install a brand new, shiny website.

<p align="center"><img src="install-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to install a website

Installing is unzipping one file and you are ready to go. The installer first checks whether all requirements have been met, for example whether the web server is working properly. Then the installer let's you create a user account and asks what you want to make. After the installer has done its work it will delete itself. [Learn more about installation](https://datenstrom.se/yellow/help/how-to-get-started).

## How to make an installation package

An installation package consists of the installer `install.php`, the file `install-languages.zip` and the basic framework of a website. The standard installation package also includes the blog and the wiki. You can download more [extensions](https://github.com/datenstrom/yellow-extensions/tree/master/zip), rename and copy them into your `system/extensions` folder. They will be offered as an option during installation.

## Examples

Extension settings for the installer:

~~~
Extension: Install
Version: 0.8.52
Description: Install a brand new, shiny website.
Published: 2021-07-10 18:50:00
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/install
Developer: Datenstrom and various translators
system/extensions/install.php: install.php, create, optional
system/extensions/install-languages.zip: install-languages.zip, create, optional
system/extensions/install-blog.zip: install-blog.zip, create, optional
system/extensions/install-wiki.zip: install-wiki.zip, create, optional
content/1-home/page.md: page.md, create, optional
media/downloads/yellow.pdf: yellow.pdf, create, optional
~~~

## Settings

The extension settings can be found in file `system/extensions/update-current.ini`.

The following files will be customised during installation:

`content/1-home/page.md` = content file for home page  
`content/shared/page-new-default.md` = content file for new page  
`content/shared/page-new-blog.md` = content file for new blog page  
`content/shared/page-new-wiki.md` = content file for new wiki page  
`content/shared/page-error-404.md` = content file for error page  
`system/extensions/yellow-system.ini` = file with system settings  
`system/extensions/yellow-user.ini` = file with user settings  
`system/extensions/yellow-language.ini` = file with language settings  

## Installation

This extension is part of the [standard installation package](https://github.com/datenstrom/yellow).

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
