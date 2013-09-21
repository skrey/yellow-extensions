<?php list($name, $location, $pages) = $yellow->getSnippetArgs() ?>
<?php $months = getBlogMonths($pages) ?>
<div class="blogarchive">
<ul>
<?php foreach($months as $key=>$value): ?>
<li><a href="<?php echo $location."published:".rawurlencode(strtoloweru($key)) ?>"><?php echo strftime("%B %Y", strtotime($key)) ?></a> </li>
<?php endforeach ?>
</ul>
</div>
<?php function getBlogMonths($pages)
{
	$months = array();
	foreach($pages as $page)
	{
		if(preg_match("/^(\d+\-\d+)\-/", $page->get("published"), $matches)) ++$months[$matches[1]];
	}
	uksort($months, strnatcasecmp);
	return array_reverse($months);
}
?>
