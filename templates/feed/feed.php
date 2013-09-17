<?php if($yellow->getRequestHandler() == "webinterface") { require_once("default.php"); return; } ?>
<?php $pages = $yellow->pages->index(false, 3) ?>
<?php $pages = $pages->sort("modified", false)->limit(10); ?>
<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n" ?>
<rss version="2.0">
<channel>
<title><?php echo $yellow->page->getHtml("titleHeader") ?></title>
<description><?php echo $yellow->page->getHtml("description") ?></description>
<link><?php echo "http://".$yellow->config->get("serverName").$yellow->page->getLocation() ?></link>
<language><?php echo $yellow->page->getHtml("language") ?></language>
<?php foreach($pages as $page): ?>
<item>
<title><![CDATA[<?php echo $page->getHtml("titleHeader") ?>]]></title>
<link><?php echo "http://".$yellow->config->get("serverName").$page->getLocation() ?></link>
<guid isPermaLink="false"><?php echo "http://".$yellow->config->get("serverName").$page->getLocation()."?".$page->getModified() ?></guid>
<description><![CDATA[<?php echo $yellow->toolbox->createTextDescription($page->getContent(), 350, false) ?>]]></description>
</item>
<?php endforeach ?>
</channel>
</rss>
<?php $yellow->header("Content-Type: application/rss+xml; charset=\"utf-8\"") ?>
<?php $yellow->header("Last-Modified: ".$pages->getModified(true)) ?>