<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nondesigns
 */

?>

    <div id="about" data-cycle-hash="about" class="about">
        <div class="cycle-slideshow products inner-slideshow"
             data-cycle-fx="scrollHorz" data-cycle-swipe=true
            data-cycle-slides="> div.slide"
            data-cycle-prev="#about .prev"
            data-cycle-next="#about .next"
            data-cycle-pager="#about .pager"
            data-cycle-pager-template="<a href='#' style='inline-block; width:30px; height:30px;'>&nbsp;&nbsp;</a>"
        >                

            <div class="one slide">

                <div class="about-content about-mobile">

                    <?php 
                        $page = get_page_by_path( 'about' );
                        $args;
                        echo rwmb_meta( 'nondesigns_about_mobile', $args, $page->ID ); 
                    ?>                    

                </div>

                <div class="about-content about-mobile-exclude">
                    
                    <?php 
                        $page = get_page_by_path( 'about' );
                        $args;
                        echo rwmb_meta( 'nondesigns_about_desktop_left', $args, $page->ID ); 
                    ?>

                </div>
                <div class="about-content about-mobile-exclude">

                    <?php 
                        $page = get_page_by_path( 'about' );
                        $args;
                        echo rwmb_meta( 'nondesigns_about_desktop_right', $args, $page->ID ); 
                    ?>

                </div>
            </div>
        </div>  
    </div>  