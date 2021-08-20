<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Update 0.8.55

Keep your website up to date.

<p align="center"><img src="update-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to update a website

The first option is to update your website in a [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit). Log in with your user account. Go to the settings and check for updates. Your website will show when updates are available. You need to have update rights to update a website. All user accounts are stored in file `system/extensions/yellow-user.ini`. 

The second option is to update your website at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/source/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php update`. You can optionally add the name of an extension. Deleted files can be found in the `system/trash` folder.

## How to extend a website

Your website only comes with the bare essentials. You can download and add extensions as ZIP-files. You can also add extensions at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/source/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php install` followed by more arguments. You can also remove extensions at the command line.

## How to show the current version

You can show the current version of your website in a [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit). Log in with your user account. Go to the settings. You can also show the current version at the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/source/command). Open a terminal window. Go to your installation folder, where the `yellow.php` is. Type `php yellow.php about`. 

You can use shortcuts to show information about the website:

`[yellow about]` for current version  
`[yellow error]` for current error message  
`[yellow log]` for latest entries in log file  

## Examples

Content file with current version:

    ---
    Title: Example page
    ---
    This page shows the current version of the website.

    ! [yellow about]

Content file with log file:

    ---
    Title: Example page
    ---
    This page shows the latest entries in log file.

    ! [yellow log]

Showing current version and extensions at the command line:
 
`php yellow.php about`

Updating website at the command line:
 
`php yellow.php update`  
`php yellow.php update gallery`  
`php yellow.php update english german swedish`  

Adding extensions at the command line:

`php yellow.php install`  
`php yellow.php install gallery`  
`php yellow.php install english german swedish`  

Removing extensions at the command line:

`php yellow.php uninstall`  
`php yellow.php uninstall gallery`  
`php yellow.php uninstall english german swedish`  

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`UpdateExtensionUrl` = repository with extensions  
`UpdateExtensionFile` = file with extension settings  
`UpdateLatestFile` = file with latest update settings  
`UpdateCurrentFile` = file with current update settings  
`UpdateCurrentRelease` = currently installed product release  
`UpdateEventPending` = pending events  
`UpdateEventDaily` = time of next daily event  

The log file can be found in file `system/extensions/yellow.log`.

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/update.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
