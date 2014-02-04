<?php $yellow->snippet("header") ?>
<?php $yellow->snippet("navigation") ?>
<div class="content blogarticle">
<div class="article">
<div class="entry-header"><h1><?php echo $yellow->page->getHtml("title") ?></h1></div>
<div class="entry-meta"><?php echo $yellow->page->getHtml("published") ?> <?php echo $yellow->text->getHtml("blogBy") ?> <?php $authorCounter = 0; foreach(preg_split("/,\s*/", $yellow->page->get("author")) as $author) { if(++$authorCounter>1) echo ", "; echo "<a href=\"".$yellow->page->getParent()->getLocation().$yellow->toolbox->normaliseLocationArgs("author:$author")."\">".htmlspecialchars($author)."</a>"; } ?></div>
<div class="entry-content"><?php echo $yellow->page->getContent() ?></div>
<div class="entry-footer">
<?php if($yellow->page->isExisting("tag")): ?>
<p><?php echo $yellow->text->getHtml("blogTag") ?> <?php $tagCounter = 0; foreach(preg_split("/,\s*/", $yellow->page->get("tag")) as $tag) { if(++$tagCounter>1) echo ", "; echo "<a href=\"".$yellow->page->getParent()->getLocation().$yellow->toolbox->normaliseLocationArgs("tag:$tag")."\">".htmlspecialchars($tag)."</a>"; } ?></p>
<?php endif ?>
</div>
</div>
</div>
<?php $yellow->snippet("footer") ?>