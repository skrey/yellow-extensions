<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

Slider 0.8.13
=============
Image gallery with slider.

<p align="center"><img src="slider-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to add an image gallery

Create a `[slider]` shortcut.

The following arguments are available, all but the first argument are optional:
  
`Pattern` = file name as regular expression  
`Style` = gallery style, e.g. `loop`, `fade`, `slide`  
`Size` = image size, pixel or percent  
`Autoplay` = play images automatically, delay time in milliseconds  

The image formats GIF, JPG, PNG and SVG are supported. All media files are located in the `media` folder. The `media/images` folder is the place to store your images. The `media/thumbnails` folder contains image thumbnails. You can also create additional folders and organise files as you like.

## Examples

Adding an image gallery:

    [slider photo.*jpg]
    [slider photo.*jpg - 75%]
    [slider photo.*jpg - 50%]

Adding an image gallery, play automatically:

    [slider photo.*jpg - 50% 1000]
    [slider photo.*jpg - 50% 2000]
    [slider photo.*jpg - 50% 5000]

Adding an image gallery, different styles:

    [slider photo.*jpg loop]
    [slider photo.*jpg fade]
    [slider photo.*jpg slide]

Adding an image gallery from a subfolder:

    [slider photo-album/ loop]
    [slider photo-album/ fade]
    [slider photo-album/ slide]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`SliderStyle` = gallery style, e.g. `loop`, `fade`, `slide`  
`SliderAutoplay` = play images automatically, delay time in milliseconds  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/slider.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Splide 2.4.21](https://github.com/Splidejs/splide) by Naotoshi Fujita.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
