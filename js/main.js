$(function(){
  $('.hamburger').on('click', function() {
     if($('.menu').hasClass('open')){
         $('.menu').removeClass('open');
     } else {
         $('.menu').addClass('open');
     }
  })
});

$(function(){
    $(window).on('scroll', function(){
        if (window.pageYOffset >= 140){
          $('.nav_menu').addClass('slide');
        } else {
          $('.nav_menu').removeClass('slide');
        }
    })
});


$(function(){
  $('.menu').on('click', function() {
    alert("1111");
//    if($('.menu').hasClass('open')){
      
      $('.menu').removeClass('open');
//  }
})});


$(function() { 
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
}); //Smooth Scroll function


// ===== Scroll to Top ==== 
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {
    
    $('#return-to-top').fadeIn(200);
  } else {
    $('#return-to-top').fadeOut(200);
  }
});