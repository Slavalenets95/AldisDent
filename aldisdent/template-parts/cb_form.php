<?php
    $title = get_field('cb_form_title', 'options');
    $subtitle = get_field('cb_form_subtitle', 'options');
    $bgImg = get_field('cb_form_img', 'options');
?>

<div class="home-form" style="background-image: url('<?= $bgImg['url'] ?>')">
    <div class="container">
        <div>
            <div class="home-form__header">
                <h2 class="home-form__title"><?= $title ?> <br> <?= $subtitle ?></h2>
            </div>
            <?= do_shortcode( '[contact-form-7 id="104" title="Contact Form" html_class="home-form__form"]' ) ?>
        </div>
    </div>
</div>