Emojiawesome plugin 0.6.3
=========================
Lots and lots of emoji.

![Screenshot](emojiawesome-plugin.jpg?raw=true)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [emojiawesome plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/emojiawesome.zip).
3. Copy `emojiawesome.php` and `emojiawesome.css` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to add an emoji?
--------------------
Add `:shortcode:` to the text of a page. Here's an [emoji cheat sheet](http://www.emoji-cheat-sheet.com). 

It's also possible to create an `[ea NAME]` shortcut or use HTML `<i class="ea NAME"></i>`.  
You can add an additional style to the name, for example `ea-lg`, `ea-2x`, `ea-3x`, `ea-4x` and `ea-5x`.

The plugin uses [Twemoji v2.0.0](https://github.com/twitter/twemoji) by Twitter, which supports about 1600 colorful images. Images are licensed under [CC-BY](http://creativecommons.org/licenses/by/4.0/). Emoji Awesome has images for people, animals, food and flags. There's an `emojiawesome.css` which you can adjust or use in your own style sheets. Files are served from [cdnjs](https://cdnjs.com), you can configure a different CDN or your own server.

Example
-------
Adding an emoji:

    :smile: 
    :heart: 
    :coffee:

Adding an emoji with shortcut, normal and double size:

    [ea ea-smile]
    [ea ea-heart]
    [ea ea-coffee]
    
    [ea ea-smile ea-2x]
    [ea ea-heart ea-2x]
    [ea ea-coffee ea-2x]

Footer snippet with heart emoji:

    <div class="footer">
    <a href="<?php echo $yellow->page->base."/" ?>">&copy; 2016 <?php echo $yellow->page->getHtml("sitename") ?></a>.
    <a href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a>.
    <a href="<?php echo $yellow->text->get("yellowUrl") ?>">Made with Yellow</a>.
    <a href="http://developers.datenstrom.se/">We <i class="ea ea-heart"></i> developers</a>.
    </div>
    </div>
    <?php echo $yellow->page->getExtra("footer") ?>
    </body>
    </html>
