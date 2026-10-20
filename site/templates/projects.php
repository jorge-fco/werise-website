
<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="projects js-projects">
	<section class="projects__section">
		<div class="page__layout">
			<!--HEADLINE-->
			<div class="projects__headline">
				<div class="page__grid" data-role="grid">
					<div class="page__column" data-column="12" data-role="column">
						<div class="projects__headline__title">
							<h1>Proyectos que trascienden</h1>
							<h2>
								Arquitectura, diseño y espacios <span>pensados para el futuro.</span>
							</h2>
						</div>
					</div>
					<div  class="page__column" data-column="3" data-role="column">
						<div class="projects__headline__filters">
							<p>Categorías</p>
							<ol>
								<!--ALL-->
								<li>
									<a href="<?= $page->url() ?>"  class="<?= !$current ? 'is--active' : '' ?>">
										<span>Todos</span>
									</a>
								</li>
								<!--ALL-->

								<?php foreach ($categories as $item): ?>
									<li>
										<a href="<?= url($page->url(), ['params' => ['category' => $item]]) ?>"
											class="<?= $current === $item ? 'is--active' : '' ?>">
											<span><?= Str::replace(html($item), '-', ' ');  ?></span>
										</a>
									</li>
								<?php endforeach ?>
							</ol>
						</div>
					</div>
					<div  class="page__column" data-column="4" data-role="column">
						<div class="projects__headline__filters">
							<p>Ciudades</p>
							<ol>
								<?php foreach ($cities as $item): ?>
									<li>
										<a href="<?= url($page->url(), ['params' => ['city' => $item]]) ?>"
											class="<?= $current === $item ? 'is--active' : '' ?>">
											<span><?= Str::replace(html($item), '-', ' ');  ?></span>
										</a>
									</li>
								<?php endforeach ?>
							</ol>
						</div>
					</div>
					<div  class="page__column" data-column="5" data-role="column">
						<div class="projects__headline__filters">
							<p>Estatus</p>
							<ol>
								<?php foreach ($estatus as $item): ?>
									<li>
										<a href="<?= url($page->url(), ['params' => ['estatus' => $item]]) ?>"
											class="<?= $current === $item ? 'is--active' : '' ?>">
											<span><?= html($item) ?></span>
										</a>
									</li>
								<?php endforeach ?>
							</ol>
						</div>
					</div>
				</div>
				<span data-role="divider"></span>
			</div>
			<!--HEADLINE-->

			<!--ITEMS-->
			<div class="projects__items">
				<!--GRID-->
				<div class="page__grid" data-role="grid">
					<?php foreach ($articles as $project): ?>
						<div class="page__column" data-column="4" data-role="column">
							<?php snippet('component/card', ['project' => $project]) ?>
						</div>
					<?php endforeach ?>
				</div>
				<!--GRID-->
			</div>
			<!--ITEMS-->
		</div>
	</section>

	<!--CTA-->
	<?php snippet('sections/cta') ?>
	<!--CTA-->
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>