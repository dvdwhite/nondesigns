<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nondesigns
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nondesigns' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!--<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>--><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nondesigns' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>--><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        
        <div class="container">
            
            <div class="menu-icon">MENU</div>
            <div class="menu-popout"> 
            
                <div class="menu-close"> </div>
                <div class="menu-title">MENU</div>
                
                <div class="menu-list-container">
                    <nav id="site-navigation" class="main-navigation-" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'projects', 'menu_id' => 'projects-menu' ) ); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'products', 'menu_id' => 'products-menu' ) ); ?>
                        <?php wp_nav_menu( array( 'theme_location' => 'info', 'menu_id' => 'info-menu' ) ); ?>
                    </nav>
                    
                    <!--
                    
                    <br /><br />
                    
                    <ul class="projects">
                        <li><strong>PROJECTS:</strong></li>
                        <li><a href="product-1.html#nickelodeon">NICKELODEON</a></li>
                        <li><a href="product-1.html#wbe3-2013">WB GAMES E3 2013</a></li>
                        <li><a href="product-1.html#lexus">LEXUS CT UMBRA</a></li>
                        <li><a href="product-1.html#vapur">VAPUR</a></li>
                        <li><a href="product-1.html#wbe3-2014">WB GAMES E3 2014</a></li>
                        <li><a href="product-2.html#bubbles">BUBBLES INSTALLATION</a></li>
                        <li><a href="product-2.html#hoverstate">HOVERSTATE OFFICE</a></li>
                        <li><a href="product-2.html#thqe3">THQ E3 EXHIBIT</a></li>
                        <li><a href="product-2.html#wbe3-2012">WB GAMES E3 2012</a></li>
                        <li><a href="product-2.html#packit">PACKiT</a></li>
                        <li><a href="product-2.html#tmnt">TMNT LAIR</a></li>
                        <li><a href="product-2.html#apertures-of-nature">APERTURES OF NATURE</a></li>
                        <li><a href="product-2.html#wbe3-2011">WB GAMES E3 2011</a></li>
                        <li><a href="product-3.html#good-magazine">GOOD MAGAZINE</a></li>
                        <li><a href="product-3.html#batcave">BAT CAVE</a></li>
                        <li><a href="product-3.html#wbgamestop">WB GAMESTOP CONVENTION</a></li>
                        <li><a href="product-3.html#proposals">EXHIBIT DESIGN COMMISIONS</a></li>
                        <li><a href="product-3.html#wall-of-sound">WALL OF SOUND</a></li>
                        <li><a href="product-4.html#riot">RIOT</a></li>
                        <li><a href="product-4.html#101-collection">101 COLLECTION</a></li>
                        <li><a href="product-4.html#mitosis">MITOSIS INSTALLATION</a></li>
                    </ul>
                    <ul class="products">
                        <li><strong>PRODUCTS:</strong></li>
                        <li> <a href="product-1.html#linear-lighting">NON LINEAR LIGHTING</a></li>
                        <li> <a href="product-1.html#box">NON BOX</a></li>
                        <li> <a href="product-1.html#common-desk">NON COMMON DESK</a></li>
                        <li> <a href="product-1.html#majiang-set">NON MAJIANG SET</a></li>
                        <li> <a href="product-1.html#layers-collection">NON LAYERS COLLECTION</a></li>
                        <li> <a href="product-2.html#topo-table">NON TOPO TABLE</a></li>
                        <li> <a href="product-2.html#flip-light">NON FLIP LIGHT</a></li>
                        <li> <a href="product-2.html#braille-bag">NON BRAILLE BAG</a></li>
                        <li> <a href="product-3.html#wet-lamp">NON WET LAMP</a></li>
                        <li> <a href="product-3.html#bath-caddies">NON BATH CADDIES</a></li>
                        <li> <a href="product-3.html#analog-jewelry">NON ANALOG JEWELRY</a></li>
                        <li> <a href="product-4.html#wooden-bowls">NON WOODEN BOWLS</a></li>
                        <li> <a href="product-4.html#reflection-vase">NON REFLECTION VASE</a></li>
                        <li> <a href="product-4.html#rain-desk">NON RAIN DESK</a></li>
                    </ul> 
                    <ul class="info">
                        <li><strong>INFO:</strong></li>
                        <li><a href="/">HOME</a></li>
                        <li><a href="product-1.html">ABOUT US + CONTACT</a></li>
                        <li><a href="product-4.html#press">PRESS + HONORS</a></li>
                    </ul>   

                    -->
                    
                </div>
            
            </div>            