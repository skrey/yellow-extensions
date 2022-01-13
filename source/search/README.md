<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Search 0.8.14

Full-text search.

<p align="center"><img src="search-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to use a search

The search is available on your website as `http://website/search/`. It searches trough content of the entire website, only visible pages are included. To show a search field add a `[search]` shortcut. You can also add a link to the search somewhere on your website.

## Examples

Searching a website:

    coffee
    milk sugar
    "milk and sugar"

Searching a website, different filters:

    coffee author:datenstrom
    coffee language:en
    coffee tag:example

Adding a search field:

    [search]
    [search /search/]
    [search /de/search/]

Content file with search field:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [search]

Content file with link to search:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [Search all pages](/search/). [See recent changes](/search/special:changes/).

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`SearchLocation` = search location  
`SearchPaginationLimit` = number of entries to show per page, 0 for unlimited  
`SearchPageLength` = maximum page length to show  

The following files can be customised:

`system/layouts/search.html` = layout file for search  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/search.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
