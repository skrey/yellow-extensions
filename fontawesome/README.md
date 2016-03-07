Fontawesome plugin 0.6.3
========================
Icons and symbols.

![Screenshot](fontawesome-plugin.jpg?raw=true)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [fontawesome.php](fontawesome.php?raw=true), [fontawesome.css](fontawesome.css?raw=true) and [fontawesome.woff](fontawesome.woff?raw=true), copy them into your `system/plugins` folder.  

To uninstall delete the plugin files.

How to add an icon?
-------------------
Create a `[fa NAME]` shortcut or use HTML `<i class="fa NAME"></i>`. Here's a [complete list of icons](http://fortawesome.github.io/Font-Awesome/icons/).

You can add an additional style to the name, for example `fa-lg`, `fa-2x`, `fa-3x`, `fa-4x` and `fa-5x`.

The plugin uses [Font Awesome v4.5.0](https://github.com/FortAwesome/Font-Awesome) by Dave Gandy, which supports about 600 pictographic icons. It's licensed under [OFL 1.1](http://opensource.org/licenses/OFL-1.1). Font Awesome has icons for web applications, buttons and forms. There's a `fontawesome.css` which you can adjust or use in your own style sheets.

Example
-------
Adding an icon:

    [fa fa-envelope-o] Email
    [fa fa-twitter] Twitter
    [fa fa-github] GitHub

Adding an icon, double size:

    [fa fa-envelope-o fa-2x] Email
    [fa fa-twitter fa-2x] Twitter
    [fa fa-github fa-2x] GitHub

Navigation snippet with social media icons:

    <?php $pages = $yellow->pages->top() ?>
    <?php $yellow->page->setLastModified($pages->getModified()) ?>
    <div class="navigation">
    <ul>
    <?php foreach($pages as $page): ?>
    <li><a<?php echo $page->isActive() ? " class=\"active\"" : "" ?> href="<?php echo $page->getLocation() ?>"><?php echo $page->getHtml("titleNavigation") ?></a></li>
    <?php endforeach ?>
    <li><a href="https://twitter.com/username"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://github.com/username"><i class="fa fa-github"></i></a></li>
    </ul>
    </div>
    <div class="navigation-banner"></div>