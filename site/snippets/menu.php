<nav class="navigation" role="navigation">
	<ul class="menu cf">
		<?php foreach($pages->visible() as $p): ?>
		<li><a<?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
		<?php endforeach ?>
	</ul>
	<div class="copyright">
		<?php echo $site->copyright()->kirbytext() ?>
	</div>
</nav>