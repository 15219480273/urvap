<?php 
/*
Template name: Page - Product ART
*/
get_header(); ?>

<?php
$resourceList = array(
    'product_art' => '/assets/css/product_art.min.css',
);

loadTimeResource($resourceList)
?>
<link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="/assets/css/poupupVideo.min.css">
<section class="section banner">
    <img class="pc_show bg lazyload" src="/assets/images/art/banner_pc_small.jpg" data-src="/assets/images/art/banner_pc.jpg" alt="ART Vape">
    <img class="m_show bg lazyload" src="/assets/images/art/banner_m_small.jpg" data-src="/assets/images/art/banner_m.jpg" alt="ART Vape">
    <video id="banner_video" muted webkit-playsinline playsinline preload="auto" loop="loop" name="media"></video>
    <div class="pro_container">
        <div class="text">
            <h1>ART</h1>
            <p>SIMPLY ICONIC</p>
            <span></span>
            <p class="pro_type">Disposable Pod</p>
        </div>
        <ul class="spec_list fade_box">
            <li>
                <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/art/spec1.png" alt="ART Vape Specifications">
                <p>600 Puffs</p>
            </li>
            <li>
                <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/art/spec2.png" alt="ART Vape Specifications">
                <p>400 mAh</p>
            </li>
            <li>
                <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/art/spec3.png" alt="ART Vape Specifications">
                <p>2ml</p>
            </li>
            <li>
                <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/art/spec4.png" alt="ART Vape Specifications">
                <p>MTL</p>
            </li>
        </ul>
    </div>
</section>
<section class="section flavor">
    <div class="pro_container">
        <div class="section_text">
            <h2>Premium Choice of Colors and Flavors</h2>
            <p>
                Introducing the new ART, 600 puffs with 10 colorful shapes and rich and tasty flavors, it <br/>
                makes you stand out of the crowd with its stylish and minimalist design, compact, flat, easy <br/>
                handling, and pocket-friendly like a cigarette leaf.
            </p>
        </div>
    </div>
    <div class="flavor_list swiper">
        <div class="swiper-wrapper">
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor1.jpg" alt="">
                    <p>FRESH MINT</p>
                </div>
                <img class="pro"src="/assets/images/art/pro1.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor2.jpg" alt="">
                    <p>STRAWBERRY <br/>ICE</p>
                </div>
                <img class="pro" src="/assets/images/art/pro2.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor3.jpg" alt="">
                    <p>Double Apple</p>
                </div>
                <img class="pro" src="/assets/images/art/pro3.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor4.jpg" alt="">
                    <p>BLUEBERRY <br/>RASPBERRY</p>
                </div>
                <img class="pro" src="/assets/images/art/pro4.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor5.jpg" alt="">
                    <p>Watermelon <br/>ICE</p>
                </div>
                <img class="pro" src="/assets/images/art/pro2.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor6.jpg" alt="">
                    <p>Fuji Melon</p>
                </div>
                <img class="pro" src="/assets/images/art/pro3.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor7.jpg" alt="">
                    <p>Bubble Gum Ice</p>
                </div>
                <img class="pro" src="/assets/images/art/pro1.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor8.jpg" alt="">
                    <p>Kiwi Passion <br>Fruit Guava</p>
                </div>
                <img class="pro" src="/assets/images/art/pro4.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor9.jpg" alt="">
                    <p>Pink Lemonade</p>
                </div>
                <img class="pro" src="/assets/images/art/pro2.png" alt="">
            </div>
            <div class="item swiper-slide">
                <div class="con">
                    <img src="/assets/images/art/flavor10.jpg" alt="">
                    <p>Peach Mango</p>
                </div>
                <img class="pro" src="/assets/images/art/pro1.png" alt="">
            </div>
        </div>
        <div id="swiperPagination" class="swiper-pagination"></div>
    </div>
</section>
<section class="section video">
    <img class="bg" src="/assets/images/art/video_pc.jpg" alt="ART Vape">
    <video id="product_video" muted webkit-playsinline playsinline preload="auto" loop="loop" name="media"></video>
    <div class="pro_container">
        <div class="play fade_box">
            <img class="js-video lazyload" src="/assets/images/loading.svg" data-src="/assets/images/play_icon.svg" data-href="https://www.youtube.com/embed/YIFV_WITD4E" alt="ART Vape Video">
        </div>
    </div>
