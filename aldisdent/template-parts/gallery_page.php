<?php
    $items = get_sub_field('gallery_page_items');
?>

<div class="home-gallery">
    <?php foreach($items as $item) : ?>
        <div class="home-gallery__item"><img src="<?= $item['img']['url'] ?>"></div>
    <?php endforeach ?>
</div>