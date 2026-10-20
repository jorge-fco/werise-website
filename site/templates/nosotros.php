<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="about js-about">
	<!--01 COVER-->
	<section class="about__cover">
		<div class="about__cover__layout">
			<div class="about__cover__overlay"></div>
			<div class="about__cover__image">
				<img src="<?= $site->url(); ?>/assets/images/about-01.jpg">
			</div>
			<article class="about__cover__text">
				<h1>Lo que nos define</h1>
				<h2>Rediseñar el futuro de la <span>construcción sostenible</span></h2>
				<p>
					En RISE creemos que cada desarrollo representa una oportunidad para transformar la manera en que las personas viven, invierten y proyectan su futuro. Nuestra visión combina arquitectura, diseño y planeación estratégica para crear proyectos que generan valor con el paso del tiempo.
				</p>

				<button type="button" class="button">
					<span>Scroll down</span>
					<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path d="M15.9432 16.0003L12.7538 19.1896V2.75024C12.7538 2.33603 12.4181 2.00024 12.0038 2.00024C11.5896 2.00024 11.2538 2.33603 11.2538 2.75024V19.1896L8.06451 16.0003C7.77161 15.7074 7.29674 15.7074 7.00385 16.0003C6.71096 16.2932 6.71096 16.768 7.00385 17.0609L11.4735 21.5306C11.7664 21.8235 12.2413 21.8235 12.5342 21.5306L17.0038 17.0609C17.2967 16.768 17.2967 16.2932 17.0038 16.0003C16.7109 15.7074 16.2361 15.7074 15.9432 16.0003Z" />
					</svg>
				</button>
			</article>
		</div>
	</section>
	<!--01 COVER-->

	<!--02 INFORMATION-->
	<section class="about__information">
		<div class="page__layout">
			<div class="page__grid" data-role="grid">
				<div class="page__column" data-column="6" data-role="column">
					<div class="about__information__text">
						<p data-role="subtitle">Experiencia que respalda nuestra visión</p>
						<h4>Más de dos décadas <span>construyendo con propósito.</span></h4>
						<p data-role="text">
							La arquitectura tiene el poder de transformar la forma en que habitamos y proyectamos el futuro. Con más de 20 años de experiencia y 12 desarrollos construidos, cada proyecto refleja una visión basada en el diseño, la funcionalidad y el compromiso por crear espacios que permanezcan vigentes y aporten valor a las personas y su entorno.
						</p>
					</div>
				</div>
				<div  class="page__column" data-column="6" data-role="column">
					<div class="about__information__thumb">
						<img src="<?= $site->url(); ?>/assets/images/about-02.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--02 INFORMATION-->

	<!--BRANDS-->
	<?php snippet('sections/brands') ?>
	<!--BRANDS-->

	<!--NUMBERS-->
	<?php snippet('sections/philosophy') ?>
	<!--NUMBERS-->

	<!--CTA-->
	<?php snippet('sections/cta') ?>
	<!--CTA-->
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>