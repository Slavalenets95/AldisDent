<?php get_header() ?>

<main class="main">
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-list__item">
                    <a href="<?= get_home_url( ) ?>">Главная •</a>
                </li>
                <li class="breadcrumb-list__item disable">
                    <span>Наши работы</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="work-archive section">
        <div class="container">
            <div class="work-archive__header">
                <h2 class="work-archive__title block-title">наши работы</h2>
            </div>
            <?php if(have_posts(  )) : ?>
                <div class="work-archive__items">
                    <?php while(have_posts(  )) : the_post(  ); ?>
                        <div class="work-archive__item">
                            <div class="work-archive__item-img">
                                <img src="<?= get_the_post_thumbnail_url( ) ?>">
                            </div>
                            <div class="work-archive__item-content sd">
                                <h3 class="work-archive__item-title"><?php the_title( ) ?></h3>
                                <p class="work-archive__item-description"><?php the_excerpt(  ) ?></p>
                                <a href="<?= the_permalink(  ) ?>" class="work-archive__item-link">подробнее</a>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
                <div class="work-archive__footer">
                    <?php if(function_exists('wp_pagenavi')) : ?>
						<div class="work-archive__pagination">
						 	<?php wp_pagenavi(); ?>
						</div>
					<?php endif ?>
                </div>
            <?php endif ?>
        </div>
    </div>
    <?php get_template_part('template-parts/contact_block') ?>
    <?php get_template_part('template-parts/map_block') ?>
</main>

<?php get_footer() ?>