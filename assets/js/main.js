$(window).scroll(function() {
    if ($(window).scrollTop() >= 300) {
        $(".site_header").addClass("fixed_nav");
    } else {
        $(".site_header").removeClass("fixed_nav");
    }
})
