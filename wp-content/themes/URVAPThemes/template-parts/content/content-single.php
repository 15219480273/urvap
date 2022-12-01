<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<?php
$resourceList = array(
    'blog_post' => '/assets/css/blog_post.min.css',
);

loadTimeResource($resourceList)
?>
<link rel="stylesheet" href="/assets/css/owl.carousel.css" media="all">
<link rel="stylesheet" href="/assets/css/owl.theme.css" media="all">
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/owl-carousel.min.js"></script>
<!-- blog post detail -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="post-header">
		<?php twenty_twenty_one_post_thumbnail(); ?>
    </section>
    <section class="post-featured">
		<?php twenty_twenty_one_post_thumbnail(); ?>
    </section>
    <section class="post-body">
        <div class="post-main">
            <div class="post-head">
                <h1><?php echo get_the_title($ID); ?></h1>
                <time><?php echo get_the_date() ?></time>
            </div>
            <div class="post-content">
				<!-- blog post detail -->
				<?php
				the_content();
				?>
            </div>
        </div>
        <div class="post-sticky">
            <div class="post-activity">
                <!-- <a href="/vpc-campaign"><img src="/assets/images/blog/blog_sticky.jpg" alt="VAPTEX Campaign"></a> -->
                <!-- <a href="/2b-campaign"><img src="/assets/images/blog/blog_sticky02.jpg" alt="VAPTEX Campaign"></a> -->
            </div>
            <h3>You may also like</h3>
            <div class="recommended owl-slider">
                <ul class="recommended-list owl-carousel owl-theme">
				<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
					$args = array('post_type' => 'post', 'posts_per_page' => 2,  'ignore_sticky_posts' => 1, 'category_name' => 'blog', 'paged' => $paged); 
					$post_type_data = new WP_Query($args); 
					set_query_var('page',$paged); 
					while ($post_type_data->have_posts()): 
						$post_type_data->the_post(); 
						global $more; 
						$more = 0; 
				?> 
                    <li>
                        <a href="<?php echo the_permalink(); ?>">
							<div class="blog_img"><?php the_post_thumbnail('wl_blog_img'); ?> </div>
                            <h2>
								<p><?php echo the_title(); ?></p>
                            </h2>
                        </a>
                    </li>
				<?php endwhile; ?> 
                </ul>
            </div>
        </div>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->

<script type="text/javascript">
    window.onload = function() {
        var screensize = $(window).width();
        if (screensize < 769) {
            startCarouse();
        } else {
            stopCarouse();
        }
        $(window).resize(function() {
            if ($(window).width() < 769) {
                startCarouse();
            } else {
                stopCarouse();
            }
        });

        function startCarouse() {
            $(function() {
                $('.recommended-list').owlCarousel({
                    lazyLoad: true,
                    loop: true,
                    margin: 8,
                    responsiveClass: true,
                    autoHeight: false,
                    autoWidth: false,
                    smartSpeed: 800,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        768: {
                            items: 2
                        }
                    }
                });
            });
        }

        function stopCarouse() {
            var owl = $('.owl-carousel');
            owl.trigger('destroy.owl.carousel');
            owl.addClass('off');
        }
    }
</script>
