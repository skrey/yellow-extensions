---
Title: Adjusting media 
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

You can use the [image extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/image) to embed images. To add a new image, copy a new file into the `images` folder and create an `[image]` shortcut. The image formats GIF, JPG, PNG and SVG are supported. Here's an example:

    [image photo.jpg]
    [image photo.jpg Example]
    [image photo.jpg "This is an example image"]

Images in different styles:

    [image photo.jpg Example left]
    [image photo.jpg Example center]
    [image photo.jpg Example right]

Images in different sizes:

    [image photo.jpg Example - 64 64]
    [image photo.jpg Example - 320 200]
    [image photo.jpg Example - 50%]

## Videos

You can use the [Youtube extension](https://github.com/datenstrom/yellow-extensions/tree/master/source/youtube) to embed videos:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc left 200 112]
    [youtube fhs55HEl-Gc right 200 112]
