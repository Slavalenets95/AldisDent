<?php get_header() ?>
<?php 
    $imgSlider = get_field('work_photo_slider');
    $prevPost = get_previous_post();
    $nextPost = get_next_post();
?>

<main class="main">
    <div class="breadcrumb">
        <div class="container">
            <?php 
                if(function_exists('bcn_display')) {
                    bcn_display();
                }
            ?>
        </div>
    </div>
    <div class="work-post section">
        <div class="container">
            <div class="work-post__wrapper">
                <div class="work-post__gallery">
                    <div class="work-post__gallery-main">
                        <?php foreach($imgSlider as $item) : ?>
                            <img src="<?= $item['img']['url'] ?>" class="work-post__gallery-main-img">
                        <?php endforeach ?>
                    </div>
                    <?php if(count($imgSlider) > 1) : ?>
                        <div class="work-post__gallery-nav">
                            <?php foreach($imgSlider as $item) : ?>
                                <img src="<?= $item['img']['url'] ?>" class="work-post__gallery-nav-img">
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="work-post__content sd">
                    <h1 class="work-post__title"><?php the_title() ?></h1>
                    <?= get_field('work_post_content') ?>
                </div>
            </div>
        </div>
        <div class="work-post__footer">
            <?php if($prevPost || $nextPost) : ?> 
                <?php if($prevPost) : ?>
                    <a href="<?= get_permalink( $prevPost ) ?>" class="work-post__footer-item">
                        <div class="work-post__footer-item-icon">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 56" width="37" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m28.7 6.6l1.4 1.4-21.2 21.2-1.4-1.4zm-19.8 19.8l21.2 21.2-1.4 1.4-21.2-21.2z"/></svg>
                        </div>
                        <div class="work-post__footer-item-content">
                            <p class="work-post__footer-item-txt">Предыдущая работа</p>
                            <p class="work-post__footer-item-title">"<?= $prevPost->post_title ?>"</p>
                        </div>
                    </a>
                <?php else : ?>
                    <div class="work-post__footer-item work-post__footer-item work-post__footer-item--last">
                        <div class="work-post__footer-item-content">
                            <p class="work-post__footer-item-title">Это первая запись</p>
                        </div>
                    </div>
                <?php endif ?>
                <?php if($nextPost) : ?>
                    <a href="<?= get_permalink( $nextPost ) ?>" class="work-post__footer-item work-post__footer-item--blue">
                        <div class="work-post__footer-item-icon">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 56" width="36" height="56"><defs><filter x="-50%" y="-50%" width="200%" height="200%" id="f1" ><feDropShadow dx="0" dy="0" stdDeviation="2.916666666666667" flood-color="#000000" flood-opacity=".7"/></filter></defs><style>.a{filter:url(#f1);fill:#fff}</style><path class="a" d="m29.1 27.8l-1.4 1.4-21.2-21.2 1.4-1.4zm0 0l-21.2 21.2-1.4-1.4 21.2-21.2z"/></svg>    
                        </div>
                        <div class="work-post__footer-item-content">
                            <p class="work-post__footer-item-txt">Следующая работа</p>
                            <p class="work-post__footer-item-title">"<?= $nextPost->post_title ?>"</p>
                        </div>
                    </a>
                <?php else : ?>
                    <div class="work-post__footer-item work-post__footer-item--blue work-post__footer-item--last">
                        <div class="work-post__footer-item-content">
                            <p class="work-post__footer-item-title">Это последняя запись</p>
                        </div>
                    </div>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
    <?php get_template_part('template-parts/contact_block') ?>
    <?php get_template_part('template-parts/map_block') ?>
</main>

<?php get_footer() ?>