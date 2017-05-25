<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nondesigns
 */

?> 

<?php 

    if ( is_page('product-1') ) {
        include 'slide-about.php';
    }

    $nondesigns_products = rwmb_meta('nondesigns_products');

    $reverse_products = array_reverse($nondesigns_products);

    foreach ( $reverse_products as $nondesign_product ) {
        
        $slug = get_post_field( 'post_name', $nondesign_product );
        $images = rwmb_meta( 'nondesigns_slide_background', 'type=image&size=full', $nondesign_product );
        $reset = array_values($images);
        //var_dump ($reset);
        $total_slides = count($images);
        $add_slides = $total_slides - 2;
        
        
        echo '<div id="' . $slug . '" data-cycle-hash="' . $slug . '" class="' . $slug . '">';
        
            echo '<div class="cycle-slideshow products inner-slideshow" data-cycle-fx="scrollHorz" data-cycle-swipe=true data-cycle-slides="> div.slide"';
            echo 'data-cycle-prev="#' . $slug . ' .prev"';
            echo 'data-cycle-next="#' . $slug . ' .next"';
            echo 'data-cycle-pager="#' . $slug . ' .pager"';
            echo 'data-cycle-pager-template="<a href=\'#\' style=\'inline-block; width:30px; height:30px;\'>&nbsp;&nbsp;</a>">';
        
                echo '<div class="one slide" style="background-image:url(' . $reset[0]['url'] . ')">';
                echo '<div class="product-init-nav next">';
                echo '<div class="product-name">' . get_the_title($nondesign_product) . '</div>';
                echo '<div class="init-next-slide">MORE</div>';
                if ( $slug == 'nickelodeon' ) {
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/dlA5Wo0-58o" frameborder="0" autoplay=1 allowfullscreen controls=0></iframe>';
                }
                echo '</div></div>';

                echo '<div class="two slide" style="background-image:url(' . $reset[1]['url'] . ')"><div class="product-detail-nav prev">';
                echo '<div class="product-name">' . get_the_title($nondesign_product) . '</div>';
                echo '<div class="init-prev-slide">PREV.</div>';
                echo '</div>';
                echo '<table cellpadding="0" cellspacing="0" border="0" height="100%" class="product-detail"><tr><td valign="bottom" height="100%">';
                echo '<p>' . get_the_title($nondesign_product) . '</p>';
                echo get_post_field('post_content', $nondesign_product);
                echo '<p><img src="/wp-content/themes/nondesigns/images/big-logo.png" width="150" alt="" border="0" /></p>';
                echo '</td></tr></table>';
                echo '</div>';
        
                echo '<div class="pager" data-cycle-cmd="pause"></div>';
                echo '<div class="prev-slide prev">PREV.</div>';
                echo '<div class="next-slide next">NEXT</div>';
        
                if (($wp_query->current_post +1) == ($wp_query->post_count)) {
                    if ( is_page('product-1') ) {
                        echo '<div class="next-app"><a href="/product-2">NEXT PROJECT</a></div>';
                    }
                    if ( is_page('product-2') ) {
                        echo '<div class="next-app"><a href="/product-3">NEXT PROJECT</a></div>';
                    }
                    if ( is_page('product-3') ) {
                        echo '<div class="next-app"><a href="/product-4">NEXT PROJECT</a></div>';
                    }
                    if ( is_page('product-4') ) {
                        echo '<div class="next-app"><a href="/product-5">NEXT PROJECT</a></div>';
                    }
                } 
        
                if (($wp_query->current_post) > 1 ) {
                    if ( is_page('product-2') ) {
                        echo '<div class="previous-app"><a href="/product-1/#need_last_slide_of_previous_loop">PREVIOUS PROJECT</a></div>';
                    }
                    if ( is_page('product-3') ) {
                        echo '<div class="previous-app"><a href="/product-2/#need_last_slide_of_previous_loop">PREVIOUS PROJECT</a></div>';
                    }
                    if ( is_page('product-4') ) {
                        echo '<div class="previous-app"><a href="/product-3/#need_last_slide_of_previous_loop">PREVIOUS PROJECT</a></div>';
                    }
                    if ( is_page('product-5') ) {
                        echo '<div class="previous-app"><a href="/product-4/#need_last_slide_of_previous_loop">PREVIOUS PROJECT</a></div>';
                    }
                }
        
                if ( $total_slides > 2 ) { echo '<div class="three slide" style="background-image:url(' . $reset[2]['url'] . ')"></div>'; }
                if ( $total_slides > 3 ) { echo '<div class="four slide" style="background-image:url(' . $reset[3]['url'] . ')"></div>'; }
                if ( $total_slides > 4 ) { echo '<div class="five slide" style="background-image:url(' . $reset[4]['url'] . ')"></div>'; }
                if ( $total_slides > 5 ) { echo '<div class="six slide" style="background-image:url(' . $reset[5]['url'] . ')"></div>'; }
                if ( $total_slides > 6 ) { echo '<div class="seven slide" style="background-image:url(' . $reset[6]['url'] . ')"></div>'; }
                if ( $total_slides > 7 ) { echo '<div class="eight slide" style="background-image:url(' . $reset[7]['url'] . ')"></div>'; }
        
        echo '</div></div>';
        
        
    }
?>

    
	<!--<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>--><!-- .entry-header -->

	<!--<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nondesigns' ),
				'after'  => '</div>',
			) );
		?>
	</div>--><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<!--<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'nondesigns' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>--><!-- .entry-footer -->
	<?php endif; ?>