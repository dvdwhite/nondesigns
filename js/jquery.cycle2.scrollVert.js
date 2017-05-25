/*! scrollVert transition plugin for Cycle2;  version: 20140128 */
(function($) {
"use strict";

$.fn.cycle.transitions.scrollVert = {
    before: function( opts, curr, next, fwd ) {
        opts.API.stackSlides( curr, next, fwd );
        var height = opts.container.css('overflow','hidden').height();
        opts.cssBefore = { top: fwd ? -height : height, left: 0, opacity: 1, visibility: 'visible', display: 'block', position: 'fixed' };
        opts.animIn = { top: 0, opacity: 1, position: 'fixed' };
        opts.animOut = { top: fwd ? height : -height, opacity: 0, position: 'fixed' };
        console.log(height);
    }
};

})(jQuery);


/*! scrollVert transition plugin for Cycle2; version: 20140128 */
//(function($) {
//"use strict";
//$.fn.cycle.transitions.scrollVert = {
//before: function( opts, curr, next, fwd ) {
//opts.API.stackSlides( opts, curr, next, fwd );
//var height = opts.container.css('overflow','hidden').height();
//opts.cssBefore = { top: fwd ? height : -height, left: 0, opacity: 1, display: 'block', visibility: 'visible' };
//opts.animIn = { top: 0 };
//opts.animOut = { top: fwd ? -height : height };
//}
//};
//})(jQuery);
