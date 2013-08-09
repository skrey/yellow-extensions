<div class="content">
<p>
<?php foreach(findParentsRecursive($yellow->page, $yellow) as $page): ?>
<a href="<?php echo $page->getLocation() ?>"><?php echo $page->getTitle() ?></a>
<?php if($page->getLocation() != $yellow->page->getLocation()) echo "&gt; " ?>
<?php endforeach ?>
</p>
</div>
<?php function findParentsRecursive($page, $yellow)
{
	$pages = array($page);
	if($parent = $page->getParent()) $pages = array_merge(findParentsRecursive($parent, $yellow), $pages);
	else if($page->location != "/") array_unshift($pages, $yellow->pages->find("/", false)->first());
	return $pages;
}
?>
