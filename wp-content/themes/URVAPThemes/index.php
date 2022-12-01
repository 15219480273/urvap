<?php get_header(); ?>
<link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="/assets/css/index.min.css">
<?php
$resourceList = array(
    'index' => '/assets/css/index.min.css',
);
loadTimeResource($resourceList)
?>

<section class="banner">
    <div id="banner" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="/">
                    <img class="pc_show" src="/assets/images/banner/art_pc.jpg" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="/">
                    <img class="pc_show" src="/assets/images/banner/art_pc.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- <div class="swiper-button-prev s-hide"></div>
        <div class="swiper-button-next s-hide"></div> -->
        <div id="bannerPagination" class="swiper-pagination"></div>
    </div>
</section>

<?php get_footer(); ?>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/index.js"></script>
