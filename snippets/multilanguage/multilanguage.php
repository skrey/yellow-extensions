<?php list($name, $page) = $yellow->getSnippetArgs() ?>
<?php $locationArgs = $page ? $yellow->toolbox->getLocationArgs() : "" ?>
<?php $pages = $yellow->pages->multi($page ? $page->location : "/") ?>
<?php if(count($pages) > 1): ?>
<?php foreach($pages as $page): ?>
<a href="<?php echo $page->getLocation().$locationArgs ?>"><?php echo $yellow->text->getTextHtml("languageDescription", $page->get("language")) ?></a>
<?php endforeach ?>
<?php endif ?>
