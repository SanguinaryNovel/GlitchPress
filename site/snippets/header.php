<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php echo css(array(
	  'assets/css/main.css',
	  '@auto',
	)) ?>

</head>
<body>
<!--[if lte IE 9]>
<div class="browserupdate">You are using an obsolete browser which can harm your experience and cause security trouble. Please <a href="http://browsehappy.com/" target="_blank">update your browser!</a></div>
<![endif]-->

<?php snippet('menu') ?>

<div class="width">

	<header class="header cf" role="banner">
		<a class="logo" href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a>
		<div class="btn-toggle"><span></span></div>
	</header>