<div class="content main">
<h1><?php echo $yellow->page->getHtml("title") ?></h1>
<ul>
<?php foreach($yellow->page->getPages() as $page): ?>
<?php if($yellow->page->get("feedChronologicalOrder")): ?>
<?php $sectionNew = htmlspecialchars($page->getDate("modified")) ?>
<?php else: ?>
<?php $sectionNew = htmlspecialchars($page->getDate("published")) ?>
<?php endif ?>
<?php if($section != $sectionNew) { $section = $sectionNew; echo "</ul><h2>$section</h2><ul>\r\n"; } ?>
<li><a href="<?php echo $page->getLocation() ?>"><?php echo $page->getHtml("title") ?></a></li>
<?php endforeach ?>
</ul>
<?php $yellow->snippet("pagination", $yellow->page->getPages()) ?>
</div>
