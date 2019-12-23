---
Title: How to make a website
---
Learn how to make your own website.

## Installing website

1. [Download and unzip Datenstrom Yellow](https://github.com/datenstrom/yellow/archive/master.zip).
2. Copy all files to your web server.
3. Open your website in a web browser and select 'Website'.

Your website is immediately available. The installation comes with a home page. This is just an example to get you started, change everything as you like. You can make a website by adding more files and folders.

When there are problems, please check the [server configuration](server-configuration) or ask the [support](/help/).

## Writing web pages

Have a look inside your `content` folder, here are all your web pages. Open the file `content/1-home/page.md`. You'll see settings and text of the page. You can change `Title` and other [settings](markdown-cheat-sheet#settings) at the top of a page. Below that you can use [Markdown](markdown-cheat-sheet). Here's an example:

```
---
Title: Home
---
Your website works! 

[edit - You can edit this page] or use your text editor.

You can install more features and themes.
[Learn more](https://extensions.datenstrom.se/help/).
```

To create a new page, add a new file to the home folder or another `content` folder. The [navigation](adjusting-content) is automatically created from your `content` folders. Here's another example:

```
---
Title: Demo
---
[edit - You can edit this page]. The help gives you more information 
about how to create small web pages, blogs and wikis. 
[Learn more](https://extensions.datenstrom.se/help/).
```

Now let's add an image:

```
---
Title: Demo
---
[image picture.jpg Example rounded]

[edit - You can edit this page]. The help gives you more information 
about how to create small web pages, blogs and wikis. 
[Learn more](https://extensions.datenstrom.se/help/).
```

## Showing header

To show a header create the file `content/shared/header.md`. You can also create a `header.md` in any `content` folder and it will only be shown on pages in the same folder. Here's an example:

```
---
Title: Header
Status: shared
---
I like Markdown.
```

## Showing footer

To show a footer create the file `content/shared/footer.md`. You can also create a `footer.md` in any `content` folder and it will only be shown on pages in the same folder. Here's an example:

```
---
Title: Footer
Status: shared
---
[Made with Datenstrom Yellow](https://datenstrom.se/yellow/)
```

## Showing sidebar

To show a sidebar create the file `content/shared/sidebar.md`. You can also create a `sidebar.md` in any `content` folder and it will only be shown on pages in the same folder. Here's an example:

```
---
Title: Sidebar
Status: shared
---
Links

* [Twitter](https://twitter.com/datenstromse)
* [GitHub](https://github.com/datenstrom)
* [Datenstrom](https://datenstrom.se)
```

## Installing extensions

* [How to add an image gallery to your website](https://github.com/datenstrom/yellow-extensions/tree/master/features/gallery)
* [How to add a search to your website](https://github.com/datenstrom/yellow-extensions/tree/master/features/search)
* [How to add a sitemap to your website](https://github.com/datenstrom/yellow-extensions/tree/master/features/sitemap)
* [How to add a contact page to your website](https://github.com/datenstrom/yellow-extensions/tree/master/features/contact)
* [How to make a static website](server-configuration#static-website)
