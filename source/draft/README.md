<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Draft 0.8.12
============
Support for draft pages.

<p align="center"><img src="draft-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to make a draft page

Set `Status: draft` in the [page settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings-page) at the top of a page. The page will no longer be visible. You can continue to edit the page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit) and the file system.

## How to find draft pages

All draft pages are available on your website as `http://website/edit/drafts/`. You can also use the [search extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/search). Once you're logged in with your user account, you can search for `status:draft`. This allows you to find all draft pages.

## Examples

Content file with draft status:

    ---
    Title: Example page
    Status: draft
    ---
    This is an example page.

Content file with draft status for blog:

    ---
    Title: Blog page
    Published: 2013-04-07
    Author: Datenstrom
    Layout: blog
    Tag: Example
    Status: draft
    ---
    This is an example blog page.
 
Content file with draft status for wiki:

    ---
    Title: Wiki page
    Layout: wiki
    Tag: Example
    Status: draft
    ---
    This is an example wiki page.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`DraftPaginationLimit` = number of entries to show per page  

The following files can be customised:

`system/layouts/draftpages.html` = layout file with overview of draft pages  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/draft.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
