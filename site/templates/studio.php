<?php snippet('header') ?>

<main class="main" role="main">

	<div class="studio-info cf">
		<div class="box-left">
			<h1><?php echo $page->subtitle()->or($page->title()) ?></h1>
		</div>
		<div class="box-right text">
			<?php echo $page->text()->kirbytext() ?>
		</div>
	</div>

	<div class="studio-images">
		<?php $image = $page->cover_image()->toFile();
			  if($image):
		?>
		<figure class="cover">
			<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
		</figure>
		<?php endif ?>
	</div>

</main>

<?php snippet('footer') ?>