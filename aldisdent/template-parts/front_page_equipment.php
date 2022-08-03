<?php
    $blockTitle = get_sub_field('title');
    $sliderItems = get_sub_field('slider');
?>
<div class="home-equipment section">
    <div class="home-equipment__header">
        <div class="container">
            <h2 class="home-equipment__title block-title"><?= $blockTitle ?></h2>
        </div>
    </div>
    <div class="home-equipment__slider-wrapper">
        <div class="container">
            <div class="home-equipment__slider">
                <?php foreach($sliderItems as $item) : ?>
                    <div class="home-equipment__slide">
                        <div class="home-equipment__slide-img">
                            <img src="<?= $item['img']['url'] ?>">
                        </div>
                        <div class="home-equipment__slide-content sd">
                            <h2 class="home-equipment__slide-title"><?= $item['title'] ?></h2>
                            <?= $item['content'] ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>