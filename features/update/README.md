Update 0.8.13
=============
Keep your website up to date.

<p align="center"><img src="update-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/update.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `update.zip` into your `system/extensions` folder.

Please do not delete the [extension files](extension.ini), they are always required.

## How to update a website

The first option is to update your website in a [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit). Log in with your user account. Go to the settings and check for updates. Your website will show when updates are available. You need to have update rights to update a website. All user accounts are stored in file `system/settings/user.ini`. 

The second option is to update your website at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php update` followed by optional extensions. You can force the update if necessary. Deleted files can be found in the `system/trash` folder.

## How to add an extension

You can download and add extensions as ZIP-files. You can also add extensions at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php install` followed by more arguments. You can also remove extensions at the command line.

This extension uses the [cURL library](https://github.com/curl/curl) by Daniel Stenberg to download files. Developers can use the [release extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/release) to package files.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`UpdateExtensionUrl` = URL of repository with extensions  
`UpdateVersionFile` = version information about extensions  
`UpdateWaffleFile` = file information about extensions  
`UpdateNotification` = pending notifications  

## Examples

Updating website at the command line:
 
`php yellow.php update`  
`php yellow.php update core`  
`php yellow.php update core force`  

Adding extensions at the command line:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german french`  

Removing extensions at the command line:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german french`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
