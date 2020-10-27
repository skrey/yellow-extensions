---
Title: Adjusting system
---
All settings are located in the `system` folder. You can adjust your website here.

    ├── content
    ├── media
    └── system
        ├── extensions
        ├── layouts
        ├── themes
        └── trash

The `extensions` folder contains installed extensions. You can use the `layouts` folder and the `themes` folder to adjust the appearance of your website. The `trash` folder contains deleted files.

## System settings

The main configuration file is `system/extensions/yellow-system.ini`. Here's an example:

    Sitename: Anna Svensson Design
    Author: Anna Svensson
    Email: anna@svensson.com
    Language: en
    Layout: default
    Theme: stockholm
    Parser: markdown
    Status: public

You can define the system settings here, for example the name of the website and the email of the webmaster. Individual [settings](markdown-cheat-sheet#settings) can be defined at the top of each page. For a new installation you should set `Sitename`, `Author` and `Email`.

## Language settings

Another configuration file is `system/extensions/yellow-language.ini`. Here's an example:

    Language: en
    CoreDateFormatMedium: Y-m-d
    media/images/photo.jpg: This is an example image

You can define the text settings here, for example text sections and image captions. Text settings consist of `Language` and other settings. You can define any text or adjust the [default settings](https://github.com/datenstrom/yellow-extensions/blob/master/source/english/english.txt) of languages.

## User settings

All user accounts are stored in file `system/extensions/yellow-user.ini`. Here's an example:

    Email: anna@svensson.com
    Name: Anna Svensson
    Language: en
    Home: /
    Access: create, edit, delete, upload, system, update
    Hash: $2y$10$j26zDnt/xaWxC/eqGKb9p.d6e3pbVENDfRzauTawNCUHHl3CCOIzG
    Stamp: 21196d7e857d541849e4
    Pending: none
    Failed: 0
    Modified: 2000-01-01 13:37:00
    Status: active

You can use the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/source/edit) and the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/source/command) to create new user accounts and change passwords. A user account consists of `Email` and other settings. If you don't want all pages to be edited in the web browser, then change the home page of the user.
