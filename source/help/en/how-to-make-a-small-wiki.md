---
Title: How to make a small wiki
---
Learn how to make your own wiki.

[toc]

## First steps

1. [Download Datenstrom Yellow](https://github.com/datenstrom/yellow/archive/master.zip).
2. Unzip and copy all files to your web server.
3. Open your website in a web browser.

Enter your name, email, password and select 'Wiki'. Your wiki is immediately available. The installation comes with two pages, 'Home' and 'Wiki'. This is just an example to get you started. Change everything as you like. You can edit your wiki in a web browser or on your computer.  You can delete the home page, if you want to show the wiki on the home page. If there are problems with installation, see [troubleshooting](troubleshooting).

## Writing wiki pages

Let's see how to edit wiki pages on the computer. Have a look inside your `content` folder, here's  the wiki folder with all your wiki pages. Open the file `wiki-page.md`. You'll see settings and text of the page. You can change `Title` and other [settings](markdown-cheat-sheet#settings) at the top of a page. Below that you can use [Markdown](markdown-cheat-sheet). Here's an example:

```
---
Title: Wiki page
Layout: wiki
Tag: Example
---
This is an example wiki page. 

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
tempor incididunt ut labore et dolore magna pizza. Ut enim ad minim veniam, 
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. 
```

To create a new wiki page, add a new file to the wiki folder. Set `Title` and more settings at the top of a page. You can use `Tag` to group similar pages together. Here's another example:

```
---
Title: Coffee is good for you
Layout: wiki
Tag: Example, Coffee
---
Coffee is a beverage made from the roasted beans of the coffee plant.

1. Start with fresh coffee. Coffee beans start losing quality immediately 
   after roasting and grinding. The best coffee is made from beans ground 
   right after roasting. 
2. Brew a cup of coffee. Coffee is prepared with different methods and 
   additional flavorings such as milk and sugar. There are Espresso, Filter 
   coffee, French press, Italian Moka, Turkish coffee and many more. Find 
   out what's your favorite.
3. Enjoy.
```

Now let's add a video with the [Youtube extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube):

```
---
Title: Coffee is good for you
Layout: wiki
Tag: Example, Coffee, Video
---
Coffee is a beverage made from the roasted beans of the coffee plant.

1. Start with fresh coffee. Coffee beans start losing quality immediately 
   after roasting and grinding. The best coffee is made from beans ground 
   right after roasting. 
2. Brew a cup of coffee. Coffee is prepared with different methods and 
   additional flavorings such as milk and sugar. There are Espresso, Filter 
   coffee, French press, Italian Moka, Turkish coffee and many more. Find 
   out what's your favorite.
3. Enjoy.

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

## Add features, languages and themes

There are [extensions for your website](https://github.com/datenstrom/yellow-extensions). Of course we also have an [API for developers](api-for-developers).

## Related information

* [How to use a wiki](https://github.com/datenstrom/yellow-extensions/tree/master/source/wiki)
* [How to edit a website in a web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit)
* [How to edit a website on the computer](https://github.com/datenstrom/yellow-extensions/tree/master/source/core)