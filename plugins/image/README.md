Image plugin 0.1.1
==================
Support for resizable images and thumbnails.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [image.php](image.php?raw=true), copy into your system/plugins folder.
3. Create a new folder 'thumbnails' in your media folder. Make sure it's writable.

To uninstall delete the plugin files and thumbnails folder.

How to add an image?
--------------------
Create a shortcut in the format `[image NAME]`, you can add optional text, style, width, height, mode.  
NAME is the filename in your images folder. The available resize modes are fit and cut, the default is fit.

Example
-------
Adding an image, different sizes:

    [image icon.png text] 
    [image icon.png text - 64 64]
    [image icon.png text - 128 128] 

Adding a picture, different styles:

    [image picture.jpg picture left]
    [image picture.jpg picture centre]
    [image picture.jpg picture right]
