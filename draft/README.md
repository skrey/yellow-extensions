Draft plugin 0.6.1
==================
Support for draft pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [draft plugin](https://github.com/datenstrom/yellow-plugins/raw/master/zip/draft.zip).
3. Copy `draft.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to make a draft page?
-------------------------
Set `Status: draft` in the settings at the top of a page. The page will no longer be public accessible. You can continue to edit a draft in a browser and the file system.

Example
-------
Content file with draft status:

    ---
    Title: New page
    Status: draft
    ---
    Write text here