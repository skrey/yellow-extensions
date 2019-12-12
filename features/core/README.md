Core 0.8.6
==========
Core functionality.

<p align="center"><img src="core-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `core.zip` into your `system/extensions` folder.

Do not delete the [extension files](extension.ini), they are always required.

## How to show website version

You can use the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) or the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command) to show website version. You can open the [log file](https://extensions.datenstrom.se/help/api#troubleshooting) to show system diagnostics. You can also add a `[yellow]` shortcut to a page. See examples below.

## How to hide a page

Set `Status: unlisted` in the [settings](#settings) at the top of a page. The page will no longer be visible. You can chose between different status values, to hide a page and control who can access it.

## How to redirect to another page

Set `Redirect` in the [settings](#settings) at the top of a page. The page will redirect to another page or URL. You can continue to edit the page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) and the file system.

## Settings

The following settings can be configured at the top of a page:

`Title` = page title  
`TitleContent` = page title shown in content  
`TitleNavigation` = page title shown in navigation  
`TitleHeader` = page title shown in web browser  
`TitleSlug` = page title used for saving the page  
`Description` = page description  
`Author` = page author(s), comma separated  
`Email` = email of page author  
`Language` = page language  
`Layout` = page layout  
`LayoutNew` = page layout for creating a new page  
`Theme` = page theme  
`Parser` = page parser  
`Image` = page image  
`ImageAlt` = alternative text for page image  
`Modified` = page modification date, YYYY-MM-DD format  
`Published` = page publication date, YYYY-MM-DD format  
`Tag` = page tag(s) for categorisation, comma separated  
`Status` = page status for workflow, e.g. `public`  
`Redirect` = redirect to a another page or URL  
`Navigation` = page navigation  
`Header` = page header  
`Footer` = page footer  
`Sidebar` = page sidebar  

The following status values are supported:

`public` = page is a normal page  
`private` = page is not visible, user needs to log in or enter the password, requires [private extension](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private)  
`draft` = page is not visible, user needs to log in, requires [draft extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/draft)  
`unlisted` = page is not visible, but can be accessed with the correct link  
`shared` = page is not available, but can be included in other pages  
`ignore` = page is ignored when building a static website  

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

## Examples

Content file with website version:

    ---
    Title: Example page
    ---
    This website is made with [yellow].
    
    [yellow about]


Content file with unlisted status:

    ---
    Title: Unlisted page
    Status: unlisted
    ---
    This page is not visible in navigation and search results.

Content file with redirection:

    ---
    Title: Redirect page
    Redirect: https://datenstrom.se/yellow/
    ---
    This page redirects to another page.

Showing website version at the command line:
 
`php yellow.php about`  

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
