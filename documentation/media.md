Adding media
============

All media is located in the **media folder**. You can store your images and other files there.

![Screenshot](picture_media.png?raw=true)

The standard installation of Yellow comes with two media folders. The `images` folder is the place to store your images and photos. For a small website put all inside one folder, otherwise use multiple folders similar to your content. The `styles` folder is the place to store style sheets, there's already a `default.css` that defines how your website looks like. It's a starting point for your own designs.

Create additional folders and organise media files as you like.

Image files
-----------
Here's how to use images. Open the file `content/1-home/page.txt` in your favorite text editor. Add `![Image](default_icon.png)` to the text of the page. The home page shows now the default website icon. To use more images, add more files to your images folder.

`![Image](default_icon.png)` shows the image `http://website/images/default_icon.png`

`![Image](about/picture.jpg)` shows the image `http://website/images/about/picture.jpg`

`![Image](about/picture.jpg){.right}` shows the image `http://website/images/about/picture.jpg` with style `right`

All files are served exactly as they are, if you need different resolutions use multiple images.

Style sheets
------------
You can customize your website with [CSS](http://en.wikipedia.org/wiki/CSS). There's an overall style for the entire website. It's possible for a page to use a different style. An individual style can be defined in the meta data of a page (Info), for example `Style: blogsite` uses the file `media/styles/blogsite.css`.

There are [Yellow themes](https://github.com/markseu/yellowcms-extensions/tree/master/themes) you can download.