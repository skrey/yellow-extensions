Core 0.8.6
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

## How to hide a page

All `content` folders are available on your website. Set `Status` in the [settings](https://extensions.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. You can chose between different states, to make a page unavailable and control who can see it. See settings below.

## How to redirect to another page

Set `Redirect` in the [settings](https://extensions.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. The page will redirect to another page or URL. You can continue to edit the page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) and the file system. 

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

The following page states are supported:

`public` = page is a normal page  
`private` = page ist not available, user needs to enter a password, requires [private extension](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private)  
`draft` = page ist not available, user needs to log in, requires [draft extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/draft)  
`hidden` = page ist not available, results in "file not found" error  
`ignore` = page is ignored when building a static website  

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

Content file with hidden status:

    ---
    Title: Footer
    Status: hidden
    ---
    [Made with Datenstrom Yellow](https://datenstrom.se/yellow/)

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
