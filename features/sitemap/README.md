Sitemap 0.8.2
=============
Sitemap for your website. [See demo](https://extensions.datenstrom.se/sitemap/).

<p align="center"><img src="sitemap-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/sitemap.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `sitemap.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to use a sitemap

The sitemap is available as `http://website/sitemap/` and `http://website/sitemap/page:sitemap.xml`. It's an overview of the entire website, only visible pages are included. You can add a link to the sitemap somewhere on your website. See examples below.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`SitemapLocation` = sitemap location  
`SitemapFileXml` = sitemap file name with XML information  
`SitemapPaginationLimit` = number of entries to show per page  

## Examples

Content file with link to sitemap:

    ---
    Title: Example page
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

    [See all pages](/sitemap/).

Footer file with sitemap:

    ---
    Title: Footer
    Status: shared
    ---
    [Sitemap](/sitemap/) &nbsp; 
    [Made with Datenstrom Yellow](https://datenstrom.se/yellow/)

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
