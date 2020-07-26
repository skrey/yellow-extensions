Image 0.8.9
===========
Images and thumbnails.

<p align="center"><img src="image-screenshot.png?raw=true" width="795" height="836" alt="Screenshot"></p>

## How to add an image

Create an `[image]` shortcut.

The following arguments are available, all but the first argument are optional:
 
`Name` = file name  
`Alt` = alternative text for image  
`Style` = image style, e.g. `left`, `center`, `right`  
`Width` = image width, pixel or percent  
`Height` = image height, pixel or percent   

The image formats GIF, JPG, PNG and SVG are supported. All media files are located in the `media` folder. The `media/images` folder is the place to store your images. The `media/thumbnails` folder contains image thumbnails. You can also create additional folders and organise files as you like.

## Examples

Adding images:

    [image photo.jpg]
    [image photo.jpg Example]
    [image photo.jpg "This is an example image"]

Adding images, different styles:

    [image photo.jpg Example left]
    [image photo.jpg Example center]
    [image photo.jpg Example right]

Adding images, different sizes:

    [image photo.jpg Example - 64 64]
    [image photo.jpg Example - 320 200]
    [image photo.jpg Example - 50%]

## Settings

The following settings can be configured in file `system/settings/system.ini`:

`ImageUploadWidthMax` = maximum width for upload, larger images are resized  
`ImageUploadHeightMax` = maximum height for upload, larger images are resized  
`ImageUploadJpgQuality` = JPG quality for uploaded images  
`ImageThumbnailLocation` = location for thumbnails  
`ImageThumbnailDirectory` = directory for thumbnails  
`ImageThumbnailJpgQuality` = JPG quality for thumbnails  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/image.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [GD graphics library](https://github.com/libgd/libgd) by Thomas Boutell. 

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
