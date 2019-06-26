Markdown 0.8.8
==============
Text formatting for humans. [See demo](https://extensions.datenstrom.se/help/markdown-cheat-sheet).

<p align="center"><img src="markdown-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install extension

1. [Download and install Datenstrom Yellow](https://github.com/datenstrom/yellow/).
2. [Download extension](https://github.com/datenstrom/yellow-extensions/raw/master/zip/markdown.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `markdown.zip` into your `system/extensions` folder.

To uninstall delete the [extension files](extension.ini).

## How to format text

The extension uses [Markdown Extra v1.8.0](https://github.com/michelf/php-markdown) by Michel Fortin, which is a text-to-HTML conversion tool. It's licensed under [BSD license](https://opensource.org/licenses/BSD-3-Clause). Markdown allows to write text like an email and it becomes a web page. Here's the basic [Markdown syntax](http://commonmark.org/help/), a list of [Markdown Extra features](https://michelf.ca/projects/php-markdown/extra/) and [GitHub Flavored Markdown](https://help.github.com/en/articles/basic-writing-and-formatting-syntax).

There's also an experimental Markdown parser based on [Parsedown Extra v1.8.0-beta-7](https://github.com/erusev/parsedown) by Emanuil Rusev. You can [download extension](https://github.com/datenstrom/yellow-extensions/raw/master/features/markdown/markdownx.php) and copy it into your `system/extensions` folder. Now you can switch between Markdown parsers with `Parser: markdown` = Markdown Extra, `Parser: markdownx` = Parsedown Extra. [Learn more](https://github.com/datenstrom/yellow/issues/354).

## Examples

Formatting text:

    Normal **bold** *italic* ~~strikethrough~~ `code`

Making a list:

    * item one
    * item two
    * item three

## Developer

Datenstrom featuring Michel Fortin. [Get support](https://extensions.datenstrom.se/help/).
