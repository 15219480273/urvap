<header>
	<div class="header-pc">
        <div class="container">
            <nav class="header-pc-left">
                <?php wp_nav_menu( array( 'menu' => 'Header Menu Left', 'depth' => 1) );?>
            </nav>
            <div class="header-pv-logo">
                <a href="/"><img src="/assets/images/logo.png" alt="Vaptex"></a>
            </div>
            <nav class="header-pc-right">
                <?php wp_nav_menu( array( 'menu' => 'Header Menu Right', 'depth' => 1) );?>
            </nav>
	    </div>
    </div>
	<div class="header-m">
		<?php wp_nav_menu( array( 'menu' => 'Mobile Menu', 'depth' => 1) );?>
	</div>
</header>

