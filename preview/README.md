Preview plugin 0.6.8
====================
Link pages with image preview.

## How do I install this?

1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download and install image plugin](https://github.com/datenstrom/yellow-plugins/tree/master/image).
2. [Download plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/preview.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `preview.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

## How to add a preview?

Create a `[preview]` shortcut.

The following arguments are available:

`LOCATION ` = location of parent page  
`STYLE` = preview list style  
`SIZE` = image size, pixel or percent  

For every page there has to be an jpg-image of similar file name in your `media/images` folder.

## Example

Adding a preview:

    [preview]
    [preview /themes/]
    [preview /themes/ threepages 33%]

CSS for three pages in a row:

    .content .threepages { margin:0; padding:0; list-style:none; width:100%; }
    .content .threepages li { padding-bottom:1em; text-align:center; vertical-align:top; display:inline-block; width:32%; }
