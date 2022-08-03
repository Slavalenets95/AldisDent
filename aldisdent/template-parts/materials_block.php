<?php
    $blockTitle = get_field('materials_title', 'options');
    $subTitle = get_field('materials_sub_content', 'options');
    $sliderItems = get_field('materials_slider', 'options');
?>

<div class="home-materials section">
    <div class="container">
        <div class="home-materials__header sd">
            <h2 class="home-materials__title block-title"><?= $blockTitle ?></h2>
            <?= $subTitle ?>
        </div>
        <div class="home-materials__slider">
            <?php foreach($sliderItems as $item) : ?>
                <div class="home-materials__slide">
                    <img src="<?= $item['img']['url'] ?>">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>