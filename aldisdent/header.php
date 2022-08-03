<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onlinegroup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/images/favicon-16x16.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site">

		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-top__item header-top__logo-block">
						<a href="<?= get_home_url( ) ?>" class="header-logo">
							<img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="logo">
						</a>
						<p class="header-top__title"><?php echo get_field('header_logo_txt', 'options') ?></p>
					</div>
					<div class="header-top__item header-top__info-block">
						<div class="header-top__info">
							<a href="tel:<?php echo get_field('header_tel_link', 'options') ?>" class="header-top__tel-link"><?php echo get_field('header_tel', 'options') ?></a>
							<p class="header-top__work-hours"><?php echo get_field('work_hours', 'options') ?></p>
						</div>
						<div class="header-top__ui">
							<button class="header-top__cb-btn cb-btn btn">заказать звонок</button>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom">
				<div class="container">
					<button class="header-bottom__menu-btn">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17 14C17.5523 14 18 14.4477 18 15C18 15.5523 17.5523 16 17 16H3C2.44772 16 2 15.5523 2 15C2 14.4477 2.44772 14 3 14H17ZM17 9C17.5523 9 18 9.44772 18 10C18 10.5523 17.5523 11 17 11H3C2.44772 11 2 10.5523 2 10C2 9.44772 2.44772 9 3 9H17ZM17 4C17.5523 4 18 4.44772 18 5C18 5.55228 17.5523 6 17 6H3C2.44772 6 2 5.55228 2 5C2 4.44772 2.44772 4 3 4H17Z" fill="white"/>
						</svg>
					</button>
					<div class="header-bottom__menu-item">
						<nav class="header-nav">
							<?php
							wp_nav_menu([
								'theme_location'  => 'header_menu',
								'menu'            => 'Header Menu',
								'container'       => 'ul',
								'menu_class'      => 'header-menu',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							]);
							?>
						</nav>
					</div>
					<div class="header-bottom__social-item">
						<ul class="header__social-list">
							<li>
								<a href="<?php echo get_field('instagram_link', 'options') ?>" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
								</a>
							</li>
							<li>
								<a href="<?php echo get_field('facebook_link', 'options') ?>" target="_blank">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
										<g id="XMLID_834_">
											<path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
												  c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
												  V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
												  C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
												  c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z" />
										</g>
									</svg>
								</a>
							</li>
							<li>
								<a href="<?php echo get_field('linkdein_link', 'options') ?>" target="_blank">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
										<g id="XMLID_801_">
											<path id="XMLID_802_" d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
														C77.16,101.969,74.922,99.73,72.16,99.73z" />
											<path id="XMLID_803_" d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
														c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z" />
											<path id="XMLID_804_" d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
														c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
														c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
														C310,145.43,300.549,94.761,230.454,94.761z" />
										</g>
									</svg>
								</a>
							</li>
						</ul>
						<div class="header-login">
							<div class="header-login__icon">
								<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17" width="18" height="17">
									<defs>
										<image width="18" height="17" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAARCAMAAADnhAzLAAAAAXNSR0IB2cksfwAAALRQTFRFWVlZZIeofIWPbW5uampqcnR1comfV4KsdXl+WVlZW1tbcIiedoqda21ufI+hfomUZmdni5Oce4mWY4aneYCHcYqgeHt/fY6ebomjYGBgeYCHV4GpeYOMXFxccImhcIqjXl5ee4KIbIqneYuce4KIeY6ieI2heoqZcXR2ZWZme4eSb4qje4qYaWprYWFieoOLWoOpY4WleIeVSHurYYOjeoWPZWVmWYGoYoWmeYiXeYmYcXN0udHRkgAAADx0Uk5TABvA+PrvdBbp//+EgPcdp/wwpCfWYOBbTf7XCNL/Xkb/0QaD0CAnkfD8uESX+f7NG1G2BQbH/TQ7np3w1TTbSAAAAIVJREFUeJxdztkawUAMhuFQSgYtaqcoumntO/d/X6Yznib1Hb4H+QOgKpWNStUEVq2OMtFg1ERVyyKyNbU7RN0fOUQ9TaJPNNCEQ6LRWMlkyiZnmbhz/thiKcnjslpntPFzCMJIqFvxNtGS7jBvfzhKObnIO1/geisI3h/wjIuEL3j/CX6+OkcLv896f5IAAAAASUVORK5CYII=" />
									</defs>
									<style></style>
									<use href="#img1" x="0" y="0" />
								</svg>
							</div>
							<a href="<?php echo get_field('header_personal_link', 'options') ?>" class="header-login__txt">
								личный кабинет
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mobile-menu">
            	<button class="mobile-menu__back-btn"> <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 500 511.61"><path fill-rule="nonzero" d="m218.54 261.95 15.5 101.27c.56 3.8-.47 7.81-3.19 10.93-4.92 5.64-13.5 6.24-19.14 1.32L4.64 195.09l-1.53-1.59c-4.77-5.76-3.96-14.32 1.8-19.08L211.98 3.08c2.99-2.41 6.96-3.59 11.03-2.87 7.34 1.31 12.22 8.35 10.91 15.69l-15.44 85.83c17.97 2.09 37.59 6.57 57.77 13.36 52.66 17.69 109.96 51.41 153.32 100.33 43.79 49.39 73.45 114.21 70.18 193.61-1.17 28.92-6.76 59.73-17.63 92.34-1.34 5.29-5.82 9.46-11.55 10.14-7.44.88-14.19-4.44-15.06-11.87-11.94-100.09-50.53-158.11-98.25-191.8-42.66-30.12-93.19-41.36-138.72-45.89z"></path></svg> </button>
            	<button class="mobile-menu__close-svg"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="121.31px" height="122.876px" viewBox="0 0 121.31 122.876" enable-background="new 0 0 121.31 122.876" xml:space="preserve"><g><path fill-rule="evenodd" clip-rule="evenodd" d="M90.914,5.296c6.927-7.034,18.188-7.065,25.154-0.068 c6.961,6.995,6.991,18.369,0.068,25.397L85.743,61.452l30.425,30.855c6.866,6.978,6.773,18.28-0.208,25.247 c-6.983,6.964-18.21,6.946-25.074-0.031L60.669,86.881L30.395,117.58c-6.927,7.034-18.188,7.065-25.154,0.068 c-6.961-6.995-6.992-18.369-0.068-25.397l30.393-30.827L5.142,30.568c-6.867-6.978-6.773-18.28,0.208-25.247 c6.983-6.963,18.21-6.946,25.074,0.031l30.217,30.643L90.914,5.296L90.914,5.296z"></path></g></svg> </button>
            	<div class="mobile-menu__header">
            	    <span>Меню</span>
            	</div>
            	<div class="mobile-menu__item">
            	    <?php
				    	wp_nav_menu( [
							'theme_location'  => 'header_menu',
							'menu'            => 'header_menu',
							'container'       => 'nav',
							'container_class' => 'mobile-nav',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul>%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						] );
				    ?>
            	</div>
				<div class="mobile-menu__footer">
					<ul class="header__social-list">
						<li>
							<a href="<?php echo get_field('instagram_link', 'options') ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
							</a>
						</li>
						<li>
							<a href="<?php echo get_field('facebook_link', 'options') ?>">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
									<g id="XMLID_834_">
										<path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
											  c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
											  V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
											  C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
											  c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z" />
									</g>
								</svg>
							</a>
						</li>
						<li>
							<a href="<?php echo get_field('linkdein_link', 'options') ?>">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
									<g id="XMLID_801_">
										<path id="XMLID_802_" d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
													C77.16,101.969,74.922,99.73,72.16,99.73z" />
										<path id="XMLID_803_" d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
													c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z" />
										<path id="XMLID_804_" d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
													c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
													c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
													C310,145.43,300.549,94.761,230.454,94.761z" />
									</g>
								</svg>
							</a>
						</li>
					</ul>
					<div class="header-login">
						<div class="header-login__icon">
							<img src="<?= get_template_directory_uri() ?>/assets/images/user-white.png">
						</div>
						<a href="<?php echo get_field('header_personal_link', 'options') ?>" class="header-login__txt">
							личный кабинет
						</a>
					</div>
					<div class="header-top__info">
						<a href="tel:<?php echo get_field('header_tel_link', 'options') ?>" class="header-top__tel-link"><?php echo get_field('header_tel', 'options') ?></a>
						<p class="header-top__work-hours"><?php echo get_field('work_hours', 'options') ?></p>
					</div>
				</div>
			</div>
		</header>