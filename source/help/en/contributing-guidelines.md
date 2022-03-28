---
Title: Contributing guidelines
---
Learn how to work with us and make useful products.

## How to ask a question

* [Start a new discussion for each question](https://github.com/datenstrom/yellow/discussions/categories/ask-a-question).
* Write your question in the title, it's the first thing everyone will see.
* Describe what you want to do and which problems you have.
* Select an answer, when your question has been answered.

## How to report a bug

* [Start a new discussion for each bug](https://github.com/datenstrom/yellow/discussions/categories/report-a-bug).
* Explain how to reproduce the bug, check if it happens every time.
* Add many details, especially the log file `system/extensions/yellow-website.log`.
* Test that everything works, when your problem has been fixed.

## How to work with us

* Improve the available extensions, [make an extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/publish).
* Review the available documentation, [edit the help](https://github.com/datenstrom/yellow-extensions/tree/master/source/help) or [make a translation](https://github.com/datenstrom/yellow-extensions/tree/master/source/language).
* Become active in our community, [help new users and answer questions](https://github.com/datenstrom/yellow/discussions/685).
* Make an announcement and show what you have made. [See what's new](https://github.com/datenstrom/yellow/discussions/categories/see-what-s-new).

## How to share your experiences

Our community is a place to help each other. Where you can ask and answer questions. Most answers are provided by community members, just like you. Consider that other people may not have the same knowledge as you. Never feel compelled to react or respond to anyone. You can step out of discussions at any time if they aren't constructive. Don't force anything. Focus on the people who show interest and want to work with you. You can find us on [Discord](https://discord.gg/NYvTETsHS9), [GitHub](https://github.com/datenstrom), [Twitter](https://twitter.com/datenstromnews) or [contact a human](https://datenstrom.se/contact/).

## Examples

Asking a question:

```
How do I change the language of my website?

Hello, during installation I selected the wrong language. Now I want to 
change the language of my website to english. When I change the settings 
it doesn't work. I checked that the english extension is installed. 
Here are my settings in file `system/extensions/yellow-system.ini`:

Sitename: Datenstrom Yellow
Author: Datenstrom
Email: webmaster
Layout: default
Theme: stockholm
Language: english

Thanks for your help.
```

Reporting a bug:

```
Call to undefined function detectTimezone()

Hello, I get the error message: Call to undefined function detectTimezone() 
in /var/www/website/system/extensions/fika.php. You can reproduce the bug 
in a new installation, select small website, install the fika extension. 
Here's my log file `system/extensions/yellow-website.log`:

2020-10-28 14:13:07 info Install Datenstrom Yellow 0.8.17, PHP 7.1.33, Apache 2.4.33, Mac
2020-10-28 14:13:07 info Install extension 'English 0.8.27'
2020-10-28 14:13:07 info Install extension 'German 0.8.27'
2020-10-28 14:13:07 info Install extension 'Swedish 0.8.27'
2020-10-28 14:18:11 info Install extension 'Fika 0.8.15'
2020-10-28 14:18:11 error Can't parse file 'system/extensions/fika.php'!

Let me know if you need more information. Thanks for investigating.
```

Making an announcement:

```
New video extension

Hello, I made a new video extension. My goal is to play videos without 
external services. You can copy videos to your web server and play them 
from there. The file formats MP4 and OGG are supported at the moment. 
I would like to know which file formats people use.

Let me know what you think. Any comments are welcome.
```

Do you have questions? [Get help](.).
