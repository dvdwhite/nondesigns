<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nondesigns
 */

get_header(); ?>

	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->



            <div class="cycle-slideshow home" 
                 data-cycle-swipe=true
                 data-cycle-fx="scrollHorz"
                 data-cycle-timeout="9000"
                 data-cycle-pager=".pager"
                 data-cycle-pager-template="<a href='#' style='inline-block; width:30px; height:30px;'>&nbsp;&nbsp;</a>"
                 data-cycle-slides="> div.slide"
            >
                
                <?php
                    $images = rwmb_meta( 'nondesigns_home_feature', 'type=image&size=full' );
                    if ( !empty( $images ) ) {
                        
                        foreach ( $images as $image ) {
                            echo "<div class='slide' style='background-image: url({$image['url']})'> </div>";
                        }
                    }
                ?>    
                
<!--                
                <div class="one slide">

                    <div class="home-slide-content">
                        <img src="images/big-logo.png" width="200" height="34" border="0" />
                        <h2>PRODUCTS THAT CREATE SPACES</h2>
                        <p>WE CREATE PRODUCTS THAT RANGE IN SCALE FROM SMALL OBJECTS TO MODULAR SPACES.</p>
                        <p>+ <a href="/products/box.html">More about the NON Box</a></p>
                    </div>

                </div>
                <div class="two slide">

                    <div class="home-slide-content">
                        <img src="images/big-logo.png" width="200" height="34" border="0" />
                        <h2>MADE IN PASADENA, CA</h2>
                        <p>NON PRODUCTS ARE MADE IN PASADENA, CA BY HARD-WORKING ROBOTS OPERATED BY IMAGINATIVE DESIGNERS.</p>
                        <p>+ <a href="/products/rain.html">More about the Rain Desk</a></p>
                    </div>                

                </div>
                <div class="three slide">

                    <div class="home-slide-content">
                        <img src="images/big-logo.png" width="200" height="34" border="0" />
                        <h2>A CREATIVE AGENCY</h2>
                        <p>WE TRANSLATE BRAND MESSAGES INTO CUSTOMER EXPERIENCES.</p>
                        + <a href="#">More about the Lexus CT Umbra</a>
                    </div>                

                </div>-->

            </div>
            <div class="pager" data-cycle-cmd="pause"></div>

		<!--</main>--><!-- #main -->
	<!--</div>--><!-- #primary -->

<?php
get_sidebar();
get_footer();
