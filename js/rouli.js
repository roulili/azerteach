
/*$('.section-photo-etudes').height($('#photo-etudes').height());
var m = 160/1920*$('#section-etudes-background').width();
$('.section-etudes').css({'margin-top': -m});

$('.section-photo-cours').height($('#photo-cours').height());
var m = 180/1920*$('#section-cours-background').width();
$('.section-cours').css({'margin-top': -m});

$('.section-photo-blocus').height($('#photo-blocus').height());
var m = 180/1920*$('#section-blocus-background').width();
$('.section-blocus').css({'margin-top': -m});

$('.section-photo-stages').height($('#photo-stages').height());
var m = 180/1920*$('#section-stages-background').width();
$('.section-stages').css({'margin-top': -m});

$('.section-carte').height($('#section-carte-background').height());

*/

//scroll
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});