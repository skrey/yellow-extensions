Gallery plugin 0.5.2
====================
Image gallery with popup. [See demo](http://demo.datenstrom.se/wiki/gallery-example).

[![Screenshot](gallery-plugin.jpg?raw=true)](http://demo.datenstrom.se/wiki/gallery-example)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download and install [image plugin](https://github.com/datenstrom/yellow-extensions/tree/master/plugins/image).  
3. Download [gallery.php](gallery.php?raw=true) and [gallery.js](gallery.js?raw=true), copy them into your `system/plugins` folder.  

To uninstall delete the plugin files.

How to add a gallery?
---------------------
Create a `[gallery]` shortcut.

The following arguments are available:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = gallery style  
`SIZE` = image size, pixel or percent

The plugins uses [PhotoSwipe v4.1.0](http://photoswipe.com) by Dmitry Semenov, which is touchscreen and desktop friendly. It's licensed under [MIT license](http://opensource.org/licenses/MIT). PhotoSwipe supports most web browsers, including Chrome, Firefox, Safari, Opera and IE.

Example
-------
Adding an image gallery:

    [gallery]
    [gallery photo.*jpg - 20%]
    [gallery photo.*jpg simple 20%]