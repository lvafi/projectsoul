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
      prevArrow: '<button type="button" class="slick-prev"><span class="control-icon fa-chevron-left fa-lg"></span><span class="control-previous">PREV</span></button>',
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
// replace 2 with 2.Personal Information & replace 1 with 1.event details
jQuery(document).ready(function( $ ) {
  $( ".second-button" ).click(function() {
    $( this ).html('2.personal info').addClass('open-btn');
    $(this).prev().html('1').addClass('close-btn');
  }); 
  $( ".first-button" ).click(function() {
    $( this ).html('1.event details').removeClass('close-btn');
    $(this).next().html('2').removeClass('open-btn');
  });
  


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
              //
              
                // var handle = $( "#custom-handle" );
                // $( "#slider" ).slider({
                //     range: "max",
                //       min: 3,
                //       max: 15,
                //       value: 10,
                //   create: function() {
                //     handle.text( $( this ).slider( "value" ) );
                //   },
                //   slide: function( event, ui ) {
                //     handle.text( ui.value );
                //   }
                // });
              
              
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
    // console.log(position);
  }
});
});



// Range Slider
jQuery(document).ready(function($) {
  
  
    // Performance Time
    (function() {
  
      var performanceTime = $( "#performance-time .ui-slider-handle" );
  
      $( "#performance-time" ).slider({
        value: 10,
        min: 3,
        max: 15,
        create: function() {
          performanceTime.text( $( this ).slider( "value" ) + "\u00A0mins" );
        },
        slide: function( event, ui ) {
          performanceTime.text( ui.value + "\u00A0mins" );
          var time = performanceTime.html();
          $('input[name="time"').html(time);
        }
      });
  
      var time = performanceTime.html();
      $('input[name="time"').html(time);
    
    })(); // end Performance Time
    
  
  // Performance Budget
  (function() {
  
    var performanceBudget = $( "#performance-budget .ui-slider-handle" );
  
      $( "#performance-budget" ).slider({
        value: 1000,
        min: 0,
        max: 10000,
        step: 100,
        create: function() {
          performanceBudget.text( "$" + $( this ).slider( "value" ) );
        },
        slide: function( event, ui ) {
          performanceBudget.text( "$" + ui.value );
          var budget = performanceBudget.html();
          $('input[name="budget"').html(budget);
        }
      });
  
      var budget = performanceBudget.html();
      $('input[name="budget"').html(budget);
  
  })(); // end Performance Budget
    // pop up window
    $('#open').on('click',function(e){
      e.preventDefault();
      $('#contact-form').addClass('state-active');
    })  
    $('.close-contact-form').on('click',function(e){
      e.preventDefault();
      $('#contact-form').removeClass('state-active');
    })
  
  }); // end document ready
  
