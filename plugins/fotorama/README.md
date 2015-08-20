Fotorama plugin 0.5.1 
=====================
Image gallery with slider.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [fotorama.php](fotorama.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to add a gallery?
---------------------
Create a `[fotorama]` shortcut.

The following arguments are available:
  
`PATTERN` = file name as [regular expression](https://en.wikipedia.org/wiki/Regular_expression)  
`STYLE` = gallery style  
`NAV` = navigation style: dots, thumbs, false

The plugin uses [Fotorama v4.6.4](http://fotorama.io/) by Artem Polikarpov, which is based on jQuery. It's licensed under [MIT license](http://opensource.org/licenses/MIT). Fotorama supports most web browsers, including Chrome, Firefox, Safari, Opera and IE.

Example
-------
Adding an image gallery:

    [fotorama]
    [fotorama photo.*jpg]
    [fotorama photo.*jpg - thumbs]