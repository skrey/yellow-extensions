Wiki template
=============

Wiki for collaboration.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [wiki.php](wiki.php?raw=true) and [wikiarticles.php](wikiarticles.php?raw=true), copy both files into your system/templates folder.  
3. Create a new folder 'wiki' in your content folder.
4. Download [page.txt](page.txt?raw=true) and [wiki-article.txt](wiki-article.txt?raw=true), copy both files into your content/wiki folder.
5. Add these [text lines](text.ini?raw=true) to your system/config/textenglish.ini file.

To uninstall delete the template files and folder.

How to write a wiki?
--------------------
The wiki is available on your website as `http://website/wiki/`. To create a new wiki page, add a new file to your wiki folder. Set `Title` and more meta data at the top of a page. Use `Tag` to group similar pages together. You can update your wiki in a browser and the file system.

Example
-------
Content file for a new wiki page:

    ---
    Title: New wiki page
    Tag: Example
    ---
    Write text here