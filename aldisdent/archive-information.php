<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package onlinegroup
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="breadcrumb">
            <div class="container">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-list__item">
                        <a href="<?= get_home_url() ?>">Главная •</a>
                    </li>
                    <li class="breadcrumb-list__item disable">
                        <span>Полезная информация</span>
                    </li>
                </ul>
            </div>
        </div>
		<?php if ( have_posts() ) : ?>
			<div class="article-archive section">
				<div class="container">
					<div class="article-archive__header">
                	    <h1 class="article-archive__title block-title">Полезная информация</h1>
                	</div>
					<div class="article-archive__items">
						<?php while(have_posts()) : the_post() ?>
							<div class="article-archive__item">
                        		<div class="article-archive__item-img"><img src="<?= get_the_post_thumbnail_url( ) ?>" ></div>
                        		<div class="article-archive__item-content sd">
                        		    <h2 class="article-archive__item-title"><?php the_title( ) ?></h2>
                        		    <date class="article-archive__item-date"><?php echo get_the_date( 'd.m.Y г.' ); ?></date>
                        		    <p class="article-archive__item-description"><?php the_excerpt(  ) ?></p>
                        		    <a href="<?php the_permalink( ) ?>" class="article-archive__item-link">подробнее</a>
                        		</div>
                    		</div>
						<?php endwhile ?>
					</div>
					<div class="article-archive__footer">
					<?php if(function_exists('wp_pagenavi')) : ?>
						<div class="article-archive__pagination">
						 	<?php wp_pagenavi(); ?>
						</div>
					<?php endif ?>
                	</div>
				</div>
			</div>			
		<?php endif ?>
		<?php get_template_part('template-parts/contact_block') ?>
		<?php get_template_part('template-parts/map_block') ?>
	</main><!-- #main -->

<?php
get_footer();
