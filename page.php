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

<style type="text/css">
iframe {
position: fixed;
right: 0;
bottom: 0;
min-width: 100%;
min-height: 100%;
width: auto;
height: auto;
z-index: -100;
}
</style>

	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">-->

            <!-- Vertical Cycle Container -->
            <div class="cycle-slideshow vertical-container" id="slideshow"
                data-cycle-fx="scrollVert"
                data-cycle-slides="> div"  
                data-cycle-speed=500
                data-cycle-prev="#prev"
                data-cycle-next="#next"
                >            
            
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>
                
            </div>

            <!-- Vertical slide navigation arrows -->
            <div class="previous-project vert-scroll">
                <div class="arrow-up" id="next">PREVIOUS PROJECT</div>
            </div>            
            
            <div class="next-project vert-scroll">
                <div class="arrow-down" id="prev">NEXT PROJECT</div>
            </div>            
            <!-- / Vertical slide navigation arrows -->

		<!--</main>--><!-- #main -->
	<!--</div>--><!-- #primary -->

        <script>
            
            $(function() {
                
                // Pause all slideshows on the page.
                $('.cycle-slideshow').cycle('pause');
                
                <?php if ( is_page('product-1')) {
                    echo "$('#slideshow').cycle('next');";
                } ?>

                <?php $nondesigns_products = rwmb_meta('nondesigns_products');

                    foreach ( $nondesigns_products as $nondesign_product ) {
                        echo "$('#slideshow').cycle('next');";
                    }
                ?>
                
                
                // Reset the product index to zero.
                $('.vert-scroll').click(function() {
                    //$('.inner-slideshow').cycle('goto', 0); 
                    $('.next-slide').fadeOut();
                    $('.prev-slide').fadeOut();
                    
                    
                });
                
                


            });
            
        </script>                
                
<?php
get_sidebar();
get_footer();
