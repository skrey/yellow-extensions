---
Title: Adjusting system
---
All settings are located in the `system` folder. You can adjust your website here.

[image screenshot-system.png Screenshot]

The `extensions` folder contains installed extensions. You can use the `layouts` folder and the `resources` folder to adjust the appearance of your website. The `settings` folder contains configuration files. The `trash` folder contains deleted files.

## System settings

The main configuration file is `system/settings/system.ini`. Here's an example:

    Sitename: Anna Svensson Design
    Author: Anna Svensson
    Email: anna@svensson.com
    Timezone: Europe/Stockholm
    Language: en
    Layout: default
    Theme: stockholm

You can define the system settings here, for example the name of the website and the email of the webmaster. Individual [settings](markdown-cheat-sheet#settings) can be defined at the top of each page. For a new installation you should set `Sitename`, `Author` and `Email`.

## Text settings

Another configuration file is `system/settings/text.ini`. Here's an example:

    EditLoginTitle: Welcome to Stockholm
    Error404Title: File not found
    Error404Text: The requested file was not found. Oh no...
    DateFormatShort: F Y
    DateFormatMedium: Y-m-d
    DateFormatLong: Y-m-d H:i
    picture.jpg: This is an example image caption.

You can define the text settings here, for example error messages of the website, the date format and [image captions](https://github.com/datenstrom/yellow-extensions/tree/master/features/gallery). The default text is defined in the corresponding [language file](https://github.com/datenstrom/yellow-extensions/blob/master/languages/english/english-language.txt). You can copy text from a language file into the text settings and customise it.

## User accounts

All user accounts are stored in file `system/settings/user.ini`. Here's an example:

    anna@svensson.com: $2y$10$j26zDnt/xaWxC/eqGKb9p.d6e3pbVENDfRzauTawNCUHHl3CCOIzG,Anna,en,active,none,21196d7e857d541849e4,946684800,0,administrator,/
    english@demo.com: $2y$10$zG5tycOnAJ5nndGfEQhrBexVxNYIvepSWYd1PdSb1EPJuLHakJ9Ri,Demo,en,active,none,f3e71699df534913a823,946684800,0,user,/
    guest@demo.com: $2y$10$zG5tycOnAJ5nndGfEQhrBexVxNYIvepSWYd1PdSb1EPJuLHakJ9Ri,Guest,en,active,none,b3106b8b1732ee60f5b3,946684800,0,user,/tests/

You can use the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) and the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command) to create new user accounts and change passwords. A user account consists of one line with email, encrypted password and different settings. At the end of the line is the user's group and home page.

[Next: Language configuration →](language-configuration)