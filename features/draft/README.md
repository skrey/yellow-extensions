Draft 0.8.3
===========
Support for draft pages.

<p align="center"><img src="draft-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/draft.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `draft.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to make a draft page

Set `Status: draft` in the [settings](https://github.com/datenstrom/yellow-extensions/tree/master/features/core#settings) at the top of a page. The page will no longer be visible. You can continue to edit a draft page in the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) and the file system.

## How to show drafts

All draft pages are available on your website as `http://website/edit/drafts/`. It shows a list of pages in alphabetical order. You can also use the [search extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/search). Once you're logged in you can search for `status:draft`, this allows you to show draft pages. For example log in and search for `status:draft coffee` to see draft pages about coffee. 

## Examples

Content file with draft status:

    ---
    Title: Example page
    Status: draft
    ---
    This is an example page.

Content file with draft status for blog:

    ---
    Title: Blog example
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

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
