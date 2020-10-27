Meta 0.8.14
===========
Meta data for social media sites.

<p align="center"><img src="meta-screenshot.png?raw=true" width="795" height="512" alt="Screenshot"></p>

## How to add meta data for social media sites

This extension generates meta data for the [Open Graph protocol](http://ogp.me/). 

You can set `Title`, `Description`, `Image` and `ImageAlt` in the [settings](https://github.com/datenstrom/yellow-extensions/tree/master/source/core#settings) at the top of a page. You can configure further meta data in the HTML header, for example in file `system/layouts/header.html`.

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
    [image photo.jpg]

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna pizza. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
    in culpa qui officia deserunt mollit anim id est laborum.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`MetaDefaultImage` = page image, `favicon` to use the default icon of the website  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/meta.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Datenstrom, Steffen Schultz. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
