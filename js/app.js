$(document).foundation();

$(document).ready(function() {

	/*=======================================
	=            Widget Flotante            =
	=======================================*/
	
	var catcher = $('#catcher');
	var sticky = $('#suscription-box');

	$(window).scroll(function() {

	    if(isScrolledTo(sticky)) 
	    {
	        sticky.addClass('widget-fixed');
	        
	    } 

	    var stopHeight = catcher.offset().top + catcher.height();

	    if ( stopHeight > sticky.offset().top) 
	    {
	    	sticky.removeClass('widget-fixed');
	    }
	});
	
	/*-----  End of Widget Flotante  ------*/
	
	
	
});

function isScrolledTo(elem) {
    var docViewTop = $(window).scrollTop(); //num of pixels hidden above current screen
    var docViewBottom = docViewTop + $(window).height();
 
    var elemTop = $(elem).offset().top; //num of pixels above the elem
    var elemBottom = elemTop + $(elem).height();
 
    return ((elemTop <= docViewTop));
}