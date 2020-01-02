Core 0.8.8
==========
Core functionality of the website.

<p align="center"><img src="core-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/core.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `core.zip` into your `system/extensions` folder.

Do not delete the [extension files](extension.ini), they are always required.

## How to make a secure website

Make sure your website supports [data encryption](https://www.ssllabs.com/ssltest/). When there are problems, please contact your web hosting provider. It's best if your website automatically redirects from HTTP to HTTPS, so the Internet connection is always encrypted.

If you can't trust everyone who edits a website, then enable the safe mode. Open file `system/settings/system.ini` and change `CoreSafeMode: 1`. Users are allowed to use [Markdown](https://github.com/datenstrom/yellow-extensions/tree/master/features/markdown), but cannot use HTML and JavaScript.

## How to make a multilingual website

The installation comes with three languages and you can install more [languages](https://github.com/datenstrom/yellow-extensions/tree/master/languages). If you want to translate an entire website, then enable the multi language mode. Open file `system/settings/system.ini` and change `CoreMultiLanguageMode: 1`. Go to your `content` folder and create a new folder for each language.

## How to hide a page

Set `Status: unlisted` in the [settings](#settings) at the top of a page. The page will no longer be visible. You can chose between different status values, to hide a page and control who can access it.

## How to redirect a page

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
`Status` = page status, e.g. `public`  
`Redirect` = redirect to another page or URL  
`Navigation` = page navigation  
`Header` = page header  
`Footer` = page footer  
`Sidebar` = page sidebar  

The following settings can be configured in file `system/settings/system.ini`:

`Sitename` = name of the website  
`Author` = name of the webmaster  
`Email` = email of the webmaster  
`Language` = default language  
`Layout` = default layout  
`Theme` = default theme  
`Parser` = default page parser  
`Status` = default page status, e.g. `public`  
`Navigation` = default page navigation  
`Header` = default page header  
`Footer` = default page footer  
`Sidebar` = default page sidebar  

`CoreStaticUrl` = URL for [static website](https://github.com/datenstrom/yellow-extensions/tree/master/features/command)  
`CoreStaticDefaultFile` =  default file for static website  
`CoreStaticErrorFile` = error file for static website  
`CoreStaticDir` = directory for generated files  
`CoreCacheDir` = directory for cached files  
`CoreTrashDir` = directory for deleted files  
`CoreServerUrl` = URL of the website, `auto` for automatic detection    
`CoreServerTimezone` = timezone of the website  
`CoreSafeMode` = enable safe mode with restrictions, 1 or 0  
`CoreMultiLanguageMode` = enable multi language mode, 1 or 0  

The following page status values are supported:

`public` = page is a normal page  
`private` = page is not visible, user needs to log in or enter the password, requires [private extension](https://github.com/schulle4u/yellow-extensions-schulle4u/tree/master/private)  
`draft` = page is not visible, user needs to log in, requires [draft extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/draft)  
`unlisted` = page is not visible, but can be accessed with the correct link  
`shared` = page is not available, but can be included in other pages  
`ignore` = page is ignored when building a static website  

The following files can be configured:

`content/shared/page-new-default.md` = content file for new page  
`content/shared/header.md` = content file for page header, optional  
`content/shared/footer.md` = content file for page footer, optional  
`system/layouts/default.html` = layout file for normal page  
`system/layouts/error.html` = layout file for error page  
`system/layouts/header.html` = layout file for default header  
`system/layouts/footer.html` = layout file for default footer  
`system/layouts/navigation.html` = layout file for default navigation  
`system/layouts/pagination.html` = layout file for default pagination  

## Examples

Folder structure for normal website:

~~~
├── content
│   ├── 1-home 
│   └── shared    
├── media             
└── system  
~~~

Folder structure for multilingual website:

~~~
├── content
│   ├── 1-en 
│   │   ├── 1-home 
│   │   └── shared    
│   ├── 2-de          
│   └── 3-fr   
├── media             
└── system  
~~~

Folder structure for multilingual website, with automatic language detection:

~~~
├── content
│   ├── 1-en 
│   │   ├── 1-home 
│   │   └── shared    
│   ├── 2-de          
│   ├── 3-fr   
│   └── default   
├── media             
└── system  
~~~

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

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
