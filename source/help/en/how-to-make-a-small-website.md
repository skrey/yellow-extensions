---
Title: How to make a small website
---
Learn how to make your own website.

[toc]

## First steps

1. [Download Datenstrom Yellow](https://github.com/datenstrom/yellow/archive/master.zip).
2. Unzip and copy all files to your web server.
3. Open your website in a web browser.

Enter your name, email, password and select 'Website'. Your website is immediately available. The installation comes with one page. This is just an example to get you started. Change everything as you like. You can edit your website in a web browser or on your computer. If there are problems with installation, see [troubleshooting](troubleshooting).

## Edit web pages

Let's see how to edit web pages on the computer. Have a look inside your `content` folder, here are all your web pages. Open the file `content/1-home/page.md`. You'll see settings and text of the page. You can change `Title` and other [settings](markdown-cheat-sheet#settings) at the top of a page. Below that you can use [Markdown](markdown-cheat-sheet). Here's an example:

```
---
Title: Home
TitleContent: Your website works!
---
[image photo.jpg Example rounded]

[edit - You can edit this page]. 
The help gives you more information about how to create small web pages, blogs and wikis. 
[Learn more](https://datenstrom.se/yellow/help/).
```

To create a new page, add a new file to the home folder or to another `content` folder:

```
---
Title: Example page
---
This is an example page.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 
```

Now let's add text formatting:

```
---
Title: Example page
---
This is an example page.

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 

Normal **bold** *italic* ~~strikethrough~~ `code`
```

## Show header and footer

To show a header create the file `content/shared/header.md`. Here's an example:

```
---
Title: Header
Status: shared
---
Website is under construction.
```

To show a footer create the file `content/shared/footer.md`. Here's an example:

```
---
Title: Footer
Status: shared
---
[Made with Datenstrom Yellow](https://datenstrom.se/yellow/).
```

## Add features, themes and languages

There are [extensions for your website](https://github.com/datenstrom/yellow-extensions) and an [API for developers](api-for-developers).

## Related information

* [How to edit a website in a web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)
* [How to edit a website on the computer](https://github.com/datenstrom/yellow-extensions/tree/master/source/core)
* [How to build a static website](https://github.com/datenstrom/yellow-extensions/tree/master/source/command)

Do you have questions? [Get help](.) and [contribute](contributing-guidelines).
