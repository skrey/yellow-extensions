Meta 0.8.4
==========
Meta data for social media sites.

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/meta.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `meta.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to add meta data

The extension adds meta data for [Twitter cards](https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/abouts-cards) and the [Open Graph protocol](http://ogp.me/) by Facebook. 

You can set `Title`, `Description` and `Image` in the [settings](https://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`MetaTwitterUser` = Twitter username for your website

## Example

Content file with meta settings:

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

## Developer

Datenstrom and Steffen Schultz. [Get support](https://developers.datenstrom.se/help/support).
