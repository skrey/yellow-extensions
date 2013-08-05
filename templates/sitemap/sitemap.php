<?php if($yellow->getRequestHandler() == "webinterface") { require_once("default.php"); return; } ?>
<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php $pages = $yellow->pages->index(false, 3) ?>
<?php foreach($pages as $page): ?>
<url><loc><?php echo $page->getLocation() ?></loc></url>
<?php endforeach ?>
</urlset>
<?php $yellow->header("Content-Type: text/xml; charset=\"utf-8\"") ?>
<?php $yellow->header("Last-Modified: ".$pages->getModified(true)); ?>