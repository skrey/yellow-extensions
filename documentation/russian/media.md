Добавление медиа
============
Все медиа файлы расположены в папке **media**. Здесь Вы можете хранить ваши изображения и другие файлы.

![Screenshot](media-screenshot.png?raw=true)

После установки, Yellow имеет одну папку с медиа файлами. Папка `images`, место для хранения ваших изображений. Для маленько сайта можно положить все изображения в эту папку, в противном случае используйте несколько папок. Все папки с медиа доступны на вашем сайте, вы можете использовать любой тип файла, который вы хотите.

Создавайте дополнительные папки и организовывайте медиа-файлы, как вам нравится.

Изображениея
------
Вот, как использовать изображения и фотографии на странице. Откройте файл `content/1-home/page.txt` в вашем любимом редакторе. Добавьте `![image](icon.png)` к тексту страницы. Теперь домашняя страница показывает значок сайта. 

`![image](icon.png)` показывает изображение `http://website/images/icon.png`  
`![image](picture.jpg)` показывает изображение `http://website/images/picture.jpg`  

Чтобы использовать несколько изображений, добавьте несколько файлов в папку изображений.

Изменение размера изображений
------------
Yellow не имеет встроенного механизма управления размерами изображений, но есть [плагин image](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/image) для изменения размера изображений и миниатюр.

`[image icon.png]` показывает изображение `http://website/images/icon.png`  
`[image picture.jpg]` показывает изображение `http://website/images/picture.jpg`  

Различные стили:

    [image picture.jpg Picture left]
    [image picture.jpg Picture right]

Различные размеры:

    [image picture.jpg Picture - 320 200]
    [image picture.jpg Picture - 50%]

Вы можете использовать изображения любого размера.

Видео
------
Yellow не имеет встроенной поддержки видео, но вы можете использовать плагины [Youtube](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/youtube) и [Vimeo](https://github.com/markseu/yellowcms-extensions/tree/master/plugins/vimeo) чтобы вставлять видео.

`[youtube fhs55HEl-Gc]` показывает видео `http://www.youtube.com/watch?v=fhs55HEl-Gc`  
`[vimeo 13387502]` показывает видео `http://vimeo.com/13387502`  

Вставить видео с YouTube:

    [youtube fhs55HEl-Gc]
    [youtube fhs55HEl-Gc right 200 112]

Вставить видео с Vimeo:

    [vimeo 13387502]
    [vimeo 13387502 right 200 112]

[Далее: Настройка системы →](system.md)