<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a> &nbsp; <a href="README-sv.md">Svenska</a></p>

# Slider 0.8.13

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

Adding an image gallery, different styles:

    [slider photo.*jpg loop]
    [slider photo.*jpg fade]
    [slider photo.*jpg slide]

Adding an image gallery, different sizes:

    [slider photo.*jpg loop 25%]
    [slider photo.*jpg loop 50%]
    [slider photo.*jpg loop 100%]

Adding an image gallery from a subfolder, different sizes:

    [slider photo-album/ loop 25%]
    [slider photo-album/ loop 50%]
    [slider photo-album/ loop 100%]

Adding an image gallery, play automatically with default style/size:

    [slider photo.*jpg - - 1000]
    [slider photo.*jpg - - 2000]
    [slider photo.*jpg - - 5000]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`SliderStyle` = gallery style, e.g. `loop`, `fade`, `slide`  
`SliderAutoplay` = play images automatically, delay time in milliseconds  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/slider.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Splide 2.4.21](https://github.com/Splidejs/splide) by Naotoshi Fujita.

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).
