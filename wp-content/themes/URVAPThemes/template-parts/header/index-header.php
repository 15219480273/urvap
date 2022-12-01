<section class="warning">
    <div class="container">
        <p>WARNING: THIS PRODUCT CONTAINS NICOTINE. NICOTINE IS AN ADDICTIVE CHEMICAL.</p>
    </div>
</section>
<header class="site_header">
        <nav class="nav_left">
			<?php 
				wp_nav_menu( array( 'menu' => 'Header Menu Left', 'depth' => 2) );		
			?>
        </nav>
        <a href="/" class="site_logo">
            <img id="site_logo" src="/assets/images/logo.png" alt="FUNG Vape">
        </a>
        <nav class="nav_right">
			<?php 
				wp_nav_menu( array( 'menu' => 'Header Menu Right ', 'depth' => 2) );		
			?>
        </nav>

</header>