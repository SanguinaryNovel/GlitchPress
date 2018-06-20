<?php snippet('header') ?>

<main class="main" role="main">

	<div class="project-info cf">
		<div class="box-left">
			<h1><?php echo $page->title()->html() ?></h1>
			<time datetime="<?php echo $page->year('c') ?>"><?php echo $page->year('Y', 'year') ?></time>
		</div>
		<div class="box-right">
		<?php echo $page->text()->kirbytext() ?>
		<span class="toolclient">Client:</span><?php echo $page->client() ?> <br>
		<span class="toolclient">Tools:</span><?php echo $page->tools() ?>
		</div>
	</div>

	<div class="project-images">
		<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
		<figure>
			<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
		</figure>
		<?php endforeach ?>
	</div>

	<ul class="meta cf">
		<li><b>Share:</b>
		<a class="twit" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @your_account')?>" target="blank" title="Tweet this">Tweet</a> <b>/</b>
		<a class="face" href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook">Facebook</a> <b>/</b>
		<a class="goog" href="https://plusone.google.com/_/+1/confirm?hl=de&url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="blank" title="Share on Google+">Google+</a>
		</li>
	</ul>

	<nav class="nextprev cf" role="navigation">
	<?php if($next = $page->nextVisible()): ?>
		<a class="prev" href="<?php echo $next->url() ?>">&larr; <?php echo $next->title() ?></a>
	<?php else: ?>
		<a class="prev" href="<?php echo url('projects') ?>">&larr; Back to Projects</a>
	<?php endif ?>

	<?php if($prev = $page->prevVisible()): ?>
		<a class="next" href="<?php echo $prev->url() ?>"><?php echo $prev->title() ?> &rarr;</a>
	<?php else: ?>
		<a class="next" href="<?php echo url('projects') ?>">Back to Projects &rarr;</a>
	<?php endif ?>
	</nav>

</main>

<?php snippet('footer') ?>