</section>
<section class="section fresh">
    <img class="pc_show bg lazyload" src="/assets/images/art/flavor_pc_small.jpg" data-src="/assets/images/art/flavor_pc.jpg" alt="ART Vape">
    <img class="m_show bg lazyload" src="/assets/images/art/flavor_m_small.jpg" data-src="/assets/images/art/flavor_m.jpg" alt="ART Vape">
    <div class="pro_container"> 
        <div class="section_text">
            <h2>Fresh and Fruity Flavor</h2>
            <p>ART comes with 10 popular flavors which contain 20mg of salt nicotine in the <br/>pre-filling pod. All these flavors are fine-tuned to deliver rich, tasty, and fruity <br/>sensations that last longer in your mouth.</p>
        </div>
    </div>
</section>
<section class="section battery">
    <img class="pc_show bg" src="/assets/images/art/battery_pc.jpg" alt="ART Vape">
    <img class="m_show bg" src="/assets/images/art/battery_m.jpg" alt="ART Vape">
    <div class="pro_container"> 
        <div class="section_text">
            <h2>Flavorful Without Compromise</h2>
            <p>Packed with a 400mAh battery built-in, ART offers you the last flavor till the last drop.</p>
        </div>
    </div>
</section>
<section class="section puffs">
    <img class="pc_show bg" src="/assets/images/art/puffs_bg_pc.jpg" alt="ART Vape">
    <img class="m_show bg" src="/assets/images/art/puffs_bg_m.jpg" alt="ART Vape">
    <div class="pro_container"> 
        <div class="section_text">
            <h2>Refreshing Enjoyment</h2>
            <p>Every puff is unique, every puff is tasty cool, and every puff <br/>is sensational fruity that keeps it fresh all day long.</p>
        </div>
    </div>
    <div class="puffs_pro fade_box">
        <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/art/puffs_pro.png" alt="ART Vape">
    </div>
</section>
<section class="section spec">
    <div class="pro_container">
        <div class="spec_text">
            <h2>Specifications</h2>
            <ul class="spec_list">
                <li>Dimension: <span>22 x 11 x 109mm</span></li>
                <li>Battery Capacity: <span>400mAh </span></li>
                <li>Coil Resistance : <span>1.6Ω </span></li>
                <li>E-liquid Capacity : <span>2ml</span></li>
                <li>Nicotine Strength: <span>2% or 1% or 0%</span></li>
                <li>Puffs: <span>Up to 600</span></li>
            </ul>
        </div>
        <div class="pro_view">
            <div class="pro_show">
                <img class="size" src="/assets/images/art/size_bg.png" alt="">
                <div class="product_show">
                    <div id="img360" class="img360" style="background-image: url(/assets/images/art/360/art.1.png);background-size: cover;background-position: center;"></div>
                </div>
            </div>
            
            <input class="range" type="range" id="range" min="1" max="38" value="1" step="1">
            <h4>360° PRODUCT VIEWER</h4>
        </div>
    </div>
</section>
<section class="section package">
    <div class="pro_container">
        <div class="section_text">
            <h2>EU PACKAGING</h2>
        </div>
    </div>
    <div class="package_img fade_box">
        <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/art/package.png" alt="">
    </div>
</section>
<section class='video_window'></section>
<?php get_footer(); ?>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script type="text/javascript">
    
