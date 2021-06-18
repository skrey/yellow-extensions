---
Title: How to make a small blog
---
Learn how to make your blog.

[toc]

## First steps

[Follow the installation instructions](how-to-get-started) and select 'Blog'. The installation comes with two pages, 'Home' and 'Blog'. This is just an example to get you started. Change everything as you like. You can edit your blog in a web browser or on your computer. If you want to install the blog later, [see blog extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog).

## Edit blog pages

Let's see how to edit blog pages on the computer. Have a look inside your `content` folder, here's the blog folder with all your blog pages. Open the file `2020-04-07-blog-example.md`. You'll see settings and text of the page. You can change `Title` and other [page settings](how-to-adjust-system#page-settings) at the top of a page. Below that you can use [Markdown](how-to-adjust-content#markdown). Here's an example:

```
---
Title: Blog example
Published: 2020-04-07
Author: Datenstrom
Layout: blog
Tag: Example
---
This is an example blog page. 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 
```

To create a new blog page, add a new file to the blog folder. Set `Published` and more settings at the top of a page. Dates should be written in the format YYYY-MM-DD. The publishing date will be used to sort blog pages. You can use `Tag` to group similar pages together. Here's another example:

```
---
Title: Fika is good for you
Published: 2020-06-01
Author: Datenstrom
Layout: blog
Tag: Example, Coffee
---
Fika is a Swedish custom. It's a social coffee break where people 
gather to have a cup of coffee or tea together. You can have fika with 
colleagues at work. You can invite your friends to fika. Fika is such 
an important part of life in Sweden that it is both a verb and a noun. 
How often do you fika?
```

Now let's add a video with the [Youtube extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube):

```
---
Title: Fika is good for you
Published: 2020-06-01
Author: Datenstrom
Layout: blog
Tag: Example, Coffee, Video
---
Fika is a Swedish custom. It's a social coffee break where people 
gather to have a cup of coffee or tea together. You can have fika with 
colleagues at work. You can invite your friends to fika. Fika is such 
an important part of life in Sweden that it is both a verb and a noun. 
How often do you fika?

[youtube SUpY1BT9Xf4]
```

You can use `[--more--]` to add a page break at the desired spot. The rest will be shown when a visitor clicks on the blog page:

```
---
Title: Fika is good for you
Published: 2020-06-01
Author: Datenstrom
Layout: blog
Tag: Example, Coffee, Video
---
Fika is a Swedish custom. It's a social coffee break where people 
gather to have a cup of coffee or tea together. You can have fika with 
colleagues at work. You can invite your friends to fika. Fika is such 
an important part of life in Sweden that it is both a verb and a noun. 
How often do you fika? [--more--]

[youtube SUpY1BT9Xf4]
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
* [How to use a blog](https://github.com/datenstrom/yellow-extensions/tree/master/source/blog)

Do you have questions? [Get help](.) and [contribute](contributing-guidelines).
