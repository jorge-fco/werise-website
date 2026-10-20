<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main class="project js-project">
	<section class="project__section">
		<div class="page__layout">
			<div class="project__headline">
				<h1><?= $page->title() ?></h1>

				<div class="page__grid" data-role="grid">
					<div class="page__column" data-column="7" data-role="column">
						<p data-role="description">
							<?= $page->description(); ?>
						</p>
					</div>
					<div  class="page__column" data-column="5" data-role="column">
						<ol>
							<li>
								<p data-role="label">Unidades</p>
								<p data-role="text" data-type="uppercase"><?= $page->unidades(); ?></p>
							</li>

							<?php if ($page->information()->isNotEmpty()): ?>
								<li>
									<p data-role="label">Información</p>
									<p data-role="text"><?= $page->information(); ?></p>
								</li>
							<?php endif ?>

							<li>
								<p data-role="label">Tipo</p>
								<p data-role="text" data-type="uppercase"><?= $page->category(); ?></p>
							</li>

							<?php if ($page->location()->isNotEmpty()): ?>
								<li>
									<p data-role="label">Lugar</p>
									<p data-role="text"><?= $page->location() ?></p>
								</li>
							<?php endif ?>
						</ol>
					</div>
				</div>
				<!-- GRID-->
				<span data-role="divider"></span>
			</div>
			<!-- HEADLINE-->

			<div class="project__grid">
				<!--ASIDE-->
				<aside class="project__sidebar" id="project__sidebar">

					<?php if ($page->estatus()->isNotEmpty()): ?>
						<div class="project__sidebar__item">
							<p data-role="label">Estatus</p>
							<p data-role="alert" data-text="<?= $page->estatus()->slug(); ?>">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  stroke="currentColor" stroke-width="1.5"> <path d="M15 15.5C18.5899 15.5 21.5 12.5899 21.5 9C21.5 5.41015 18.5899 2.5 15 2.5C11.4101 2.5 8.5 5.41015 8.5 9C8.5 9.41773 8.5394 9.82625 8.6147 10.2221C8.75737 10.972 8.82871 11.347 8.75558 11.5844C8.68245 11.8217 8.47202 12.032 8.05118 12.4526L3.67253 16.8283C3.094 17.4064 2.80474 17.6955 2.65237 18.0631C2.5 18.4308 2.5 18.8398 2.5 19.6576V21.5H6V19.5H8V17.5H10L11.5526 15.9485C11.9729 15.5286 12.183 15.3186 12.4201 15.2456C12.6572 15.1726 13.0316 15.2436 13.7806 15.3858C14.1756 15.4608 14.5832 15.5 15 15.5Z" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18 7.5C18 8.32843 17.3284 9 16.5 9C15.6716 9 15 8.32843 15 7.5C15 6.67157 15.6716 6 16.5 6C17.3284 6 18 6.67157 18 7.5Z"></path> </svg>
								<?= $page->estatus(); ?>
							</p>
						</div>
					<?php endif ?>

					<?php if ($page->down_payment()->isNotEmpty()): ?>
						<div class="project__sidebar__item">
							<p data-role="label">Enganche</p>
							<p data-role="alert">
								<?= $page->down_payment(); ?> Aporte
							</p>
						</div>
					<?php endif ?>

					<?php if ($page->delivery()->isNotEmpty()): ?>
						<div class="project__sidebar__item">
							<p data-role="label">Entrega</p>
							<p data-role="alert">
								<?= $page->delivery(); ?>
							</p>
						</div>
					<?php endif ?>

					<?php if ($page->financing()->isNotEmpty()): ?>
						<div class="project__sidebar__item">
							<p data-role="label">Financiamiento</p>
							<p data-role="alert">
								<?= $page->financing(); ?>
							</p>
						</div>
					<?php endif ?>

					<?php if ($page->comercial()->isNotEmpty()): ?>
						<div class="project__sidebar__item">
							<p data-role="label">Locales</p>
							<p data-role="alert">
								<?= $page->comercial(); ?>
							</p>
						</div>
					<?php endif ?>

					<!-- WHATSAPP-->
					<div class="project__sidebar__item">
						<p data-role="label">Más información</p>

						<a href="https://wa.me/<?= $page->cta_phone(); ?>?text=Hola visité el sitio web de RISE y requiero información de ventas sobre <?= $page->title(); ?>"
							target="_blank"
							class="button button__style"
							data-style="circle" data-role="button">
							<data>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
							</data>
							<span><?= $page->cta_text(); ?></span>
						</a>
					</div>
					<!-- WHATSAPP-->
				</aside>
				<!--ASIDE-->

				<div class="project__body">
					<!--GALLERY-->
					<div class="project__gallery">
						<div class="page__grid" data-role="grid">
							<?php foreach($galleries as $image) : ?>
								<div class="page__column" data-num="<?= $count; ?>"
									data-type="<?= $image->type(); ?>"
									data-column="<?= Str::replace($image->column(), "c", "");  ?>"
									data-aspect="<?= $image->aspect(); ?>"
									data-role="column">
									<div class="project__gallery__item">
										<img src="<?= $image->url(); ?>">
									</div>
								</div>
							<?php $count++; endforeach ?>
						</div>
					</div>
					<!-- GALLERY-->

					<?php if ($page->amenities()->toStructure()->isNotEmpty()): ?>
						<!-- AMENIDADES-->
						<div class="project__block project__amenities">
							<h5>Amenidades</h5>
							<ol>
								<?php foreach ($page->amenities()->toStructure() as $amenity): ?>
									<li data-type="<?= $amenity->icon_type() ?>">
										<?php if ($amenity->icon_type() == 'alberca'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" /><path d="M2 16a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" /><path d="M15 12v-7.5a1.5 1.5 0 0 1 3 0" /><path d="M9 12v-7.5a1.5 1.5 0 0 0 -3 0" /><path d="M15 5l-6 0" /><path d="M9 10l6 0" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'terraza'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"> <path d="M3 14L4 19M4 19L3 22M4 19H6.65287C7.35734 19 7.52345 19.1407 7.63927 19.8356L8 22"></path> <path d="M21 14L20 19M20 19L21 22M20 19H17.3471C16.6427 19 16.4765 19.1407 16.3607 19.8356L16 22"></path> <path d="M12 10V22"></path> <path d="M4.60045 7.40727C6.67011 6.43818 8.75263 4.89851 10.2888 3.36403C11.1992 2.45468 11.6543 2 12 2C12.3457 2 12.8008 2.45468 13.7112 3.36403C15.2474 4.89851 17.3299 6.43818 19.3995 7.40727C20.1034 7.73682 20.5328 8.14335 20.873 8.9348C21.1333 9.54022 21.0165 10 20.3071 10H3.69295C2.98348 10 2.86672 9.54022 3.12697 8.9348C3.46718 8.14335 3.89663 7.73683 4.60045 7.40727Z"></path> <path d="M11 22H13"></path> <path d="M9 15H15"></path> </svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'gym'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"> <path d="M7.73438 13.7323C7.73438 13.7323 8.63984 12.5102 9.23438 12.2319C11.0292 11.3915 11.3943 11.0263 12.2344 9.23091C12.5127 8.63618 13.7344 7.73044 13.7344 7.73044M10.2344 16.2331C10.2344 16.2331 11.4561 15.3273 11.7344 14.7326C12.5745 12.9373 12.9396 12.5721 14.7344 11.7317C15.3289 11.4533 16.2344 10.2312 16.2344 10.2312" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14.4311 2.89207C14.938 2.38343 15.7611 2.38212 16.2696 2.88916L21.0814 7.68726C21.5899 8.1943 21.5912 9.01767 21.0843 9.52632L19.5557 11.0603C19.0488 11.5689 18.2257 11.5702 17.7172 11.0632L12.9054 6.26507C12.397 5.75803 12.3957 4.93466 12.9025 4.42601L14.4311 2.89207Z"></path> <path d="M4.41377 12.9022C4.92065 12.3936 5.74376 12.3923 6.25225 12.8993L11.0641 17.6974C11.5725 18.2045 11.5738 19.0278 11.067 19.5365L9.53836 21.0704C9.03148 21.5791 8.20837 21.5804 7.69988 21.0733L2.88808 16.2752C2.37959 15.7682 2.37829 14.9448 2.88517 14.4362L4.41377 12.9022Z"></path> <path d="M17.9377 3.45254C19.8201 0.985467 23.14 3.8401 20.5431 6.02872M3.37811 17.9773C0.998473 19.9687 3.99782 23.1586 6.06742 20.4657" stroke-linecap="round" stroke-linejoin="round"></path> </svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'coworking'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 9a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'lobby'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M3 21l18 0" /><path d="M4 21v-15a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v15" /><path d="M9 21v-8a3 3 0 0 1 6 0v8" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'game'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 5h3.5a5 5 0 0 1 0 10h-5.5l-4.015 4.227a2.3 2.3 0 0 1 -3.923 -2.035l1.634 -8.173a5 5 0 0 1 4.904 -4.019h3.4" /><path d="M14 15l4.07 4.284a2.3 2.3 0 0 0 3.925 -2.023l-1.6 -8.232" /><path d="M8 9v2" /><path d="M7 10h2" /><path d="M14 10h2" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'yoga'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 20h4l1.5 -3" /><path d="M17 20l-1 -5h-5l1 -7" /><path d="M4 10l4 -1l4 -1l4 1.5l4 1.5" /><path d="M10.007 5a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'seguridad'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" /><path d="M11 11a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 12l0 2.5" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'delivery'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"> <path d="M19.5 17.5C19.5 18.8807 18.3807 20 17 20C15.6193 20 14.5 18.8807 14.5 17.5C14.5 16.1193 15.6193 15 17 15C18.3807 15 19.5 16.1193 19.5 17.5Z"></path> <path d="M9.5 17.5C9.5 18.8807 8.38071 20 7 20C5.61929 20 4.5 18.8807 4.5 17.5C4.5 16.1193 5.61929 15 7 15C8.38071 15 9.5 16.1193 9.5 17.5Z"></path> <path d="M14.5 17.5H9.5M2 4H12C13.4142 4 14.1213 4 14.5607 4.43934C15 4.87868 15 5.58579 15 7V15.5M15.5 6.5H17.3014C18.1311 6.5 18.5459 6.5 18.8898 6.6947C19.2336 6.8894 19.4471 7.2451 19.8739 7.95651L21.5725 10.7875C21.7849 11.1415 21.8911 11.3186 21.9456 11.5151C22 11.7116 22 11.918 22 12.331V15C22 15.9346 22 16.4019 21.799 16.75C21.6674 16.978 21.478 17.1674 21.25 17.299C20.9019 17.5 20.4346 17.5 19.5 17.5M2 13V15C2 15.9346 2 16.4019 2.20096 16.75C2.33261 16.978 2.52197 17.1674 2.75 17.299C3.09808 17.5 3.56538 17.5 4.5 17.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M2 7H8M2 10H6" stroke-linecap="round" stroke-linejoin="round"></path> </svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'crossfit'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"> <path d="M18.8679 19H3.31956C2.59079 19 2 18.3967 2 17.6526C2 17.0969 2.33409 16.5982 2.84129 16.3968L15.5991 11.3307C18.6789 10.1078 22 12.4276 22 15.8018C22 17.5681 20.5977 19 18.8679 19Z"></path> <path d="M18 15H18.009"></path> <path d="M6 15L4 9"></path> <path d="M5 9H2"></path> <path d="M17 11L19 5C20.5924 5 21.6057 4.57709 22 3"></path> <path d="M6 19L5 21"></path> <path d="M18 19L18 21"></path> </svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'pet'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M14.7 13.5c-1.1 -2 -1.441 -2.5 -2.7 -2.5c-1.259 0 -1.736 .755 -2.836 2.747c-.942 1.703 -2.846 1.845 -3.321 3.291c-.097 .265 -.145 .677 -.143 .962c0 1.176 .787 2 1.8 2c1.259 0 3 -1 4.5 -1s3.241 1 4.5 1c1.013 0 1.8 -.823 1.8 -2c0 -.285 -.049 -.697 -.146 -.962c-.475 -1.451 -2.512 -1.835 -3.454 -3.538" /><path d="M20.188 8.082a1.039 1.039 0 0 0 -.406 -.082h-.015c-.735 .012 -1.56 .75 -1.993 1.866c-.519 1.335 -.28 2.7 .538 3.052c.129 .055 .267 .082 .406 .082c.739 0 1.575 -.742 2.011 -1.866c.516 -1.335 .273 -2.7 -.54 -3.052l-.001 0" /><path d="M9.474 9c.055 0 .109 0 .163 -.011c.944 -.128 1.533 -1.346 1.32 -2.722c-.203 -1.297 -1.047 -2.267 -1.932 -2.267c-.055 0 -.109 0 -.163 .011c-.944 .128 -1.533 1.346 -1.32 2.722c.204 1.293 1.048 2.267 1.933 2.267" /><path d="M16.456 6.733c.214 -1.376 -.375 -2.594 -1.32 -2.722a1.164 1.164 0 0 0 -.162 -.011c-.885 0 -1.728 .97 -1.93 2.267c-.214 1.376 .375 2.594 1.32 2.722c.054 .007 .108 .011 .162 .011c.885 0 1.73 -.974 1.93 -2.267" /><path d="M5.69 12.918c.816 -.352 1.054 -1.719 .536 -3.052c-.436 -1.124 -1.271 -1.866 -2.009 -1.866c-.14 0 -.277 .027 -.407 .082c-.816 .352 -1.054 1.719 -.536 3.052c.436 1.124 1.271 1.866 2.009 1.866c.14 0 .277 -.027 .407 -.082" /></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'vigilancia'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"><path d="M16.75 12h3.632a1 1 0 0 1 .894 1.447l-2.034 4.069a1 1 0 0 1-1.708.134l-2.124-2.97"/><path d="M17.106 9.053a1 1 0 0 1 .447 1.341l-3.106 6.211a1 1 0 0 1-1.342.447L3.61 12.3a2.92 2.92 0 0 1-1.3-3.91L3.69 5.6a2.92 2.92 0 0 1 3.92-1.3z"/><path d="M2 19h3.76a2 2 0 0 0 1.8-1.1L9 15"/><path d="M2 21v-4"/><path d="M7 9h.01"/></svg>
											</data>
										<?php endif ?>

										<?php if ($amenity->icon_type() == 'tool'): ?>
											<data>
												<svg data-role="stroke" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"> <path d="M13 11L18 6"></path> <path d="M19 7L17 5L19.5 3.5L20.5 4.5L19 7Z" stroke-linejoin="round"></path> <path d="M4.02513 8.97487C3.01416 7.96391 2.75095 6.48836 3.23548 5.23548L4.65748 6.65748H6.65748V4.65748L5.23548 3.23548C6.48836 2.75095 7.96391 3.01416 8.97487 4.02513C9.98621 5.03647 10.2493 6.51274 9.76398 7.76593L16.2341 14.236C17.4873 13.7507 18.9635 14.0138 19.9749 15.0251C20.9858 16.0361 21.2491 17.5116 20.7645 18.7645L19.3425 17.3425L17.3425 17.3425V19.3425L18.7645 20.7645C17.5116 21.2491 16.0361 20.9858 15.0251 19.9749C14.0145 18.9643 13.7511 17.4895 14.2349 16.2369L7.76312 9.76507C6.51053 10.2489 5.03571 9.98546 4.02513 8.97487Z" stroke-linejoin="round"></path> <path d="M12.203 14.5L6.59897 20.1041C6.07115 20.6319 5.2154 20.6319 4.68758 20.1041L3.89586 19.3124C3.36805 18.7846 3.36805 17.9288 3.89586 17.401L9.49994 11.7969" stroke-linejoin="round"></path> </svg>
											</data>
										<?php endif ?>

										<p><?= $amenity->name() ?></p>
									</li>
								 <?php endforeach ?>
							</ol>
						</div>
						<!--AMENIDADES-->
					<?php endif ?>

					<?php if ($page->models()->toStructure()->isNotEmpty()): ?>
						<?php foreach ($page->models()->toStructure() as $item): ?>
							<!-- MODEL-->
							<div class="project__model project__block">
								<h5><?= $item->title()->esc() ?></h5>

								<div class="page__grid" data-role="grid">
									<div class="page__column" data-column="4" data-role="column">
										<div class="project__model__list">
											<ol>
												 <?php if ($item->bedrooms()->isNotEmpty()): ?>
													<li>
														<p data-role="label">Recámaras</p>
														<p data-role="option"><?= $item->bedrooms() ?></p>
													</li>
												<?php endif ?>
												<li>
													<p data-role="label">Superficie</p>
													<p data-role="option"><?= $item->surface() ?></p>
												</li>
												<li>
													<p data-role="label">Desde </p>
													<p data-role="option"><?= $item->price() ?> MXN</p>
												</li>
											</ol>
										</div>
									</div>
									<div  class="page__column" data-column="8" data-role="column">
										<?php  $features = $item->features()->toStructure(); ?>

										 <?php if ($features->isNotEmpty()): ?>
											<div class="project__model__features">
												<ol>
													 <?php foreach ($features as $feature): ?>
														<li>
															<p data-role="option"><?= $feature->feature()->esc() ?></p>
														</li>
													<?php endforeach ?>
												</ol>
											</div>
										<?php endif ?>
									</div>
								</div>

								 <?php if ($model = $item->image()->toFile()): ?>
									<div class="project__model__render">
										<img src="<?= $model->url(); ?>">
									</div>
								 <?php endif ?>
							</div>
							<!--MODEL-->
						<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</section>

	<section class="project__related">
		<div class="page__layout">
			<div class="project__related__title">
				<p>Más proyectos</p>
				<h5>Relacionados</h5>
				<span data-role="divider"></span>
			</div>

			<div class="project__related__items">
				<div class="page__grid" data-role="grid">
					<?php $count = 0; foreach ($articles as $item): ?>
						<?php if ($page->uid() !== $item->uid()) : ?>
							<?php if ($page->category()->value()  === $item->category()->value()) : ?>
								<div class="page__column" data-column="4" data-role="column">
									<?php snippet('component/item', ['project' => $item]) ?>
								</div>

								<?php if ($count == 2) : ?>
									<?php break; ?>
								<?php endif ?>
							<?php $count++; endif ?>
						<?php endif ?>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>

	<!--CTA-->
	<?php snippet('sections/cta') ?>
	<!--CTA-->
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>