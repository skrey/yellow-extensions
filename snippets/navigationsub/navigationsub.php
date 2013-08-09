<?php $page = $yellow->page->getParentTop() ?>
<?php $pages = $page ? $page->getChildren() : array() ?>
<?php if(count($pages)): ?>
<div class="navigation">
<ul>
<?php foreach($pages as $page): ?>
<li><a<?php echo $page->isActive() ? " class=\"active\"" : "" ?> href="<?php echo $page->getLocation() ?>"><?php echo $page->getTitle() ?></a></li>
<?php endforeach ?>
</ul>
</div>
<?php endif ?>
