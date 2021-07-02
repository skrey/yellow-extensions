---
Title: How to adjust media 
---
All media is located in the `media` folder. You can store your images and other files here.

    ├── content
    ├── media
    │   ├── downloads
    │   ├── images
    │   └── thumbnails
    └── system

The `downloads` folder contains files to download. The `images` folder is the place to store your images. The `thumbnails` folder contains image thumbnails. You can also create additional folders and organise files as you like. Essentially, any media file can be downloaded from the website.

## Images

You can use the [image extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/image) to embed images. The image formats GIF, JPG, PNG and SVG are supported. To add a new image, copy a new file into the `images` folder and create an `[image]` shortcut. You can also upload images in a [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit), then this will happen automatically. 

Adding an image:

    [image photo.jpg]
    [image photo.jpg Example]
    [image photo.jpg "This is an example image"]

Adding an image, different styles:

    [image photo.jpg Example left]
    [image photo.jpg Example center]
    [image photo.jpg Example right]

Adding an image, different sizes:

    [image photo.jpg Example right 50%]
    [image photo.jpg Example right 64 64]
    [image photo.jpg Example right 320 200]

Adding an image, different sizes with the default style:

    [image photo.jpg Example - 50%]
    [image photo.jpg Example - 64 64]
    [image photo.jpg Example - 320 200]

## Videos

You can use the [Youtube extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube) to embed videos:

Embedding a video:

    [youtube fhs55HEl-Gc]
    [youtube wNiyp89pTi0]
    [youtube OV5J6BfToSw]

Embedding a video, different sizes:

    [youtube fhs55HEl-Gc right 50%]
    [youtube fhs55HEl-Gc right 200 112]
    [youtube fhs55HEl-Gc right 400 224]

Do you have questions? [Get help](.) and [contribute](contributing-guidelines).
