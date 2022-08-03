<?php
    $blockTitle = get_sub_field('title');
    $img = get_sub_field('img');
    $contentTitle = get_sub_field('content_title');
    $mainContent = get_sub_field('main_content');
?>

<div class="history-block section">
    <div class="container">
        <div class="history-block__header">
            <h2 class="history-block__title block-title"><?= $blockTitle ?></h2>
        </div>
        <div class="history-block__body">
            <div class="history-block__img-wrapper">
                <img src="<?= $img['url'] ?>" class="history-block__img">
            </div>
            <div class="history-block__content sd">
                <h3 class="history-block__content-title"><?= $contentTitle ?></h2>
                <?= $mainContent ?>
            </div>
        </div>
    </div>
</div>