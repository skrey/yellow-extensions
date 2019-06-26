Wiki 0.8.4
==========
Wiki for your website. [See demo](https://extensions.datenstrom.se/features/wiki/).

<p align="center"><img src="wiki-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/wiki.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `wiki.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use a wiki

The wiki is available on your website as `http://website/wiki/`. To show the wiki on the home page, go to your `content` folder and delete the `1-home` folder. To create a new wiki page, add a new file to the wiki folder. Set `Title` and other [settings](https://extensions.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page. Use `Tag` to group similar pages together. [Learn more](https://extensions.datenstrom.se/help/how-to-make-a-wiki).

## How to show wiki information

You can use shortcuts to show information about the wiki:

`[wikiauthors]` for a list of authors  
`[wikitags]` for a list of tags  
`[wikirelated]` for a list of pages, related to the current page    
`[wikipages]` for a list of pages, alphabetic order  
`[wikichanges]` for a list of pages, modified order  

The following arguments are available, all but the first argument are optional:

`Location` = wiki location  
`PagesMax` = number of pages to show per shortcut, 0 for unlimited  
`Author` = show pages by a specific author, `[wikipages]` or `[wikichanges]` only  
`Tag` = show pages with a specific tag, `[wikipages]` or `[wikichanges`] only  

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`WikiLocation` = wiki location  
`WikiNewLocation` = wiki location for new page  
`WikiDefaultLayout` = wiki layout for default page  
`WikiPagesMax` = number of pages to show per shortcut  
`WikiPaginationLimit` = number of entries to show per page  

The following files can be configured:

`content/shared/page-new-wiki.md` = content file for new wiki page  
`system/layouts/wikipages.html` = layout file for main wiki page  
`system/layouts/wiki.html` = layout file for individual wiki page  

## Examples

Content file with wiki page:

    ---
    Title: Wiki page
    Layout: wiki
    Tag: Example
    ---
    This is an example wiki page.

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Showing latest wiki pages:

    [wikichanges /wiki/]
    [wikichanges /wiki/ 3]
    [wikichanges /wiki/ 10]

Showing list of tags:

    [wikitags /wiki/]
    [wikitags /wiki/ 3]
    [wikitags /wiki/ 10]

Showing list of pages:

    [wikipages /wiki/]
    [wikipages /wiki/ 3]
    [wikipages /wiki/ 10 - example]

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
