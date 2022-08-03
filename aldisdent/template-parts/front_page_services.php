<?php 
    $blockTitle = get_sub_field('title');
    $cards = get_sub_field('tabs');
?>
<div class="home-services section" id="services">
    <div class="home-services__header">
        <div class="container">
            <h2 class="home-services__title block-title"><?= $blockTitle ?></h2>
        </div>
    </div>
    <div class="home-services__nav">
        <ul class="home-services__nav-list">
            <?php $count = 0; foreach($cards as $card) : ?>
                <li>
                    <button data-btn-for="<?= translit($card['nav_txt']) ?>" class="home-services__nav-btn <?= !$count ? 'active' : '' ?>">
                        <?= $card['nav_txt'] ?>
                    </button>
                </li>
            <?php $count++; endforeach ?>
        </ul>
    </div>
    <div class="home-services__content">
        <div class="container">
            <?php $count = 0; foreach($cards as $card) : ?>
                <?php if($card['content']) : ?>
                    <div class="home-services__item <?= !$count ? 'active' : '' ?>" data-tab="<?= translit($card['nav_txt']) ?>">
                        <div class="home-services__item-img">
                            <img src="<?= $card['img']['url'] ?>" >
                        </div>
                        <div class="home-services__item-content sd">
                            <?= $card['content'] ?>
                        </div>
                    </div>
                <?php endif ?>
            <?php $count++; endforeach ?>
        </div>
    </div>
</div>