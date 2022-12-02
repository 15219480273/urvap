<?php get_header(); ?>
<link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
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
                    <img class="pc_show" src="/assets/images/banner/banner_pc.jpg" alt="">
                    <img class="m_show" src="/assets/images/banner/banner_m.jpg" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="/">
                    <img class="pc_show" src="/assets/images/banner/banner_pc.jpg" alt="">
                    <img class="m_show" src="/assets/images/banner/banner_m.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- <div class="swiper-button-prev s-hide"></div>
        <div class="swiper-button-next s-hide"></div> -->
        <div id="bannerPagination" class="swiper-pagination"></div>
    </div>
</section>
<section class="product_panel">
    <div class="container">
        <div class="pro_text">
            <h2>MAKE UR <br/>VAPE DAY</h2>
            <p>Enjoy the exclusive and <br/>exceptional vaping experience <br/>with URVAP unique, quality and <br/>modern design products. </p>
            <a href="/">Explore UR VAPES</a>
        </div>
        <img class="pro_potser" src="/assets/images/index/pro_potser.png" alt="">
    </div>
</section>
<section class="video_panel">
    <div class="title_panel">
        <h2>IT'S <span>UR VAP</span></h2>
    </div>
    <div id="video" class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="item">
                    <img class="poster" src="/assets/images/index/video_poster.jpg" alt="">
                    <img class="icon" src="/assets/images/index/video_icon.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="item">
                    <img class="poster" src="/assets/images/index/video_poster.jpg" alt="">
                    <img class="icon" src="/assets/images/index/video_icon.png" alt="">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="item">
                    <img class="poster" src="/assets/images/index/video_poster.jpg" alt="">
                    <img class="icon" src="/assets/images/index/video_icon.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="video_text">
        <h4>Life is Challenge. Now, It's UR TIME.</h4>
        <p>This is your place. This is your moment. This is your opportunity. <br/>This is your time. </p>
    </div>
    <div class="thumb_box m_show">
        <div thumbsSlider="" class="swiper thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="" src="/assets/images/index/video_poster.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="" src="/assets/images/index/video_poster.jpg" alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="" src="/assets/images/index/video_poster.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news_panel">
    <div class="title_panel">
        <h2><span>UR</span> TIMES</h2>
    </div>
    <div class="news_list">
        <div id="news" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="news_img">
                        <img src="/assets/images/index/times_poster.jpg" alt="">
                    </div> 
                    <div class="news_con">
                        <h4>Pick the right nicotine strength.</h4>
                        <p>Our mission is to help people to quit smoking with vaping, and quit vaping with vaping less Nicotine and eventually be free from nicotine. </p>
                        <a href="#">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="news_img">
                        <img src="/assets/images/index/times_poster.jpg" alt="">
                    </div> 
                    <div class="news_con">
                        <h4>Pick the right nicotine strength2.</h4>
                        <p>Our mission is to help people to quit smoking with vaping, and quit vaping with vaping less Nicotine and eventually be free from nicotine. </p>
                        <a href="#">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev s-hide"></div>
        <div class="swiper-button-next s-hide"></div>
    </div>
</section>
<section class="kol_panel">
    <div class="title_panel">
        <h2>URVAP <span>Your Vape</span></h2>
    </div>
    <div class="kol_list">
        <div class="left">
            <a href=""><img src="/assets/images/index/kol1.jpg" alt=""></a>
        </div>
        <div class="right">
            <a href=""><img src="/assets/images/index/kol2.jpg" alt=""></a>
            <a href=""><img src="/assets/images/index/kol3.jpg" alt=""></a>
            <a href=""><img src="/assets/images/index/kol4.jpg" alt=""></a>
            <a href=""><img src="/assets/images/index/kol5.jpg" alt=""></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/index.js"></script>
