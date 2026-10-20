<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page privacy">
	<section class="privacy__section page__section">
		<div class="page__layout" role="layout">
			<div class="privacy__headline page__headline">
				<h1><?= $page->titulo(); ?></h1>
				<p>Última actualización:  <?= $page->fecha(); ?></p>
			</div>
			<div class="privacy__information">
				<?= $page->information()->kt(); ?>
			</div>
		</div>
	</section>

	<?php snippet('sections/cta') ?>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>
