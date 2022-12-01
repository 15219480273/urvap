$(document).ready(function() {

    var clienWidth = $(window).width();

    if (clienWidth > 992) {

    } else {

    }

    var swiper = new Swiper('#banner', {

        effect: 'fade',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // }
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
})