<?php list($name, $pages) = $yellow->getSnippetArgs() ?>
<?php if(!$pages) $pages = $yellow->pages->top() ?>
<ul>
<?php foreach($pages as $page): ?>
<li><a<?php echo $page->isActive() ? " class=\"active\"" : "" ?> href="<?php echo $page->getLocation() ?>"><?php echo $page->getHtml("titleNavigation") ?></a></li>
<?php $children = $page->getChildren() ?>
<?php if($children->count()) $yellow->snippet($name, $children) ?>
<?php endforeach ?>
</ul>
