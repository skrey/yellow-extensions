Adding media
============
All media is located in the **media folder**. You can store your images and other files here.

![Screenshot](media-screenshot.png?raw=true)

The standard installation of Yellow comes with one media folder. The `images` folder is the place to store your images. For a small website put all images inside this folder, otherwise use multiple folders. All media files are available on your website, you can use any file type you want.

Create additional folders and organise media files as you like.

Images
------
Here's how to use images and photos on a page. Open the file `content/1-home/page.txt` in your favorite text editor. Add `![image](icon.png)` to the text of the page. The home page shows now the default website icon. 

`![image](icon.png)` shows the image `http://website/images/icon.png`  
`![image](picture.jpg)` shows the image `http://website/images/picture.jpg`  

To use more images, add more files to your images folder.

Image resize
------------
Yellow has no built-in image resize, but there's the [image plugin](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/image) for resizable images and thumbnails.

`[image icon.png]` shows the image `http://website/images/icon.png`  
`[image picture.jpg]` shows the image `http://website/images/picture.jpg`  

Different styles:

    [image picture.jpg Picture left]
    [image picture.jpg Picture right]

Different sizes:

    [image picture.jpg Picture - 320 200]
    [image picture.jpg Picture - 50%]

You can use images in any size.

Videos
------
Yellow has no built-in video support, but you can use the [Youtube](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/youtube) and [Vimeo plugin](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/vimeo) to embed videos.

`[youtube fhs55HEl-Gc]` shows the video `http://www.youtube.com/watch?v=fhs55HEl-Gc`  
`[vimeo 13387502]` shows the video `http://vimeo.com/13387502`  

Embed a Youtube video:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc right 200 112]

Embed a Vimeo video:

    [vimeo 13387502]
    [vimeo 13387502 right 200 112]

[Next: System configuration →](system.md)