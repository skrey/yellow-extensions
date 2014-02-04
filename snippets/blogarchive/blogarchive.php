<?php list($name, $location, $pages) = $yellow->getSnippetArgs() ?>
<?php $months = array(); ?>
<?php foreach($pages as $page) if(preg_match("/^(\d+\-\d+)\-/", $page->get("published"), $matches)) ++$months[$matches[1]]; ?>
<?php uksort($months, strnatcasecmp); ?>
<?php $months = array_reverse($months); ?>
<div class="blogarchive">
<ul>
<?php foreach($months as $key=>$value): ?>
<li><a href="<?php echo $location.$yellow->toolbox->normaliseLocationArgs("published:$key") ?>"><?php echo strftime("%B %Y", strtotime($key)) ?></a> </li>
<?php endforeach ?>
</ul>
</div>
