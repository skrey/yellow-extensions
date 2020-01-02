Release 0.8.15
==============
Package and publish website files.

<p align="center"><img src="release-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/release.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `release.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to package files

The [update extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/update) checks if new extensions are available in the official repository, then downloads and updates necessary files. Your extension can become part of this update mechanism. Get a GitHub account and fork the official repository `datenstrom/yellow-extensions`. Please make sure your extension follows our coding/documentation standard. [See contributing guidelines](https://github.com/datenstrom/yellow-extensions/blob/master/CONTRIBUTING.md).

## How to create a release

First increase the version number in your code, then create a release at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php release`, you can optionally add a directory. This will update all files. Upload your changes to GitHub and send a pull request.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`ReleaseRepositoryDir` = directory containing repositories with extensions   

The following settings can be configured in file `extension.ini`:

`Extension` = extension name  
`Version` = extension version number  
`Description` = extension description, one line maximum  
`Published` = extension publication date, YYYY-MM-DD format  
`Language` = extension language(s), comma separated  
`Status` = extension status, e.g. `public`  
`Developer` = feature developer  
`Translator` = language translator  
`Designer` = theme designer  

The following file operations are supported:

`create` = create if not exists  
`update` = overwrite if exists  
`delete` = delete if exists  
`optional` = only if new installation, e.g. for content files  
`careful` = only if not modified, e.g. for system files  
`multi-language` = use file from corresponding subfolder  

The following extension status values are supported:

`public` = extension is visible in official repository  
`unlisted` = extension is not visible in official repository  
`unreleased` = extension is not available in official repository  

## Examples

Extension settings for a feature:

~~~
# Datenstrom Yellow extension

Extension: Example
Version: 0.8.3
Description: Example feature for developers.
Published: 2019-01-24 19:42:13
Developer: Anna Svensson

system/extensions/example.php: Example,example.php,create,update
~~~

Extension settings for a language:

~~~
# Datenstrom Yellow extension

Extension: English
Version: 0.8.3
Description: English/English with language 'en'.
Published: 2019-01-24 19:42:13
Translator: Anna Svensson

system/extensions/english.php: English,english.php,create,update
system/extensions/english-language.txt: English,english-language.txt,create,update
~~~

Extension settings for a theme:

~~~
# Datenstrom Yellow extension

Extension: Basic
Version: 0.8.3
Description: Example theme for designers.
Published: 2019-01-24 19:42:13
Designer: Anna Svensson

system/extensions/basic.php: Basic,basic.php,create,update
system/resources/basic.css: Basic,basic.css,create,update,careful
system/resources/basic-icon.png: Basic,basic-icon.png,create
~~~

Creating releases at the command line:

`php yellow.php release`  
`php yellow.php release yellow-extension-example`  
`php yellow.php release yellow-extension-basic`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
