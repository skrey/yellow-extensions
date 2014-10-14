Fontawesome plugin 0.1.4
========================
Support for scalable icons.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [fontawesome.php](fontawesome.php?raw=true), copy into your system/plugins folder.  
3. Download [fontawesome.css](fontawesome.css?raw=true) and [fontawesome.woff](fontawesome.woff?raw=true), copy into your system/plugins folder as well.  

To uninstall delete the plugin files.

How to add an icon?
-------------------
Create an element in the format `<i class="fa NAME"></i>`, you can add additional styles to the class. NAME is the icon's name. All icons can be customized via style sheet. There's a `fontawesome.css` which you can adjust or use in your own style sheets.

The plugin uses [Font Awesome v4.2.0](https://github.com/FortAwesome/Font-Awesome) by Dave Gandy, which supports about 400 pictographic icons. It's licensed under [OFL 1.1](http://opensource.org/licenses/OFL-1.1). There are icons for web applications, buttons and forms. Here's a [complete list of icons](http://fortawesome.github.io/Font-Awesome/icons/).

Example
-------
Adding an icon, Email and Twitter symbol:

    <i class="fa fa-envelope-o></i> Email
    <i class="fa fa-twitter"></i> Twitter