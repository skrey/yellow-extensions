<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

Core 0.8.49
===========
Core functionality of the website.

<p align="center"><img src="core-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to edit a website on the computer

You can use your favorite text editor and change everything in the file manager. All content is located in your `content` folder. Every folder has a file called `page.md`. Basically, what you see in the file manager is the website you get. You can [start the built-in web server](https://github.com/datenstrom/yellow-extensions/tree/master/source/command#how-to-start-the-built-in-web-server) or [build a static website](https://github.com/datenstrom/yellow-extensions/tree/master/source/command#how-to-build-a-static-website).

## How to customise a website on the computer

If you want to adjust HTML, then change the layout. The default layout is defined in file `system/extensions/yellow-system.ini`. A different layout can be defined in the [page settings](#settings-page) at the top of each page, for example `Layout: default`. All layout files are stored in your `system/layouts` folder. Of course there's an [API for developers](https://datenstrom.se/yellow/help/api-for-developers).

If you want to adjust CSS, then change the theme. The default theme is defined in file `system/extensions/yellow-system.ini`. A different theme can be defined in the [page settings](#settings-page) at the top of each page, for example `Theme: stockholm`. Strictly speaking, themes consist not only of CSS but of multiple files. All theme files are stored in your `system/themes` folder. There are [themes to download](https://github.com/datenstrom/yellow-extensions#themes) and an [example for designers](https://github.com/schulle4u/yellow-extension-basic).

## How to hide a page

Set `Status: unlisted` in the [page settings](#settings-page) at the top of a page. The page is no longer visible in navigation and search results. You can choose between different [status values](#settings-status), to control who can see and access a page.

## How to redirect a page

Set `Redirect` in the [page settings](#settings-page) at the top of a page. The page is redirected to another page or URL. You can continue to edit the page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit) and the file system.

## Examples

Content file with normal page:

    ---
    Title: Normal page
    ---
    This is an example page.

Content file with unlisted page:

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
    This page is redirected to another page.

## Settings

<a id="settings-system"></a>The following settings can be configured in file `system/extensions/yellow-system.ini`:

`Sitename` = name of the website  
`Author` = name of the webmaster  
`Email` = email of the webmaster  
`Theme` = default theme  
`Language` = default language  
`Layout` = default layout  
`Parser` = default page parser  
`Status` = default page status, [supported status values](#settings-status)  
`CoreStaticUrl` = URL of the static website  
`CoreServerUrl` = URL of the website, `auto` for automatic detection  
`CoreServerTimezone` = timezone of the website  
`CoreMultiLanguageMode` = enable multi language mode, 1 or 0  
`CoreTrashTimeout` = storage of deleted files in seconds  

<a id="settings-page"></a>The following settings can be configured at the top of a page:

`Title` = page title  
`TitleContent` = page title shown in content  
`TitleNavigation` = page title shown in navigation  
`TitleHeader` = page title shown in web browser  
`TitleSlug` = page title used for saving the page  
`Description` = page description  
`Author` = page author(s), comma separated  
`Email` = email of page author  
`Theme` = page theme  
`Language` = page language  
`Layout` = page layout  
`LayoutNew` = page layout for creating a new page  
`Parser` = page parser  
`Status` = page status, [supported status values](#settings-status)  
`Redirect` = redirect to another page or URL  
`Image` = page image  
`ImageAlt` = description of the page image  
`Modified` = page modification date, YYYY-MM-DD format  
`Published` = page publication date, YYYY-MM-DD format  
`Tag` = page tag(s) for categorisation, comma separated  
`Build` = page option(s) for building a static website, comma separated  
`Comment` = page option(s) for showing comments, comma separated  

<a id="settings-status"></a>The following page status values are supported:

`public` = page is a normal page  
`private` = page is not visible, user needs to enter password, [requires private extension](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private)  
`draft` = page is not visible, user needs to log in, [requires draft extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/draft)  
`unlisted` = page is not visible, but can be accessed with the correct link  
`shared` = page is not available, but can be included in other pages  

<a id="settings-files"></a>The following files can be customised:

`content/shared/page-new-default.md` = content file for new page  
`content/shared/page-error-404.md` = content file for error page  
`system/layouts/default.html` = layout file for default page  
`system/layouts/error.html` = layout file for error page  
`system/layouts/header.html` = layout file for default HTML header  
`system/layouts/footer.html` = layout file for default HTML footer  
`system/layouts/navigation.html` = layout file for default HTML navigation  
`system/layouts/pagination.html` = layout file for default HTML pagination  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
