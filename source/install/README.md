<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Install 0.8.49
==============
Install a brand new, shiny website.

<p align="center"><img src="install-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to install a website

Installing is unzipping one file and you are ready to go. The installer first checks whether all requirements have been met. Then you can create a user account and choose what kind of website you want to make. The installer will delete itself after it has done its work and your website is immediately available. [Learn more about installation](https://datenstrom.se/yellow/help/how-to-get-started).

## How to make an installation package

An installation package consists of several extensions, the installer and additional files. The installer consists of the files `install.php` and ` install-languages.zip`. You can download more [extension files](https://github.com/datenstrom/yellow-extensions/tree/master/zip), rename and copy them into your `system/extensions` folder. They are offered as an option during installation. [Learn more about packaging extensions](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish).

## Examples

Extension settings for the installer:

~~~
Extension: Install
Version: 0.8.49
Description: Install a brand new, shiny website.
Published: 2021-05-31 11:35:00
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/install
Developer: Datenstrom and various translators
system/extensions/install.php: install.php, create, optional
system/extensions/install-languages.zip: install-languages.zip, create, optional
system/extensions/install-blog.zip: install-blog.zip, create, optional
system/extensions/install-wiki.zip: install-wiki.zip, create, optional
~~~

Extension settings for the installer, additional files:

~~~
Extension: Install
Version: 0.8.49
Description: Install a brand new, shiny website.
Published: 2021-05-31 11:35:00
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/install
Developer: Datenstrom and various translators
system/extensions/install.php: install.php, create, optional
system/extensions/install-languages.zip: install-languages.zip, create, optional
system/extensions/install-blog.zip: install-blog.zip, create, optional
system/extensions/install-wiki.zip: install-wiki.zip, create, optional
content/1-home/page.md: page.md, create, optional
content/shared/page-error-404.md: page-error-404.md, create, optional
content/shared/page-new-default.md: page-new-default.md, create, optional
media/downloads/yellow.pdf: yellow.pdf, create, optional
~~~

## Settings

The extension settings can be found in file `system/extensions/update-current.ini`.

## Installation

This extension is part of a bigger installation package.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
