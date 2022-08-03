<?php
    $items = get_field('gallery_items', 'options');
?>

<div class="home-gallery">
    <?php foreach($items as $item) : ?>
        <div class="home-gallery__item"><img src="<?= $item['img']['url'] ?>"></div>
    <?php endforeach ?>
</div>