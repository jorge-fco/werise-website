<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page__error">
	<section class="page__error__section">
		<div class="page__layout" role="layout">
			<div class="page__headline page__error__headline">
				<h1>
					<data></data>
					<?= $page->titulo(); ?>
				</h1>
				<h2><?= $page->subtitulo(); ?></h2>
			</div>

			<div class="page__error__information">
				<?= $page->information()->kt(); ?>

				<a href="<?= $site->url(); ?>" class="button button__style" data-color="white" data-role="button" data-style="circle">
					<span>Regresar al inicio</span>
					<data>
						<?php snippet('icons/arrow') ?>
					</data>
				</a>
			</div>
		</div>
	</section>

	<?php snippet('sections/categories') ?>

	<?php snippet('sections/cta') ?>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>
