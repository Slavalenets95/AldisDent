<?php $video = get_field('video', 'options');
      $thumbnail = get_field('video_img', 'options');
?>

<div class="home-video section">
    <video muted loop playsinline autoplay="autoplay" src="<?= $video ?>" controls poster="<?= $thumbnail['url'] ?>">
        <source src="<?= $video ?>" type="video/mp4">
    </video>
    <!-- <button class="home-video__btn">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 29 44" width="29" height="44">
            <image width="29" height="44" id="img1"
                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAsCAMAAACua0M1AAAAAXNSR0IB2cksfwAAAMNQTFRF+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/+/3/d9y0AQAAAEF0Uk5TWQIA0rkV/+Q9+3cBtBPhOPpxsa8Q3jT4bKoO2jD3R48F81bXKKkMcDy/GP6JBPFQJaMKajeCA+5LziGdCGMymRJ0lBk5AAAA0klEQVR4nH3U1RLCMBRF0VDgFHd3d3eH//8qrHQg9J68rpmdNrmtUi5DXsrt8TKF6WMKfyBIFJDqb5Xqlgr1jwKhMFNEokwRi+v1bwUSYaZ6XVOtriuQTDFFOsMU2RxTIJ9i+qkLatUlfdQLTFEsMUW5wrRak7XeIPs2W+SZ2x35jWJdclZmj5xzfyDfwnA0lm9wMiWz4Z6RuZov5KnLLn8H9kcjK0NWh8/U1uF684e2bnf/Zuv+4ISWHk+O+NLy2dlemr5IaKhr6CaioTbSv+q57v6mG/GPfak1AAAAAElFTkSuQmCC" />
            <defs />
            <style />
        </svg>
    </button> -->
</div>