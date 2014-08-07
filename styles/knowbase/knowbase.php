<?php $yellow->snippet("header") ?>
<div class="main">
<div class="column1">
<?php $yellow->snippet("sitename") ?>
<?php $yellow->snippet("navigationtree") ?>
</div>
<div class="column2">
<?php $yellow->snippet("content") ?>
</div>
</div>
<?php $yellow->snippet("footer") ?>
<?php $pages = $yellow->pages->index()->append($yellow->page) ?>
<?php $yellow->page->header("Last-Modified: ".$pages->getModified(true)) ?>