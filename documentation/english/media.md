Adding media
============
All media is located in the **media folder**. You can store your images and other files there.

![Screenshot](media-screenshot.png?raw=true)

The standard installation of Yellow comes with two media folders. The `images` folder is the place to store your images. For a small website put all images inside one folder, otherwise use multiple folders. The `styles` folder is the place to store your style sheets, there's already a `default.css` that defines how your website looks like. It's a starting point for your own designs.

Create additional folders and organise media files as you like.

Image files
-----------
Here's how to use images. Open the file `content/1-home/page.txt` in your favorite text editor. Add `![image](icon.png)` to the text of the page. The home page shows now the default website icon. To use more images, add more files to your images folder.

`![image](icon.png)` shows the image `http://website/images/icon.png`  
`![image](about/picture.jpg)` shows the image `http://website/images/about/picture.jpg`  
`![image](about/picture.jpg){.left}` shows the image `http://website/images/about/picture.jpg` with style `left`  
`![image](about/picture.jpg){.right}` shows the image `http://website/images/about/picture.jpg` with style `right`  

All files are served exactly as they are, if you need different resolutions use multiple images.

Style sheets
------------
You can customize your website with [CSS](http://en.wikipedia.org/wiki/CSS). There's an overall style for the entire website, but you are not limited to using just one. A different style can be defined in the settings of a page, for example `Style: blog` uses the file `media/styles/blog.css`. Otherwise, the default style or the name of the folder is used. There are [styles](https://github.com/markseu/yellowcms-extensions/tree/master/styles) you can download.

[Next: System configuration →](system.md)