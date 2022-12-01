<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

    <footer class="footer">
        <div class="logo">
            <a href="/"><img src="/assets/images/logo.png" alt=""></a>
        </div>
        <div class="f_container">
            <div class="f_left">
                <div class="item">
                    <h4 class="sub_title">Quick Guide</h4>
                    <!-- <ul>
                        <li>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <a href="">IT'S URVAP</a>
                        </li>
                        <li>
                            <a href="">Product</a>
                        </li>
                        <li>
                            <a href="">UR Times</a>
                        </li>
                        <li>
                            <a href="">Privacy Policy</a>
                        </li>
                    </ul> -->
					<?php 
                        wp_nav_menu( array( 'menu' => 'Main Menu', 'depth' => 1) );		
                    ?>
                </div>
                <div class="item line">
                    <h4 class="sub_title">Say Hi Anytime</h4>
                    <ul>
                        <li>
                            <a href="">Hello@urvap.com </a>
                        </li>
                        <li>
                            <a>For wholesale/Retail:</a>
                        </li>
                        <li>
                            <a href="">Sales@urvap.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="f_right">
                <div class="item">
                    <h4 class="sub_title">URVAP Company</h4>
                    <li>
                        2022 URVAP. All Rights Reserved.
                    </li>
                    <li>
                        <h6>US Office:</h6>
                        2580 E Philadelphia St Ontario, CA 91761
                    </li>
                    <li>
                        <h6>China Office:</h6>
                        7th Floor, No. 23, Wusha Xinle Road,<br/> Chang'an, Dongguan
                    </li>
                </div>
                <div class="item">
                    <p>Become a member and be the first to<br/> receive new content.</p>
                    <div class="form">
						<?php echo do_shortcode("[contact-form-7 id='6' title='Newslatter']"); ?>
                    </div>
                    <div class="social_list">
						<a href="" target="_blank" rel="nofollow">
                            <img src="/assets/images/ig.jpg" alt="Instagram">
                        </a>
                        <a href="" target="_blank" rel="nofollow">
                            <img src="/assets/images/facebook.jpg" alt="Facebook">
                        </a>
                        <a href="" target="_blank" rel="nofollow">
                            <img src="/assets/images/pinterest.jpg" alt="Pinterest">
                        </a>
						<a href="" target="_blank" rel="nofollow">
                            <img src="/assets/images/youtube.jpg" alt="Youtube">
                        </a>

                        <a href="" target="_blank" rel="nofollow">
                            <img src="/assets/images/tiktok.jpg" alt="Tiktok">
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer_con">
            <div class="text">
                <h6>The sale of tobacco products to <br/>minors is prohibited by law.</h6>
                <p>This is an age restricted product and <br/>age verification is required at sale.</p>
            </div>
            <div class="text line">
                <h6>Warning:</h6>
                <p>This product contains nicotine. <br/>Nicotine is an addictive chemical.</p>
            </div>
            <div class="text">
                <h6>California Proposition 65 Warning:</h6>
                <p>This product contains chemicals known to the state <br/>of California to cause cancer and birth defects or <br/>other reproductive harm.</p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
