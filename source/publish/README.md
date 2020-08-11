Publish 0.8.25
==============
Package and publish extensions.

<p align="center"><img src="publish-screenshot.png?raw=true" width="794" height="478" alt="Screenshot"></p>

## How to package an extension

The [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/update) takes care of updating websites. Your extension can become part of this process. Take a look at the [example extension](https://github.com/schulle4u/yellow-extension-example) and [basic extension](https://github.com/schulle4u/yellow-extension-basic). They show you which files and settings are required. Please make sure that your extension follows our coding and documentation standards.

## How to publish an extension

First increase the version number in your PHP code, then publish your extension at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/source/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php publish` followed by a folder. This will update all necessary files. Upload your changes to GitHub and create a [pull request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request-from-a-fork) for `datenstrom/yellow-extensions`.

The first time you will be asked for your source code directory. [Fork the official repository](https://github.com/datenstrom/yellow-extensions) and store a copy on your computer.

## Examples

Extension settings for a feature:

~~~
# Datenstrom Yellow extension settings

Extension: Example
Version: 0.8.3
Description: Example feature for developers.
HelpUrl: https://github.com/annasvensson/yellow-extension-example
DownloadUrl: https://github.com/annasvensson/yellow-extension-example/archive/master.zip
Published: 2019-01-24 19:42:13
Developer: Anna Svensson
Tag: feature
system/extensions/example.php: Example,example.php,create,update
~~~

Extension settings for a language:

~~~
# Datenstrom Yellow extension settings

Extension: English
Version: 0.8.3
Description: English/English with language 'en'.
HelpUrl: https://github.com/datenstrom/yellow-extensions/tree/master/source/english
DownloadUrl: https://github.com/datenstrom/yellow-extensions/raw/master/zip/english.zip
Published: 2019-01-24 19:42:13
Translator: Mark Seuffert
Tag: language
system/extensions/english.php: English,english.php,create,update
system/extensions/english.txt: English,english.txt,create,update
~~~

Extension settings for a theme:

~~~
# Datenstrom Yellow extension settings

Extension: Basic
Version: 0.8.3
Description: Example theme for designers.
HelpUrl: https://github.com/annasvensson/yellow-extension-basic
DownloadUrl: hhttps://github.com/annasvensson/yellow-extension-basic/archive/master.zip
Published: 2019-01-24 19:42:13
Designer: Anna Svensson
Tag: theme
system/extensions/basic.php: Basic,basic.php,create,update
system/themes/basic.css: Basic,basic.css,create,update,careful
system/themes/basic.png: Basic,basic.png,create
~~~

Publishing extensions at the command line:

`php yellow.php publish yellow-extension-basic`  
`php yellow.php publish yellow-extension-example`  
`php yellow.php publish yellow-extensions/source/english`  

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`PublishSourceCodeDirectory` = directory with extensions source code  

The following settings can be configured in file `extension.ini`:

`Extension` = extension name  
`Version` = extension version number  
`Description` = extension description, one line maximum  
`HelpUrl` = extension help page  
`DownloadUrl` = extension download address  
`Published` = extension publication date, YYYY-MM-DD format  
`Status` = extension status, [supported status values](#settings-status)  
`Developer` = feature developer  
`Translator` = language translator  
`Designer` = theme designer  
`Tag` = extension tag(s) for categorisation, comma separated  

<a id="settings-status"></a>The following extension status values are supported:

`public` = extension is visible in official repository  
`unlisted` = extension is not visible in official repository  
`unpublished` = extension is not available in official repository  

<a id="settings-actions"></a>The following file actions are supported:

`create` = create file if not exists  
`update` = overwrite file if exists  
`delete` = delete file if exists  
`multi-language` = use file from corresponding subfolder  
`optional` = only if new installation  
`careful` = only if not modified  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/publish.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
