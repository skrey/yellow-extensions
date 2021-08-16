---
Title: Contributing guidelines
---
Here's how to work with us and make useful products.

## How to ask a question

* [Start a new discussion for each question](https://github.com/datenstrom/yellow/discussions).
* Write the question in the title, so that everyone can see what it is about. 
* Describe what you want to do and which problems you have.
* Select an answer, when your question has been answered.

## How to report a bug

* [Start a new discussion for each bug](https://github.com/datenstrom/yellow/discussions/categories/report-a-bug).
* Explain how to reproduce the bug, check if it happens every time.
* Add many details, especially the log file `system/extensions/yellow.log`.
* Test that everything works, when your problem has been fixed.

## How to improve the documentation

* [Start with the help](https://github.com/datenstrom/yellow-extensions/tree/master/source/help) or [have a look at your own language](https://github.com/datenstrom/yellow-extensions#languages).
* Edit the existing files, make a translation if your language is missing.
* Upload your files to GitHub, let us know if you need help.
* Check that it is helpful to the user and give practical examples.

## How to develop an extension

* [Start with an example feature](https://github.com/schulle4u/yellow-extension-helloworld), [example theme](https://github.com/schulle4u/yellow-extension-basic) or the [API](api-for-developers).
* Imagine what the user wants to do, aim for a simple solution.
* Upload your extensions to GitHub, let us know if you need help.
* Make an announcement, show what you have made and ask for feedback.

## How to share your experiences

Our community is a place to help each other. Where you can ask and answer questions. Most answers are provided by community members, just like you. Consider that other people may not have the same background as you. Never feel compelled to react or respond to anyone. You can step out of a conversation at any time if it isn't constructive. Focus on the people who show interest and want to work together with you. You can find us on [GitHub](https://github.com/datenstrom), [Discord](https://discord.gg/NYvTETsHS9), [Twitter](https://twitter.com/datendeveloper) or [contact a human](https://datenstrom.se/contact/).

## Examples

Asking a question:

```
How to change the language of a website?

Hello, during installation I selected the wrong language. Now I want to 
change the language of my website to english. When I change the settings 
it doesn't work as expected. The error message says: Language 'english' 
does not exist! I checked that the english extension is installed.

Thanks for your help.
```

Reporting a bug:

```
Call to undefined function YellowToolbox::detectTimezone()

Hello, I updated my website in the web browser and now get the following 
error message: Call to undefined function YellowToolbox::detectTimezone() 
in /var/www/website/system/extensions/fika.php. You can reproduce the bug 
in a new installation, select website, install the fika extension. 
Here's my log file system/extensions/yellow.log:

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

Hello, I made a new video extension. Its aim is to play videos without 
external services and without tracking cookies. The file formats MP4 and 
OGG are supported at the moment. I would like to know which file formats 
people use and what more I can do to make the extension better.

Let me know what you think. Any comments are welcome.
```

Do you have questions? [Get help](.). 
