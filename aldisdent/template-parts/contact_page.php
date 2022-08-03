<?php
    $minskCards = get_sub_field('contact_minsk_repeater');
    $brestCards = get_sub_field('contact_brest_repeater');
?>

<div class="contact-page">
    <div class="container">
        <div class="contact-page__header">
            <h1 class="contact-page__title block-title"><?= get_the_title() ?></h1>
        </div>
        <div class="contact-page__cards">
            <?php $counter = 0; ?>
            <?php foreach($minskCards as $card) : ?>
                <div class="contact-card sd">
                    <div class="contact-card__icon">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/<?= $counter == 1 ? 'tel.png' : 'address.png' ?>" alt="">
                        <!-- <?= $card['icon'] ?> -->
                    </div>
                    <h2 class="contact-card__title"><?= $card['title'] ?></h2>
                    <div class="contact-card__content">
                        <?= $card['content'] ?>
                    </div>
                </div>
                <?php $counter++ ?>
            <?php endforeach ?>
        </div>
        <div class="contact-page__cards">
            <?php $counter = 0; ?>
            <?php foreach($brestCards as $card) : ?>
                <div class="contact-card sd">
                    <div class="contact-card__icon">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/<?= $counter == 1 ? 'tel.png' : 'address.png' ?>" alt="">
                        <!-- <?= $card['icon'] ?> -->
                    </div>
                    <h2 class="contact-card__title"><?= $card['title'] ?></h2>
                    <div class="contact-card__content">
                        <?= $card['content'] ?>
                    </div>
                </div>
            <?php $counter++ ?>
            <?php endforeach ?>
        </div>
    </div>
</div>