$(document).ready(function() {
    //拖拉旋转
    (function(c) {
        c.fn.extend({
            image360: function(k) {
                new c.vc3dEye(this, k)
            }
        });
        c.vc3dEye = function(k, e) {
            function a(a) {
                if (5 < g - a) {
                    g = a
                    b--;
                    if (b < 1) {
                        b = h;
                    }
                } else {
                    if (-5 > g - a) {
                        g = a
                        b++;
                        if (b > h) {
                            b = 1;
                        }
                    }
                }
                c(f).css("background-image", "url(" + l + b + "." + m + ")")
                // console.log("index:" + b);
                $("#range").val(b)
            }
            var b = 1,
                h = 0,
                d = !1,
                g = 0,
                f, l, n = 1,
                m = "png";
            (function(a, b) {
                f = a;
                l = b.imagePath;
                h = b.totalImages;
                m = b.imageExtension;
                range = "#" + b.rangeId
            })(k, e);
            c(f).html("<div id='VCc' style='height:100%;width:100%;' class='onLoadingDiv'></div>");
            (function() {
                var a = l + "1." + m;
                c(f).css("background-image", "url(" + a + ")");
                for (var b = 2; b <= h; b++) a = l + b + "." + m,
                    c(f).append("<img src='" + a + "' style='display:none;'>"),
                    c("<img/>").attr("src", a).css("display", "none").load(function() {
                        n++;
                        n >= h && (c("#VCc").removeClass("onLoadingDiv"), c("#VCc").text(""))
                    })
            })();
            (function() {
                c("#VCc").mousedown(function() {
                    d = !0
                });
                c(document).mouseup(function() {
                    d = !1
                });
                c("#VCc").mousemove(function(b) {
                    1 == d ? a(b.pageX - this.offsetLeft) : g = b.pageX - this.offsetLeft
                });
                c("#VCc").bind("touchstart",
                    function(a) {
                        a.preventDefault();
                        d = !0
                    });
                c(document).bind("touchend",
                    function(a) {
                        d = !1
                    });
                c("#VCc").bind("touchmove",
                    function(b) {
                        b = b.originalEvent.touches[0] || b.originalEvent.changedTouches[0];
                        1 == d ? a(b.pageX - this.offsetLeft) : g = b.pageX - this.offsetLeft
                    });
                c(range).bind("input propertychange",
                    function() {
                        c(f).css("background-image", "url(" + l + $(this).val() + "." + m + ")")
                        b = $(this).val()
                    })
            })()
        }
    })(jQuery);
    //     获取用于旋转图的其他路径
    function getProSrc(obj) {
        var pro_switch_src = $(obj).css("background-image").replace('url("', '').replace('")', '');
        var i = pro_switch_src.lastIndexOf(".")
        pro_switch_src = pro_switch_src.substr(0, pro_switch_src.lastIndexOf(".", i - 1))
        return pro_switch_src+ '.';
    }
    $("#img360").image360({
        imagePath: getProSrc("#img360"),
        totalImages: 38,
        imageExtension: "png",
        rangeId: "range",
    });

    $(".color_choose li").on('click', function() {
        var index = $(".color_choose li").index(this);
        $(".color_con_list li").eq(index).addClass("active").siblings().removeClass("active");
        $(".color_pro img").eq(index).addClass("active").siblings().removeClass("active");
        $(".color_bg img").eq(index).addClass("active").siblings().removeClass("active");
        $(".section.color").css('background-color', $(this).data("panelcolor"));
        $(".color_con").css('background-color', $(this).data("bgcolor"));
        $(".color_panel .sub_title").css('color', $(this).data("color"));
    })
})

var clienWidth = $(window).width();
if (clienWidth < 992) {
    var flavorSwiper = new Swiper('.flavor_list', {
        slidesPerView: 2.2,
        autoplay: true, 
        pagination: {
            el: '.swiper-pagination',
            clickable :true,
        },
    })
    var VideoSrc = '/assets/videos/art_m.mp4';
}else{
    var VideoSrc = '/assets/videos/art_pc.mp4';
}

window.onload = function(){
    var Dom = '<source src=' + VideoSrc + ' type=video/mp4>';
    var bannerVideo = document.querySelector('#banner_video');
    bannerVideo.innerHTML += Dom;

    bannerVideo.load();
    bannerVideo.addEventListener('canplaythrough',function(){
        bannerVideo.play();
    });

    var ProDom = '<source src=/assets/images/art/art_video.mp4 type=video/mp4>';
    var productVideo = document.querySelector('#product_video');
    productVideo.innerHTML += ProDom;

    productVideo.load();
    productVideo.addEventListener('canplaythrough',function(){
        productVideo.play();
    });

    $(document.body).on("click", ".js-video[data-href]", function(event) {
        event.preventDefault();
        if (!$(".video_window").children().length) {
            var videoHref = this.dataset.href;
            var str =
                "<div class='video_mask'>" +
                "</div>" +
                "<div class='video_close'>" +
                "<button>" +
                "</button>" +
                "</div>";
            document.querySelector('.video_window').innerHTML += str;
            $(".video_window").fadeIn(function() {
                var iframe =
                    "<div class='video_iframe'>" +
                    "<iframe src=" + videoHref + "?autoplay=1&mute=1' name='youtube embed' allow='autoplay; encrypted-media' allowfullscreen></iframe>" +
                    "</div>";
                document.querySelector('.video_window').innerHTML += iframe;
            });
        }
    });

    // 删除弹出框
    $(document.body).on("click", ".video_mask", function() {
        $(".video_window").fadeOut(function() {
            $(".video_window").empty();
            $(document.body).removeClass("body-overflow");
        });
    })

    $(document.body).on("click", ".video_close", function() {
        $(".video_window").fadeOut(function() {
            $(".video_window").empty();
            $(document.body).removeClass("body-overflow");
        });
    })
}


  
</script>