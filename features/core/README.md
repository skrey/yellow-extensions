Core 0.8.5
==========
Core functionality for your website.

<p align="center"><img src="core-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `core.zip` into your `system/extensions` folder.

Do not delete the [extension files](extension.ini), they are always required.

## How to show website version

You can use the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) or the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command) to show website version. You can open the [log file](https://extensions.datenstrom.se/help/api#troubleshooting) to show system diagnostics. You can also use shortcuts to show the current website version. See examples below.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`Sitename` = name of the website  
`Author` = name of the webmaster  
`Email` = email of the webmaster  
`Timezone` = default timezone  
`Language` = default language  
`Layout` = default layout  
`Theme` = default theme  
`SafeMode` = enable [safe mode](https://extensions.datenstrom.se/help/security-configuration#safe-mode) with restrictions, 1 or 0  
`MultiLanguageMode` = enable [multi language mode](https://extensions.datenstrom.se/help/language-configuration#multi-language-mode), 1 or 0  

These are the most important settings. For a complete list see [configuration file](https://github.com/datenstrom/yellow/blob/master/system/settings/system.ini).

## Examples

Content file with website version:

    ---
    Title: Example page
    ---
    This website is made with [yellow].

Content file with website version, including extensions:

    ---
    Title: Example page
    ---
    This website is made with [yellow].
    
    [yellow about]

Footer file with link:

    ---
    Title: Footer
    Status: hidden
    ---
    [Made with Datenstrom Yellow](https://datenstrom.se/yellow/)

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
