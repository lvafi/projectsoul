// jQuery('.slider').slick({
  
// });

var controls = "#yellow-slider-controls";








function get_window_size (){
  var window_width = jQuery(window).width();
  return window_width;
}
function slider_init () {
  var size = get_window_size();
  console.log(size);
  
  if (size < 1025 ) {
    jQuery('.sponsor-class').slick({
      dots: true,
      arrows: false,
      slidesToScroll: 1
    });


    jQuery('.our-style-slick-slider').slick({
      arrows: false,
      dots: true 
    });
    jQuery('.yellow-slider').slick({
      appendArrows: controls,
      prevArrow: '<button type="button" class="slick-prev"><span class="control-icon fa-chevron-left fa-lg"></span><span class="control-previous">PREV</span></button>',
      nextArrow: '<button type="button" class="slick-next"><span class="control-next">NEXT</span><span class="control-icon fa-chevron-right fa-lg"></span></button>'
    });

  

  } else {
    //sponsor slides for desktop
    jQuery('.sponsor-class').slick({
      dots: false,
      slidesToShow: 10,
      rows: 4,
      slidesPerRow: 3,
      arrows: false
    });

    jQuery('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.yellow-slider'
    });
    jQuery('.yellow-slider').slick({
      asNavFor: '.slider-for',
      focusOnSelect: true,
      appendArrows: controls,
      prevArrow: '<button type="button" class="slick-prev"><span class="control-icon fa-chevron-left fa-lg"></span><span class="control-previous">PRVE</span></button>',
      nextArrow: '<button type="button" class="slick-next"><span class="control-next">NEXT</span><span class="control-icon fa-chevron-right fa-lg"></span></button>'
    });

    //swiper
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
          rotate: 0,
          stretch: -150,
          depth: 500,
          modifier: 1,
          slideShadows : false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    }); // swiper

    
  }//endif
}//slider_init
slider_init();
/*cover flow*/





// Form show up page 1 and page 2 by click

jQuery('.controller > button').on('click', function(e){
console.log(this);
console.log(jQuery(this).index());

console.log(jQuery('.view > div').eq(jQuery(this).index()));

jQuery('.view > div').removeClass('visible');
jQuery('.view > div').eq(jQuery(this).index()).addClass('visible');

});

// Get & Use Values Function
jQuery(document).ready(function( $ ) {
     function apply_values() {
  
                  // Get Values
                  var charity = $('.charity .selected').html(),
                      dancers = $('.dancers .selected').html();

                  // Use Values
                  console.log(charity);
                  console.log(dancers);
                  $('input[name="charity"]').html(charity);

              }

              // Get Default Values on Page Load
              apply_values();

              // Selection Toggle
              $('.view button').click(function() {
                  var option = $(this).parent().attr('class');
                  $('.' + option + ' button').removeClass('selected');
                  $(this).addClass('selected');
                  apply_values();
              });
});





//full screen video
jQuery(document).ready(function( $ ) {
  function videoSize() {
    var $windowHeight = $(window).height();
    var $videoHeight = $(".video").outerHeight();
    var $scale = $windowHeight / $videoHeight;
    
    if ($videoHeight <= $windowHeight) {
      $(".video").css({
        "-webkit-transform" : "scale("+$scale+") translateY(-50%)",
        "transform" : "scale("+$scale+") translateY(-50%)"
      });
    };
  }
  
  $(window).on('load resize',function(){
    videoSize();
  });
  


});



jQuery(document).ready(function( $ ) {
var rellax = new Rellax('.rellax', {
  callback: function(position) {
    // callback every position change
    console.log(position);
  }
});
});
