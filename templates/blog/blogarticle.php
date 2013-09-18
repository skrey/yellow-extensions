<?php $yellow->snippet("header") ?>
<?php $yellow->snippet("navigation") ?>
<div class="content blogarticle">
<div class="article">
<div class="entry-header"><h1><?php echo $yellow->page->getHtml("title") ?></h1></div>
<div class="entry-meta"><?php echo $yellow->page->getHtml("published") ?> <?php echo $yellow->text->getHtml("blogBy") ?> <a href="<?php echo $yellow->page->getParent()->getLocation()."author:".rawurlencode(strtoloweru($yellow->page->get("author"))) ?>"><?php echo $yellow->page->getHtml("author") ?></a></div>
<div class="entry-content"><?php echo $yellow->page->getContent() ?></div>
<div class="entry-footer">
<?php if($yellow->page->isExisting("tag")): ?>
<?php echo $yellow->text->getHtml("blogTag") ?> 
<?php foreach(preg_split("/,\s*/", $yellow->page->get("tag")) as $tag): ?>
<a href="<?php echo $yellow->page->getParent()->getLocation()."tag:".rawurlencode(strtoloweru($tag)) ?>"><?php echo htmlspecialchars($tag) ?></a>
<?php endforeach ?>
<?php endif ?>
</div>
</div>
<!--comments-->
</div>
<?php $yellow->snippet("footer") ?>