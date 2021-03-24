Emojiawesome 0.8.7
==================
Lots and lots of emoji.

![Screenshot](emojiawesome-screenshot.jpg?raw=true)

## How to add an emoji

Add `:shortcode:` to the text of a page. Here's an [emoji cheat sheet](http://www.emoji-cheat-sheet.com). 

It's also possible to create an `[ea]` shortcut or use HTML `<i class="ea ea-name"></i>`. You can add an additional style to the name, for example `ea-lg`, `ea-2x`, `ea-3x`, `ea-4x` and `ea-5x`.

## Examples

Adding an emoji:

    :smile: 
    :heart: 
    :coffee:

Adding an emoji, normal size:

    [ea ea-smile]
    [ea ea-heart]
    [ea ea-coffee]

Adding an emoji, double size:
    
    [ea ea-smile ea-2x]
    [ea ea-heart ea-2x]
    [ea ea-coffee ea-2x]

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`EmojiawesomeCdn` = URL of CDN with emoji images  
`EmojiawesomeToolbarButtons` = toolbar buttons for the [edit extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)  

## Installation

[Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/emojiawesome.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

This extension uses [Twemoji 2.0.0](https://github.com/twitter/twemoji) by Twitter. Files are served from [cdnjs](https://cdnjs.com).

## Developer

Datenstrom. [Get help](https://datenstrom.se/yellow/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/source/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
