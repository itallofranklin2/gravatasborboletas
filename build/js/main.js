


// novo painel responsivo
    jQuery(document).ready(function($) {
      $('#owl-demo').owlCarousel({

            // apenas fade normal
            /*animateOut: 'fadeOut',
            items:1,
            nav:true,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true  */

            animateOut: 'fadeOut',
            items:1,
            nav:true,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,

      })
    });



// carousel logos
    jQuery(document).ready(function($) {
        $('#logo').owlCarousel({
        items:4,
        nav:true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    });



//menu do bootstrap com hover ao inves de click
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
