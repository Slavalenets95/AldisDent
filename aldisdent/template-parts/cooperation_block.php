<?php 
    $blockTitle = get_field('cooperation_title', 'options');
    $fileLink = get_field('cooperation_file', 'options');
    $content = get_field('cooperation_content', 'options');
    $cards = get_field('cooperation_cards', 'options');
    $linkIcon = get_field('cooperation_link_icon', 'options');
    $link = get_field('cooperation_link', 'options');
?>

<div class="home-cooperation section">
    <div class="container">
        <h2 class="home-cooperation__title block-title"><?= $blockTitle ?></h2>
        <div class="home-cooperation__content sd">
            <?= $content ?>
        </div>
    </div>
    <div class="home-cooperation__cards">
        <?php foreach($cards as $card) : ?>
            <div class="home-cooperation__card <?= $card['is_blue'] ? 'home-cooperation__card--blue' : '' ?>">
                <div>
                    <div class="home-cooperation__card-img">
                        <img src="<?= $card['icon']['url'] ?>">
                    </div>
                    <div class="home-cooperation__card-content">
                        <p class="home-cooperation__card-title"><?= $card['title'] ?></p>
                        <?= $card['content'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="home-cooperation__footer">
        <a target="_blank" href="<?= $fileLink ?>" class="home-cooperation__file">
            <div class="home-cooperation__file-icon">
                <img src="<?= $linkIcon['url'] ?>">
            </div>
            <div class="home-cooperation__file-content">
                <span>скачать заказ наряд</span>
            </div>
        </a>
    </div>
</div>