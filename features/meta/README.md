Meta 0.8.9
==========
Meta data for social media sites.

<p align="center"><img src="meta-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/meta.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `meta.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to add meta data for social media sites

This extension generates meta data for the [Open Graph protocol](http://ogp.me/). 

You can set `Title`, `Description`, `Image` and `ImageAlt` in the [settings](https://github.com/datenstrom/yellow-extensions/tree/master/features/core#settings) at the top of a page.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`MetaDefaultImage` = page image, `icon` to use the website icon  

The following files can be configured:

`system/layouts/header.html` = layout file with other meta data

## Example

Content file with meta data:

    ---
    Title: Example page
    Description: Example for your website
    Image: example.png
    ---
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

Content file with meta data from first image:

    ---
    Title: Example page
    Description: Example for your website
    ---
    [image picture.jpg]

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

## Developer

Datenstrom, Steffen Schultz. [Get support](https://extensions.datenstrom.se/help/).
