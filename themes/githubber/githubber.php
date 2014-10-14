<?php $yellow->snippet("header") ?>
<?php $yellow->snippet("sitename") ?>
<?php $yellow->snippet("navigation") ?>
<div class="file">
<div class="meta">
<div class="meta-title"><?php echo $yellow->page->getHtml("title") ?></div>
<div class="meta-data">
<?php if($yellow->page->isExisting("tag")): ?>
<?php $tagCounter = 0; foreach(preg_split("/,\s*/", $yellow->page->get("tag")) as $tag) { if(++$tagCounter>1) echo ", "; echo "<a href=\"".$yellow->page->getParentTop()->getLocation().$yellow->toolbox->normaliseArgs("tag:$tag")."\">".htmlspecialchars($tag)."</a>"; } ?>
<?php endif ?>
</div>
<div class="meta-actions"></div>
</div>
<div class="content"><?php echo $yellow->page->getContent() ?></div>
</div>
<?php $yellow->snippet("footer") ?>