Blogtagcloud snippet
====================

Tag cloud for blog.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download and install [Yellow blog template](https://github.com/markseu/yellowcms-extensions/blob/master/templates/blog/README.md).  
3. Download [blogtagcloud.php](blogtagcloud.php?raw=true), copy into your system/snippets folder.  
4. Use the snippet on your website, edit templates in your system/templates folder.
5. Customise style sheets in your media/styles folder.

To uninstall delete the snippet and remove it from templates.

Example
-------
Blog template with tag cloud:

    ...
    <div class="content blog">Blog content</div>
    <div class="info">
    <h2><?php echo $yellow->text->getHtml("blogTagcloud") ?></h2>
    <?php $yellow->snippet("blogtagcloud", $yellow->page->getLocation(), $yellow->page->getChildren()) ?>
    </div>
    <?php $yellow->snippet("footer") ?>
    ...

Style for tag cloud:

    .blogtagcloud li { display:inline; }
    .blogtagcloud ul { margin:0; padding:0; list-style:none; }
    .blogtagcloud .type1 { font-size:80%; }
    .blogtagcloud .type2 { font-size:100%; }
    .blogtagcloud .type3 { font-size:120%; }
    .blogtagcloud .type4 { font-size:140%; }
    .blogtagcloud .type5 { font-size:160%; }