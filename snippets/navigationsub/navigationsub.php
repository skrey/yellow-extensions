<?php list($name, $showDefault) = $yellow->getSnippetArgs() ?>
<?php $pages = array() ?>
<?php $page = $yellow->page->getParentTop() ?>
<?php if($page) $pages = (array)$page->getChildren() ?>
<?php if($page && $showDefault) array_unshift($pages, $page) ?>
<?php if(count($pages)): ?>
<div class="navigation">
<ul>
<?php foreach($pages as $page): ?>
<li><a<?php echo $page->isActive() ? " class=\"active\"" : "" ?> href="<?php echo $page->getLocation() ?>"><?php echo $page->getTitle() ?></a></li>
<?php endforeach ?>
</ul>
</div>
<?php endif ?>
