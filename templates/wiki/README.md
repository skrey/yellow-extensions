Wiki template
=============
Wiki for collaboration.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [wiki.php](wiki.php?raw=true) and [wikipages.php](wikipages.php?raw=true), copy both files into your system/templates folder.  
3. Create a new folder '3-wiki' in your content folder.
4. Download [page.txt](page.txt?raw=true) and [wiki-page.txt](wiki-page.txt?raw=true), copy both files into your content/3-wiki folder.
5. Download [newwiki.txt](newwiki.txt?raw=true), copy into your system/config folder.
6. Add these [text lines](text.ini?raw=true) to your system/config/text.ini file.

To uninstall delete the template files and folder.

How to use a wiki?
------------------
The wiki is available on your website as `http://website/wiki/`. To make the wiki your home page, rename the wiki folder to '1-wiki' and delete '1-home'. To create a new wiki page, add a new file to the wiki folder. Set `Title` and more settings at the top of a page. Use `Tag` to group similar pages together.

Example
-------
Content file for a new wiki page:

    ---
    Title: Wiki page
    Tag: Example
    ---
    This is a new wiki page.