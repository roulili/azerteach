var first_section_height = $('.section-landing').height() - 30; // - 30 car le floating nav est 30px plus haut que le bas de la première section
var inserted = false;

$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 10;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
        //do stuff
        $('nav.navbar').addClass('navbar-white');
    }
    else
    {
    	$('nav.navbar').removeClass('navbar-white');
    }
    if(y_scroll_pos > first_section_height && !inserted)
    {
        var posleft = ( $(window).width() - $('#floating-nav ul').outerWidth() ) / 2;
    	$('#floating-nav ul.floating-nav').insertAfter($('.navbar-landing .container .navbar-header')).css({position:'absolute', left:posleft});
    	inserted = true;
    }

    if( (y_scroll_pos < first_section_height) && inserted)
    {
    	$('.navbar-landing ul.floating-nav').appendTo($('#floating-nav')).css({position:'relative', left:'auto'});
    	inserted = false;
    }
});