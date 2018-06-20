<?php snippet('header') ?>

<main class="main" role="main">

	<?php if(isset($success)){ ?>

	<div class="cf">
		<div class="box-left"><h1><?php echo $page->successtitle()->html() ?></h1></div>
		<div class="box-right">
			<div class="alert success">
				<?php echo $page->successtext()->kirbytext() ?>
			</div>
		</div>
	</div>

	<?php } else { ?>

	<div class="cf">
		<div class="box-left">
		<?php if(isset($error)){ ?>

		<h1><?php echo $page->errortitle()->html() ?></h1>
		<div class="alert error">
			<?php echo $page->errortext()->kirbytext() ?>
		</div>

		<?php } else { ?>

		<?php if($alert): ?>
		<h1><?php echo $page->errortitle2()->html() ?></h1>
		<div class="alert error">
			<?php echo $page->errortext2()->kirbytext() ?>
		</div>
		<?php else: ?>

		<h1><?= $page->subtitle()->or($page->title()) ?></h1>
		<?php echo $page->text()->kirbytext() ?>

		<?php endif ?>

		<?php } ?>

		</div>

		<div class="box-right">
			<form method="post">
				<p class="field<?php e(isset($alert['name']), ' error'); ?>">
					<label for="name">Last name / first name <abbr title="required">*</abbr></label>
					<input type="text" id="name" name="name" value="<?= isset($data['name']) ? $data['name'] : '' ?>">
				</p>
				<p class="field<?php e(isset($alert['email']), ' error'); ?>">
					<label for="email">Mail address <abbr title="required">*</abbr></label>
					<input type="email" id="email" name="email" value="<?= isset($data['email']) ? $data['email'] : '' ?>">
				</p>
				<p class="field<?php e(isset($alert['text']), ' error'); ?>">
					<label for="text">Message <abbr title="required">*</abbr></label>
					<textarea id="text" name="text"><?= isset($data['text']) ? $data['text'] : '' ?></textarea>
				</p>
				<p class="field honeypot">
					<label for="subject">Subject <abbr title="required">*</abbr></label>
					<input type="text" id="subject" name="subject">
				</p>
				<p>
					<button type="submit" name="submit" value="Send your message">Send your message</button>
					<!--<span class="help">All fields with * are required</span>-->
				</p>
			</form>
		</div>

	</div>

	<?php } ?>

</main>

<?php snippet('footer') ?>