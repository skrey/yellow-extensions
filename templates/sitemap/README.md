Sitemap template
================

Sitemap for search engines.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [sitemap.php](sitemap.php?raw=true), copy into your system/templates folder.  
3. Create a new folder 'sitemap' in your content folder.
4. Download [page.txt](page.txt?raw=true), copy into your content/sitemap folder.

To uninstall delete the sitemap template and folder.

How to use a sitemap?
---------------------
The sitemap is available on your website as `http://website/sitemap/`. You can add a link to every page, for example add the following line to your header snippet:

`<link rel="sitemap" type="text/xml" href="<?php echo $yellow->config->get("serverBase")."/sitemap/" ?>">`