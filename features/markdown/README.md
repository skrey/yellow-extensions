Markdown 0.8.11
===============
Text formatting for humans.

<p align="center"><img src="markdown-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/markdown.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `markdown.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to format text

Markdown is a practical way to edit web pages.

This extension uses [Markdown Extra v1.9.0](https://github.com/michelf/php-markdown) by Michel Fortin, which is a text-to-HTML conversion tool. It's licensed under [BSD license](https://opensource.org/licenses/BSD-3-Clause). Here's the [Markdown syntax](http://commonmark.org/help/), a list of [Markdown Extra features](https://michelf.ca/projects/php-markdown/extra/) and [GitHub Flavored Markdown](https://help.github.com/en/articles/basic-writing-and-formatting-syntax). 

There's also an experimental Markdown parser based on [Parsedown Extra v1.8.0-beta-7](https://github.com/erusev/parsedown) by Emanuil Rusev. It's licensed under [MIT license](https://opensource.org/licenses/MIT). You can [download extension](https://github.com/datenstrom/yellow-extensions/raw/master/features/markdown/markdownx.php) and copy it into your `system/extensions` folder. Now you can switch Markdown parsers with `Parser: markdown` = Markdown Extra, `Parser: markdownx` = Parsedown Extra.

## How to use shortcuts

In addition to Markdown there are shortcuts. Markdown provides the basic features. Shortcuts take care of the rest. You can show information, add emoji and embed whatever-you-want into the website. For example there is a [image extension](https://github.com/datenstrom/yellow-extensions/tree/master/features/image) for images and thumbnails.

## Examples

Formatting text:

    Normal **bold** *italic* ~~strikethrough~~ `code`

Making a list:

    * item one
    * item two
    * item three

Making an ordered list:

    1. item one
    2. item two
    3. item three

Making a task list:

    - [x] item one
    - [ ] item two
    - [ ] item three

Making a heading:

    # Heading 1
    ## Heading 2
    ### Heading 3

Making quotes:

    > Quote
    >> Quote of a quote
    >>> Quote of a quote of a quote

Making links:

    [Link to page](/help/how-to-make-a-website)
    [Link to file](/media/downloads/yellow.pdf)
    [Link to website](https://datenstrom.se)

Adding images, with a shortcut:

    [image picture.jpg]
    [image picture.jpg Picture]
    [image picture.jpg "This is an example image"]

## Developer

Datenstrom. [Get support](https://extensions.datenstrom.se/help/).

<p>
<a href="README-de.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-de.png" width="15" height="15" alt="Deutsch">&nbsp; Deutsch</a>&nbsp;
<a href="README.md"><img src="https://raw.githubusercontent.com/datenstrom/yellow-extensions/master/features/help/language-en.png" width="15" height="15" alt="English">&nbsp; English</a>&nbsp;
</p>
