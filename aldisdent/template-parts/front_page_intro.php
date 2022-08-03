<?php 
    $sliderItems = get_sub_field('slider');
    $cards = get_sub_field('cards');
    $disableCards = get_sub_field('disable_cards');
    $class = get_sub_field('css_class');
?>

<div class="home-intro <?= $class ? $class : '' ?>">
    <div class="slider">
        <?php foreach($sliderItems as $item) : ?>
            <div class="slider-item">
                <div class="slider-item__img-block">
                    <img src="<?= $item['img']['url'] ?>" class="slider-item__img">
                </div>
                <div class="slider-item__txt-block">
                    <div class="container">
                        <p class="slider-item__title"><?= $item['txt'] ?></p>
                        <?php if($item['sub_title']) : ?>
                            <div class="slider-item__sub-title"><?= $item['sub_title'] ?></div>
                        <?php endif ?>
                    </div>
                </div>
                <!-- <div class="card-bg"></div> -->
            </div>
        <?php endforeach ?>
    </div>
    <?php if(!$disableCards) : ?>
        <div class="cards">
            <div class="container">
                <?php foreach($cards as $card) : ?>
                    <div class="card <?= $card['is_blue'] ? 'card--blue' : 'card--gray' ?>">
                        <p class="card__title"><?= $card['title'] ?></p>
                        <div class="card-content">
                            <?= $card['list'] ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php endif ?>
</div>