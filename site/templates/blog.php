<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="blog">
	<!--COVER-->
	<section class="about__cover">
		<div class="about__cover__layout">
			<div class="about__cover__overlay"></div>
			<div class="about__cover__image">
				<?php if ($image = $page->cover_image()->toFile()): ?>
					<img src="<?= $image->url() ?>">
				<?php endif ?>
			</div>
			<article class="about__cover__text">
				<h1>IDEAS Y PERSPECTIVAS</h1>
				<h2>
					Todo lo que necesitas saber sobre desarrollo,
					<span>inversión y nuevas formas de habitar.</span>
				</h2>

				<button type="button" class="button">
					<span>Scroll down</span>
					<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.9432 16.0003L12.7538 19.1896V2.75024C12.7538 2.33603 12.4181 2.00024 12.0038 2.00024C11.5896 2.00024 11.2538 2.33603 11.2538 2.75024V19.1896L8.06451 16.0003C7.77161 15.7074 7.29674 15.7074 7.00385 16.0003C6.71096 16.2932 6.71096 16.768 7.00385 17.0609L11.4735 21.5306C11.7664 21.8235 12.2413 21.8235 12.5342 21.5306L17.0038 17.0609C17.2967 16.768 17.2967 16.2932 17.0038 16.0003C16.7109 15.7074 16.2361 15.7074 15.9432 16.0003Z" />
					</svg>
				</button>
			</article>
		</div>
	</section>
	<!--COVER-->

	<!--ITEMS-->
	<section class="home__blog">
		<div class="page__layout">
			<!--TITLE-->
			<div class="home__blog__headline">
				<p>Nuestro blog</p>
				<h4>
					Explora contenido especializado para <span>tomar decisiones con mayor confianza</span>
				</h4>
			</div>
			<!--TITLE-->

			<!--ITEMS-->
			<div class="blog__items">
				<!--GRID-->
				<div class="page__grid" data-role="grid">
					<?php foreach ($articles as $article): ?>
						<div class="page__column" data-column="4" data-role="column">
							<?php snippet('component/article', ['article' => $article]) ?>
						</div>
					<?php endforeach ?>
				</div>
				<!--GRID-->
			</div>
			<!--ITEMS-->
		</div>
	</section>
	<!--ITEMS-->

	<!--CTA-->
	<?php snippet('sections/cta') ?>
	<!--CTA-->
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>