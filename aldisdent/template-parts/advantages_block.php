<?php
    $blockTitle = get_field('advantages_title', 'options');
    $cards = get_field('cards', 'options');
?>

<div class="home-advantages section">
    <div class="container">
        <h2 class="home-advantages__title block-title"><?= $blockTitle ?></h2>
        <div class="home-advantages__cards">
            <?php foreach($cards as $card) : ?>
                <div class="home-advantages__card">
                    <div class="home-advantages__card-header">
                        <?= $card['icon'] ?>
                        <h3 class="home-advantages__card-title"><?= $card['title'] ?></h3>
                    </div>
                    <div class="home-advantages__card-content">
                        <?= $card['content'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>