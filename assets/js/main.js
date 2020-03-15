// Header Sticky Start
$(document).ready(function() {
  var stickyNavTop = $('nav').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('.navbar').addClass('sticky');
    } else {
      $('.navbar').removeClass('sticky'); 
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});
// Header Sticky End

// hover dropdownmenu Start

jQuery(function($) {
$('.navfirst').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(500).slideUp();
});});

jQuery(function($) {
$('.navsecond').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(500).slideUp();
});});

jQuery(function($) {
$('.navthird').hover(function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
}, function() {
$(this).find('.dropdown-menu').first().stop(true, true).delay(500).slideUp();
});});

// hover dropdownmenu end

// Scroll Top Start
	 if(jQuery('.BBPtop').length){
        jQuery(window).scroll(function(event){
            var x = jQuery(window).scrollTop();
            if(x > 200){
                jQuery(".BBPtop").fadeIn("slow");
            }
            else{
                jQuery(".BBPtop").fadeOut();
            }
        });
        jQuery(".BBPtop").on('click',function(event){
            jQuery("html,body").animate({scrollTop:0},800);
        })
    }
	
// Scroll Top End
// Input Plus & Minus Number JS
        $('.input-counter').each(function() {
            var spinner = jQuery(this),
            input = spinner.find('input[type="text"]'),
            btnUp = spinner.find('.plus-btn'),
            btnDown = spinner.find('.minus-btn'),
            min = input.attr('min'),
            max = input.attr('max');
            
            btnUp.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change"); 
            });
            btnDown.on('click', function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });
		});
// Tabs Start
// Input End
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li a').on('click', function (g) {
			var tab = $(this).closest('.tab'), 
			index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});
			
// Tabs End			