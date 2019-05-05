Preview 0.8.4
=============
Show pages with image preview. [See demo](https://developers.datenstrom.se/features/).

<p align="center"><img src="preview-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/preview.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `preview.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to show a preview

Create a `[preview]` shortcut.

The following arguments are available, all arguments are optional:

`Location ` = preview location  
`Style` = preview style, e.g. `stretchable`, `simple`  
`Size` = image size, pixel or percent  

You can set `Title`, `Description` and `Image` in the [settings](https://developers.datenstrom.se/help/markdown-cheat-sheet#settings) at the top of a page.

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`PreviewDefaultImage` = Default preview image, e.g. `preview-image.png`

## Examples

Showing a preview:

    [preview]
    [preview /features/ - 30%]
    [preview /features/ simple 30%]

Showing a preview, square thumbnails:

    [preview /features/ - 64]
    [preview /features/ - 128]
    [preview /features/ simple 150]

Content file with preview settings:

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

Datenstrom. [Get support](https://developers.datenstrom.se/help/support).
