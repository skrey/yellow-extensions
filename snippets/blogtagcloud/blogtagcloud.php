<?php list($name, $location, $pages) = $yellow->getSnippetArgs() ?>
<?php $tags = getBlogTags($pages) ?>
<div class="blogtagcloud">
<ul>
<?php foreach($tags as $key=>$value): ?>
<li><a class="<?php echo $value?>" href="<?php echo $location."tag:".rawurlencode(strtoloweru($key)) ?>"><?php echo htmlspecialchars($key) ?></a></li>
<?php endforeach ?>
</ul>
</div>
<?php function getBlogTags($pages)
{
	$tags = array();
	foreach($pages as $page)
	{
		if($page->isExisting("tag"))
		{
			foreach(preg_split("/,\s*/", $page->get("tag")) as $tag) ++$tags[$tag];
		}
	}
	uksort($tags, strnatcasecmp);
	$tagMinimum = min($tags);
	$tagMaximum = max($tags);
	$tagDivider = max(($tagMaximum - $tagMinimum)/4, 1);
	foreach($tags as $key=>$value) $tags[$key] = "type".(1+intval(($value-$tagMinimum) / $tagDivider));
	return $tags;
}
?>
