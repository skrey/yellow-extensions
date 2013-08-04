System configuration
====================

All configuration is located in the **system folder**. You can change your website settings here.

![Screenshot](picture_system.png?raw=true)

The `config` folder contains configuration files. The `core` folder is for the Yellow software itself, its content changes only with a software update. The `plugins` folder is for Yellow plugins, to add new features. Most configuration happens in the `snippets` and `templates` folders, this is where the website layout and functionality is defined.

Changes in system folders affect the entire website.

Configuration files
-------------------
The main configuration file is `system/config/config.ini`. You can define the default settings of your website here. For a new installation you should set sitename, author and language. Here's an example:

    sitename = Anna's Design Company
    author = Anna's Design Company
    language = en
    template = default
    style = default
    parser = markdown

These settings can be overwritten in the meta data of a page (Info). Configuration files should be stored in [UTF-8](http://en.wikipedia.org/wiki/UTF-8).

Error handling
--------------
Yellow will tell when something goes wrong. For example a missing file shows "File not found" with corresponding [HTTP status code](http://en.wikipedia.org/wiki/List_of_HTTP_status_codes). The file `system/config/error404.txt` defines how a missing file looks like. You have complete control over what's shown to visitors. 

Check the web server logfile for further information.