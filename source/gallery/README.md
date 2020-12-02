Gallery 0.8.11
==============
Image gallery with popup.

<p align="center"><img src="gallery-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to add an image gallery

Create a `[gallery]` shortcut.

The following arguments are available, all but the first argument are optional:
  
`Pattern` = file name as regular expression  
`Style` = gallery style, e.g. `photoswipe`, `simple`  
`Size` = image size, pixel or percent  

The image formats GIF, JPG, PNG and SVG are supported. All media files are located in the `media` folder. The `media/images` folder is the place to store your images. The `media/thumbnails` folder contains image thumbnails. You can also create additional folders and organise files as you like.

## How to show image captions

Image captions can be configured in the language settings. Open file `system/extensions/yellow-language.ini` and add a new line for each image. A line consists of file name and description.

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

Configuring image captions in the language settings:

    Language: en
    media/images/photo.jpg: This is an example image
    media/images/photo-2387365-fika-time.jpg: Fika is an important part of life in Sweden. Photo: Taylor Franz
    media/images/photo-2391666-start-painting.jpg: Watercolors, brushes and paper. Photo: Tim Arterbury
    media/images/photo-album/screenshot-2020-01.png: A small website by Adam Engel from Sweden.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`GalleryStyle` = gallery style, e.g. `photoswipe`, `simple`  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/gallery.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [PhotoSwipe v4.1.2](https://github.com/dimsemenov/photoswipe) by Dmitry Semenov.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
