<?php
    $blockTitle = get_field('about_us_title', 'options');
    $content = get_field('about_us_content', 'options');
    $cards = get_field('about_us_cards', 'options');
    $link = get_field('about_us_link', 'options');
?>

<div class="home-about section">
    <div class="container">
        <h2 class="home-about__title block-title"><?= $blockTitle ?></h2>
        <div class="content sd">
            <?= $content ?>
        </div>
        <div class="cards">
            <?php foreach($cards as $card) : ?>
                <div class="card">
                    <span class="card__title"><?= $card['number'] ?></span>
                    <span class="card__content"><?= $card['txt'] ?></span>
                </div>
            <?php endforeach ?>
        </div>
        <div class="home-about__footer">
            <a href="<?= $link['url'] ?>" class="btn link"><?= $link['title'] ?></a>
        </div>
    </div>
</div>