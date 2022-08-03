<?php
    $blockTitle = get_sub_field('about_us_page_title');
    $content = get_sub_field('about_us_page_content');
    $cards = get_field('about_us_cards', 'options');
?>

<div class="home-about aboust-us-page section">
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
    </div>
</div>