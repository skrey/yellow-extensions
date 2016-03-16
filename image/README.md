Image plugin 0.6.1
==================
Resizable images and thumbnails. [See demo](http://developers.datenstrom.se/plugins/image-plugin).

[![Screenshot](image-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/image-plugin)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [image.php](image.php?raw=true), copy it into your `system/plugins` folder.
3. Create a new folder 'thumbnails' in your `media` folder. Make sure it's writable.

To uninstall delete the plugin.

How to add an image?
--------------------
Create an `[image]` shortcut.

The following arguments are available:
 
`NAME` = file name  
`TEXT` = text description  
`STYLE` = image style, e.g. `left`, `center`, `right`  
`WIDTH` = image width, pixel or percent  
`HEIGHT` = image height, pixel or percent   

The plugin uses [GD graphics library](http://www.libgd.org/) by Thomas Boutell for resizing JPEG and PNG images.

Example
-------
Adding an image:

    [image picture.jpg]
    [image picture.jpg Image]
    [image picture.jpg "This is an example image"]

Adding an image, different styles:

    [image picture.jpg Picture left]
    [image picture.jpg Picture centre]
    [image picture.jpg Picture right]

Adding an image, different sizes:

    [image picture.jpg Picture - 64 64]
    [image picture.jpg Picture - 320 200]
    [image picture.jpg Picture - 50%]