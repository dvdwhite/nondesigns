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
    
    function getPreviousPostSlug($pageName) {
        $previousPageMeta = get_page_by_path( $pageName );
        $previousPageId = $previousPageMeta->ID;
        echo $previousPageId;
        $previousPage = rwmb_meta('nondesigns_products', array(), $previousPageId );
        //var_dump($previousPage);
        if ($pageName == 'product-1') {
            $itemCount = count($previousPage)-1;
        } else {
            $itemCount = count($previousPage)-2;
        }
        //$itemCount = count($previousPage)-2;
        $previousPostId = $previousPage[$itemCount];
        var_dump($previousPostId);
        $previousPost = get_post($previousPostId); 
        $previousPostSlug = $previousPost->post_name;
        echo '<div class="previous-app"><a href="/' . $pageName . '/#' . $previousPostSlug . '">PREVIOUS PROJECT</a></div>';

    }

    foreach ( $reverse_products as $nondesign_product ) {
        
        $youtubelink = rwmb_meta( 'nondesigns_youtube_link', '', $nondesign_product );
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
                
                if ( !empty($youtubelink) ) {
                    echo '<a href="#youtubeembed-' . $slug . '" rel="modal:open" style="display:inline-block;width:100%; height:100%;"> </a></p>';
                    echo '<div id="youtubeembed-' . $slug . '" class="youtubeembed" style="display:none;">';
                    //echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/-7DF2HjIXZc?list=UUEZ8-WtUmesCkAt12LlMHiA" frameborder="0" allowfullscreen></iframe>';
                    echo '<iframe width="560" height="315" src="' . $youtubelink . '" frameborder="0" allowfullscreen></iframe>';
                    echo '<br clear="all" /></div>';
                }
                
                echo '<div class="product-init-nav next">';
                echo '<div class="product-name">' . get_the_title($nondesign_product) . '</div>';
                echo '<div class="init-next-slide">MORE</div>';
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
                //echo $wp_query->current_post;
                //if (($wp_query->current_post) > 1 ) {
                    if ( is_page('product-2') ) {
                        getPreviousPostSlug('product-1');
                    }
                    if ( is_page('product-3') ) {
                        getPreviousPostSlug('product-2');
                        //echo '<div class="previous-app"><a href="/product-2/">PREVIOUS PROJECT</a></div>';
                    }
                    if ( is_page('product-4') ) {
                        getPreviousPostSlug('product-3');
                        //echo '<div class="previous-app"><a href="/product-3/">PREVIOUS PROJECT</a></div>';
                    }
                    if ( is_page('product-5') ) {
                        getPreviousPostSlug('product-4');
                        //echo '<div class="previous-app"><a href="/product-4/">PREVIOUS PROJECT</a></div>';
                    }
                //}
        
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
