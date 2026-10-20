<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="page js-home" data-id="<?= $page->uid(); ?>">
	<?php snippet('sections/banner') ?>
	<?php snippet('sections/categories') ?>
	<?php snippet('sections/projects') ?>
	<?php snippet('sections/about') ?>
	<?php snippet('sections/videos') ?>
	<?php snippet('sections/philosophy') ?>
	<?php snippet('sections/brands') ?>
	<?php snippet('sections/blog') ?>
	<?php snippet('sections/cta') ?>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>
