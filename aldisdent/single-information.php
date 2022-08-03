<?php get_header() ?>

<main class="main">
    <div class="article-intro" style="background-image: url('<?= get_field('article_intro_img')['url'] ?>')">
        <div class="container">
            <div class="article-intro__header">
                <div class="article-breadcrumb">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                    ?>
                </div>
            </div>
            <div class="article-intro__body">
                <h1 class="article-intro__title"><?= get_field('article_intro_title') ?></h1>
                <date class="article-intro__date"><?php echo get_the_date( 'd.m.Y' ); ?></date>
            </div>
            
        </div>
    </div>
    <div class="article-content sd section">
        <div class="container">
            <div class="article-content__editor">
                <?= get_field('article_content') ?>
            </div>
            <div class="article-content__editor">
                <?= get_field('article_second_content') ?>
            </div>
            <div class="article-content__editor flex">
                <div class="article-content__editor-item justify">
                    <?= get_field('article_flex_content') ?>
                </div>
                <div class="article-content__editor-item">
                    <img src="<?= get_field('article_flex_img')['url'] ?>">
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/contact_block') ?>
    <?php get_template_part('template-parts/map_block') ?>
</main>

<?php get_footer() ?>