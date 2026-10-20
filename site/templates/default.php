<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page">
	<section class="page__section">
		<div class="page__layout" role="layout">
			<div class="page__headline">
				<h1><?= $page->title(); ?></h1>
			</div>
		</div>
	</section>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>
