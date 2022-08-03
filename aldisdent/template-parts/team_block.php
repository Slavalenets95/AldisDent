<?php
    $blockTitle = get_sub_field('block_title');
    $mainCardImg = get_sub_field('first_card_img');
    $mainCardName = get_sub_field('first_card_fio');
    $mainCardPosition = get_sub_field('first_card_position');
    $mainCardContent = get_sub_field('first_card_content');
    $teamItems = get_sub_field('team_repeater');
?>

<div class="team-block section">
    <div class="container">
        <div class="team-block__header">
            <h2 class="team-block__title block-title"><?= $blockTitle ?></h2>
        </div>
        <div class="team-block__body">
            <div class="team-block__body-img">
                <img src="<?= $mainCardImg['url'] ?>">
            </div>
            <div class="team-block__body-content sd">
                <h3 class="team-block__body-title"><?= $mainCardName ?></h3>
                <p class="team-block__body-position"><?= $mainCardPosition ?></p>
                <?= $mainCardContent ?>
            </div>
        </div>
        <div class="team-cards">
            <?php foreach($teamItems as $item) : ?>
                <div class="team-card">
                    <img src="<?= $item['img']['url'] ?>" class="team-card__img">
                    <h3 class="team-card__title"><?= $item['fio'] ?></h3>
                    <p class="team-card__position"><?= $item['position'] ?></p>
                    <a href="tel:<?= $item['tel_link'] ?>" class="teamcard__link"><?= $item['tel'] ?></a>
                    <a href="tel:<?= $item['email'] ?>" class="teamcard__link"><?= $item['email'] ?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>