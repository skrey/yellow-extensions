Sitemap template
================

Sitemap for website.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [sitemap.php](sitemap.php?raw=true) and [sitemapxml.php](sitemapxml.php?raw=true), copy both files into your system/templates folder.  
3. Create a new folder 'sitemap' in your content folder.
4. Download [page.txt](page.txt?raw=true) and [sitemap.xml.txt](sitemap.xml.txt?raw=true), copy both files into your content/sitemap folder.

To uninstall delete the template files and folder.

How to use a sitemap?
---------------------
The sitemap is available on your website as `http://website/sitemap/` and `http://website/sitemap/sitemap.xml`. It's an overview of the entire website, only visible pages are included. You can add a link to your navigation or individual pages. For search engines add the following line to your header snippet:

`<link rel="sitemap" type="text/xml" href="<?php echo $yellow->config->get("serverBase")."/sitemap/sitemap.xml" ?>">`