<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<?php
$resourceList = array(
    'blog_list' => '/assets/css/blog_list.min.css',
);

loadTimeResource($resourceList)
?>
<link rel="stylesheet" href="/assets/css/font-awesome.min.css" type="text/css" media="all">
<?php if ( have_posts() ) : ?>

	<?php /* 
    Template Name: Blog Category - Hot Page 
    */ 
	?>
	<header class="page-header alignwide">

    </header>
    <section class="blog-type-box"> 
        <div class="blog-type">
            <div class="blog-type-item">
                <a href="/news">
                    <div class="type-item-box">
                        <img src="/assets/images/blog/type-bg1.jpg" alt="">
                        <h3 class="type-title">News</h3>
                    </div>
                </a>
            </div>
            <div class="blog-type-item">
                <a href="/brandstories">
                    <div class="type-item-box">
                        <img src="/assets/images/blog/type-bg2.jpg" alt="">
                        <h3 class="type-title">Brand Stories</h3>
                    </div>
                </a>
            </div>
            <div class="blog-type-item">  
                <a href="/vapeguide">
                    <div class="type-item-box">
                        <img src="/assets/images/blog/type-bg3.jpg" alt="">
                        <h3 class="type-title">Vape Guide</h3>
                    </div>
                </a>
            </div>
            <!-- <div class="blog-type-item">
                <a href="/guest">
                    <div class="type-item-box">
                        <img src="/assets/images/blog/type-bg4.jpg" alt="">
                        <h3 class="type-title">Guest Posts</h3>
                    </div>
                </a>
            </div> -->
        </div>
    </section>

    <!-- Blog Post --> 
    <section class="blog-listing-box">
        <div>
        <div class="blog-listing active">
            <?php
                $limit = get_option('posts_per_page');   
                $page = (get_query_var('page')) ? get_query_var('page') : 1;
                // $sticky=get_option('sticky_posts');
                $cat= single_cat_title('', false);
                query_posts('cat='.get_cat_ID($cat).'&showposts=' . $limit=7 . '&paged=' . $page);
                $wp_query->is_archive = true; $wp_query->is_home = false;
            ?>
            <?php while (have_posts()) : the_post(); ?>  
                    <article class="blog-article">
                        <div class="article-img">
                            <a href="<?php echo the_permalink(); ?>">
                                <?php 
                                    if (has_post_thumbnail()): 
                                ?> 
                                <?php 
                                    $default = array('class' => 'img-responsive'); 
                                    the_post_thumbnail('wl_blog_img', $default); ?> 
                                <?php endif; ?> 
                            </a>
                        </div>
                        <div class="article-con">
                            <div class="article-info">
                                <div class="author-img">
                                    <img class="lazyload" src="/assets/images/loading.svg" data-src="/assets/images/blog/vaptex-logo.png" alt="VAPTEX BLOG">
                                </div>
                                <a><?php echo get_the_author(); ?></a>
                                <span></span>
                                <time>						
                                    <?php echo get_the_date('j'); ?> 
                                    <?php echo the_time('M'); ?>, 
                                    <?php echo the_time('Y'); ?>
                                </time>
                            </div>
                            <h4 class="article-title">
                                <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                            </h4>
                            <?php the_excerpt();?>
                            <a class="article-more" href="<?php echo the_permalink(); ?>">
                                Read More >>
                            </a>
                        </div>
                    </article>
            <?php endwhile; ?>
            <?php wpbeginner_numeric_posts_nav(); ?>
            </div>
        </div>
        <?php get_template_part( 'template-parts/content/blog-sticky' ); ?>
    </section>
    <!-- newslatter -->
    <section class="blog-newslatter">
        <p>Subscribe to our newsletter and stay updated!</p>
        <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
    </section>
<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?> 
