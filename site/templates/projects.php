<?php snippet('header') ?>

<main class="main" role="main">
	<?php if(param('tag')): ?>

	<div class="tags cf">
		<div class="box-left">
			<h1>Project<?php if($projects->count() > 1) echo 's' ?> tagged with:</h1>
		</div>
		<div class="box-right">
			<h1><?php echo $tag ?></h1>
		</div>
	</div>

	<ul class="grid cf">
		<?php foreach($projects as $project): ?>
		<li class="column">
			<?php $image = $project->cover_image()->toFile();
				  if($image):
			?>
			<a href="<?php echo $project->url() ?>">
				<div><div><h1><?php echo $project->title()->html() ?></h1></div></div>
				<?php echo thumb($image, array('width' => 600, 'height' => 600, 'crop' => true)); ?>
			</a>
			<?php endif ?>
		</li>
		<?php endforeach ?>
	</ul>

	<?php else: ?>

	<ul class="grid cf">
		<?php foreach($projects as $project): ?>
		<li class="column">
			<?php $image = $project->cover_image()->toFile();
				  if($image):
			?>
			<a href="<?php echo $project->url() ?>">
				<div><div><h1><?php echo $project->title()->html() ?></h1></div></div>
				<?php echo thumb($image, array('width' => 600, 'height' => 600, 'crop' => true)); ?>
			</a>
			<?php endif ?>
		</li>
		<?php endforeach ?>
	</ul>

	<?php endif ?>

	<?php if($projects->pagination()->hasPages()): ?>
	<nav class="nextprev cf" role="navigation">
		<?php if($projects->pagination()->hasNextPage()): ?>
		<a class="next" href="<?php echo $projects->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
		<?php endif ?>
		<?php if($projects->pagination()->hasPrevPage()): ?>
		<a class="prev" href="<?php echo $projects->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
		<?php endif ?>
	</nav>
	<?php endif ?>
</main>

<?php snippet('footer') ?>