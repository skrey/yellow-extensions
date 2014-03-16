<?php list($name, $location, $pages) = $yellow->getSnippetArgs() ?>
<?php $tags = array(); ?>
<?php foreach($pages as $page) if($page->isExisting("tag")) foreach(preg_split("/,\s*/", $page->get("tag")) as $tag) ++$tags[$tag]; ?>
<?php uksort($tags, strnatcasecmp); ?>
<?php $tagMinimum = min($tags); ?>
<?php $tagMaximum = max($tags); ?>
<?php $tagDivider = max(($tagMaximum - $tagMinimum)/4, 1); ?>
<?php foreach($tags as $key=>$value) $tags[$key] = "type".(1+intval(($value-$tagMinimum) / $tagDivider)); ?>
<div class="blogtagcloud">
<ul>
<?php foreach($tags as $key=>$value): ?>
<li><a class="<?php echo $value?>" href="<?php echo $location.$yellow->toolbox->normaliseArgs("tag:$key") ?>"><?php echo htmlspecialchars($key) ?></a></li>
<?php endforeach ?>
</ul>
</div>
