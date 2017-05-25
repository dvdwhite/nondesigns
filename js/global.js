$(function() {
    
    $('.menu-icon').click(function() {
        $('.menu-icon').hide();
        $('.menu-popout').fadeIn('slow');
    });
    $('.menu-close').click(function() {
        $('.menu-popout').fadeOut('fast');
        $('.menu-icon').fadeIn('slow');
    }); 
    $('.menu-list-container li a').click(function() {
        $('.menu-popout').fadeOut('fast');
        $('.menu-icon').fadeIn('slow');
        $('.next-slide').fadeOut('fast');
        $('.prev-slide').fadeOut('fast');
    });    

    
    
    $('.menu-popout ul li:first-child a').contents().unwrap();
    
    
    
    
/*    
    var productNameWidth = $('.product-name').css('width');
    var adjustNextIcon = productNameWidth + 'px';
    $('.init-next-slide').css('bottom', productNameWidth);
    $('.init-prev-slide').css('bottom', productNameWidth);
    
    $('.product-init-nav').hover(function() {
        $('.init-next-slide').css('text-indent','4px'); 
    }, function() { 
        $('.init-next-slide').css('text-indent','-9999px'); 
    });
    
    $('.product-detail-nav').hover(function() {
        $('.init-prev-slide').css('text-indent','4px'); 
    }, function() { 
        $('.init-prev-slide').css('text-indent','-9999px'); 
    });

*/   
    
    // Trigger a function after each horizontal scroll.
    $( '.inner-slideshow' ).on( 'cycle-after', function( event, opts ) {
        // Set the slide count and get the current slide.  
        var currSlide;
        var slideCount;
        slideCount = ($(this).data('cycle.opts').slideCount) - 1;
        currSlide = ($(this).data('cycle.opts').currSlide);
        //console.log(currSlide);
        //console.log(slideCount);
        
        // Display left/right navigation arrows based on which slide the user is on.
        if (currSlide > 0) {
            $('.next-slide').fadeIn();
        }
        if (currSlide > 1) {
            $('.prev-slide').fadeIn();
        }
        if (currSlide == slideCount) {
            //$('.next-slide').fadeOut();
        }
        if (currSlide < 2) {
            $('.prev-slide').fadeOut();
        }
        if (currSlide == 0) {
            $('.next-slide').fadeOut();
        }
        
        //$('iframe').attr('src','0');
        
        
    }); 
    
    
    
        // Trigger a function after each vertical scroll.
    $( '.vertical-container' ).on( 'cycle-after', function( event, opts ) {
        // Set the slide count and get the current slide.  
        var currSlideVert;
        var slideCountVert;
        slideCountVert = ($(this).data('cycle.opts').slideCount) - 1;
        currSlideVert = ($(this).data('cycle.opts').currSlide);
        console.log(currSlideVert);
        console.log(slideCountVert);
        
        // Display up/down arrows based on the project number
        if (currSlideVert == 0) {
            $('.next-project').show();
            $('.previous-project').hide();
        }
        if (currSlideVert > 0) {
            $('.previous-project').show();
            $('.next-project').show();
        }        
        if (currSlideVert == 1) {
            $('.next-project').hide();
        }
        
    }); 
    
    
    
    
    $( '.inner-slideshow').on( 'cycle-paused', function( event, opts ) {
        var productNameWidth = $(this).find('.product-name').css('width');
        var adjustNextIcon = productNameWidth + 'px';
        console.log(productNameWidth);                        
        $(this).find('.init-next-slide').css('bottom', productNameWidth);
        $(this).find('.init-prev-slide').css('bottom', productNameWidth);
    });
    
    $('.enter').click(function() {
        window.location.href = '/product-1/#about';
    });
    
    /*$('.enter-about').click(function() {
        window.location.href = 'product.html';
    });*/    

/*    
    var slideCount;
    var currSlide;
    $('body').click(function() {
        slideCount = ($('.cycle-slideshow').data('cycle.opts').slideCount) - 1;
        currSlide = $('.cycle-slideshow').data('cycle.opts').currSlide;
        console.log(currSlide);
        console.log(slideCount);
        if (currSlide > 0) {
            $('.next-slide').fadeIn();
        }
        if (currSlide > 1) {
            $('.prev-slide').fadeIn();
        }
        if (currSlide == slideCount) {
            $('.next-slide').fadeOut();
        }
        if (currSlide < 2) {
            $('.prev-slide').fadeOut();
        }
        if (currSlide == 0) {
            $('.next-slide').fadeOut();
        }
    });
    
/*    
    
    $( '.cycle-slideshow' ).on( 'cycle-before', function( event, opts ) {
        $('.next-slide-preview').fadeOut('fast');
    });
    
    $( '.cycle-slideshow' ).on( 'cycle-after', function( event, opts ) {
        $('.next-slide-preview').fadeIn('fast');
    });    
*/
    
    
});