Release 0.8.12
==============
Package files for website update.

<p align="center"><img src="release-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/release.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `release.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to package files for a website update

The [website update](https://github.com/datenstrom/yellow-extensions/tree/master/features/update) checks if new extensions are available in the official repository, then downloads and updates what's necessary. Your extension can become part of this update mechanism. Get a GitHub account and fork the official repository. Please make sure your extension follows our coding standard. [See example extension](https://github.com/schulle4u/yellow-extension-example).

## How to create a release

First increase the version number in your code, then create a release at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php release`, you can optionally add a directory. This will update your `extension.ini` and other files. Upload your changes to GitHub and send a pull request.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`ReleaseRepositoryDir` = directory containing repositories with extensions   

The following settings can be configured in file `extension.ini` for each extension:

`Extension` = extension name  
`Version` = extension version number  
`Description` = extension description, one line maximum  
`Published` = extension publication date, YYYY-MM-DD format  
`Developer` = feature developer  
`Translator` = language translator  
`Designer` = theme designer  

The following file operations are supported:

`create` = create if not exists  
`update` = overwrite if exists  
`delete` = delete if exists  
`careful` = only if not modified, e.g. for layout files  
`optional` = only if new installation, e.g. for content files  

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

Extension settings for a theme:

~~~
# Datenstrom Yellow extension

Extension: City
Version: 0.8.3
Description: Example theme for designers.
Published: 2019-01-24 19:42:13
Designer: Anna Svensson

system/extensions/city.php: City,city.php,create,update
system/resources/city.css: City,city.css,create,update,careful
system/resources/city-icon.png: City,city-icon.png,create
~~~

Creating releases at the command line:

`php yellow.php release`  
`php yellow.php release yellow-example`  
`php yellow.php release yellow-city`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
