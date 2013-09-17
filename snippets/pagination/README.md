Pagination snippet
==================

Website pagination with a previous and next page.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/markseu/yellowcms/).  
2. Download [pagination.php](pagination.php?raw=true), copy into your system/snippets folder.  
3. Copy [text lines](pagination.txt?raw=true) into your system/config/text_english.ini file.
3. Use the snippet on your website, edit templates in your system/templates folder.

To uninstall delete the snippet and remove it from templates.

Example
-------
Template with recently modified pages and pagination:

    <?php $yellow->snippet("header") ?>
    <?php $yellow->snippet("navigation") ?>
    <div class="content">
    <?php $pages = $yellow->pages->index()->sort("modified")->pagination(10) ?>
    <?php foreach($pages as $page): ?>
    <?php echo $page->getHtml("title") ?><br/>
    <?php endforeach ?>
    <?php $yellow->snippet("pagination", $pages) ?>
    </div>
    <?php $yellow->snippet("footer") ?>
    <?php $yellow->header("Last-Modified: ".$pages->getModified(true)) ?>