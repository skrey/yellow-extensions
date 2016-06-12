Slider plugin 0.6.1
====================
Image gallery with slider. [See demo](http://developers.datenstrom.se/plugins/slider-plugin).

[![Screenshot](slider-plugin.jpg?raw=true)](http://developers.datenstrom.se/plugins/slider-plugin)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and install [image plugin](https://github.com/datenstrom/yellow-plugins/tree/master/image).
3. Download and unzip [slider plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/slider.zip).
4. Copy `slider.php`, `slider.js` and `slider.css` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to add a gallery?
---------------------
Create a `[slider]` shortcut.

The following arguments are available:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = gallery style  
`SIZE` = image size, pixel or percent  
`AUTOPLAY` = play images automatically, delay time in milliseconds

The plugins uses [Flickity v1.2.0](http://flickity.metafizzy.co) by David DeSandro. It's licensed under [GPLv3](https://opensource.org/licenses/GPL-3.0). Flickity supports most web browsers, including Chrome, Firefox, Safari, Opera and IE. Files are served from [cdnjs](https://cdnjs.com), you can configure a different CDN or your own server.

Example
-------
Adding an image gallery:

    [slider]
    [slider photo.*jpg]
    [slider photo.*jpg - 20%]
