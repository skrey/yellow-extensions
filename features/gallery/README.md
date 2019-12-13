Gallery 0.8.3
=============
Image gallery with popup.

<p align="center"><img src="gallery-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/gallery.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `gallery.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to add an image gallery

Create a `[gallery]` shortcut.

The following arguments are available, all but the first argument are optional:
  
`Pattern` = file name as regular expression  
`Style` = gallery style, e.g. `photoswipe`, `simple`  
`Size` = image size, pixel or percent

This extension uses [PhotoSwipe v4.1.2](https://github.com/dimsemenov/photoswipe) by Dmitry Semenov. It's licensed under [MIT license](https://opensource.org/licenses/MIT).

## How to show image captions

Image captions can be configured in file `system/settings/text.ini`. [Learn more](https://extensions.datenstrom.se/help/adjusting-system#text-settings).

## Examples

Adding an image gallery:

    [gallery photo.*jpg]
    [gallery photo.*jpg - 20%]
    [gallery photo.*jpg simple 20%]

Adding an image gallery, square thumbnails:

    [gallery photo.*jpg - 64]
    [gallery photo.*jpg - 150]
    [gallery photo.*jpg simple 150]

Adding an image gallery from a subfolder, square thumbnails:

    [gallery photo-album/ - 64]
    [gallery photo-album/ - 150]
    [gallery photo-album/ simple 150]

Text settings for image captions:

    picture.jpg: This is an example image caption.
    photo-2387365-fika-time.jpg: Fika is an important part of life in Sweden. Photo: Taylor Franz
    photo-2391666-start-painting.jpg: Watercolors, brushes and paper. Photo: Tim Arterbury

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).
