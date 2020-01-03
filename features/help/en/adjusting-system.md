---
Title: Adjusting system
---
All settings are located in the `system` folder. You can adjust your website here.

[image help-screenshot-system.png Screenshot]

The `extensions` folder contains installed extensions. You can use the `layouts` folder and the `resources` folder to adjust the appearance of your website. The `settings` folder contains configuration files. The `trash` folder contains deleted files.

## System settings

The main configuration file is `system/settings/system.ini`. Here's an example:

    Sitename: Anna Svensson Design
    Author: Anna Svensson
    Email: anna@svensson.com
    Language: en
    Layout: default
    Theme: stockholm
    Parser: markdown
    Status: public

You can define the system settings here, for example the name of the website and the email of the webmaster. Individual [settings](markdown-cheat-sheet#settings) can be defined at the top of each page. For a new installation you should set `Sitename`, `Author` and `Email`.

## Text settings

Another configuration file is `system/settings/text.ini`. Here's an example:

    Language: en
    TextYes: Yes
    TextNo: No
    EditLoginTitle: Welcome to Stockholm
    Error404Title: File not found
    Error404Text: The requested file was not found. Oh no...
    picture.jpg: This is an example image caption.

You can define the text settings here, for example error messages of the website  and image captions. Text settings consist of `Language` and other settings. You can define any text or adjust the [default settings](https://github.com/datenstrom/yellow-extensions/blob/master/languages/english/english-language.txt) of languages.

## User accounts

All user accounts are stored in file `system/settings/user.ini`. Here's an example:

    Email: anna@svensson.com
    Name: Anna Svensson
    Language: en
    Home: /
    Access: create, edit, delete, upload, system, update
    Status: active
    Pending: none
    Hash: $2y$10$j26zDnt/xaWxC/eqGKb9p.d6e3pbVENDfRzauTawNCUHHl3CCOIzG
    Stamp: 21196d7e857d541849e4
    Failed: 0
    Modified: 2000-01-01 13:37:00

You can use the [web browser](https://github.com/datenstrom/yellow-extensions/tree/master/features/edit) and the [command line](https://github.com/datenstrom/yellow-extensions/tree/master/features/command) to create new user accounts and change passwords. A user account consists of `Email` and other settings. If you don't want all pages to be edited in the web browser, then change the home page of the user.
