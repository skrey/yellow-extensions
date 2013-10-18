<?php $yellow->snippet("header") ?>
<?php $yellow->snippet("navigation") ?>
<div class="file">
<div class="meta">
<div class="meta-title"><?php echo $yellow->page->getHtml("title") ?></div>
<div class="meta-actions"><a class="minibutton" href="<?php echo $yellow->page->get("pageRead") ?>">Read</a> <a class="minibutton" href="<?php echo $yellow->page->get("pageEdit") ?>">Edit</a></div>
</div>
<div class="content"><?php echo $yellow->page->getContent() ?></div>
</div>
<?php $yellow->snippet("footer") ?>