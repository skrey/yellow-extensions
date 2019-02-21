Update 0.8.1
============
Keep your website up to date.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/update.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `update.zip` into your `system/plugins` folder.

Do not delete the [extension files](update.ini), they are always required.

## How to update a website

The first option is to update your website in a [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit). Log in with your user account. Go to the settings and check for updates. Your website will show when updates are available. Only the webmaster can update the website. The webmaster's email is defined in file `system/config/config.ini`.

The second option is to update your website at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php update` followed by optional extensions. You can force the update if necessary. Deleted files can be found in the `system/trash` folder. See example below.

## How to add more extensions

You can download [features](https://developers.datenstrom.se/features/) and [themes](https://developers.datenstrom.se/themes/), copy files to your web hosting. You can also add more extensions at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php install` followed by optional extensions. See example below.

The extension uses the [cURL library](https://github.com/curl/curl) by Daniel Stenberg to download files.

## Example

Updating website at the command line:
 
`php yellow.php update`  
`php yellow.php update YellowCore`  
`php yellow.php update YellowCore force`  

Adding extensions at the command line:

`php yellow.php install`  
`php yellow.php install YellowGallery`  
`php yellow.php uninstall YellowGallery`  

## Developer

Datenstrom. [Get support](https://developers.datenstrom.se/help/support).
