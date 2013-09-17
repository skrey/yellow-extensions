<div class="content">
<p>
<?php foreach($yellow->pages->path($yellow->page->getLocation(), true) as $page): ?>
<a href="<?php echo $page->getLocation() ?>"><?php echo $page->getHtml("titleNavigation") ?></a>
<?php if($page->getLocation() != $yellow->page->getLocation()) echo "&gt; " ?>
<?php endforeach ?>
</p>
</div>
