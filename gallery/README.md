Gallery plugin 0.6.2
====================
Image gallery with popup. [See demo](http://developers.datenstrom.se/plugins/gallery-plugin).

[![Screenshot](gallery-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/gallery-plugin)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-plugins/tree/master/image).  
3. Download [gallery.php](gallery.php?raw=true) and [gallery.js](gallery.js?raw=true), copy them into your `system/plugins` folder.  

To uninstall delete the plugin files.

How to add a gallery?
---------------------
Create a `[gallery]` shortcut.

The following arguments are available:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = gallery style  
`SIZE` = image size, pixel or percent

The plugins uses [PhotoSwipe v4.1.0](http://photoswipe.com) by Dmitry Semenov. It's licensed under [MIT license](http://opensource.org/licenses/MIT). PhotoSwipe supports most web browsers, including Chrome, Firefox, Safari, Opera and IE. Files are served from [cdnjs](https://cdnjs.com), you can configure a different CDN or your own server.

Example
-------
Adding an image gallery:

    [gallery]
    [gallery photo.*jpg - 20%]
    [gallery photo.*jpg simple 20%]

Adding an image gallery, square thumbnails:

    [gallery photo.*jpg - 64]
    [gallery photo.*jpg - 150]
    [gallery photo.*jpg simple 150]