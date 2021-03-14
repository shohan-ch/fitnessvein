
/*-------Start Owl carousel JS  -----*/
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots:true,
        items:1,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        navText:['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
        slideTransition: 'linear',
        autoplay:true,
        autoplayTimeout:7000,
        autoplayHoverPause:true,
        autoplayHoverPause:true,
        responsive:{
          0:{
                items:1,
                nav:false,
                dots:false
            },
            600:{
                items:1
            }
        }
        
      })
    })
 /*---------End Owl carousel JS ------------*/
 
 
 /*------Start Jquery Social share plug in-------*/
$("body").floatingSocialShare({
  buttons: [
    "facebook", "linkedin",  "reddit", 
    "twitter"
  ],
  text: "Share with: ",
  counter: true,
  url: window.location.href0
});


 //----Start Jquery code for scroll to top Button------
$(document).ready(function(){

  $(window).scroll(function(){
      if($(this).scrollTop() > 3000){
          $(".top-button").fadeIn();

      }else{
          $(".top-button").fadeOut(1000);

      }
  })
  $(".top-button").click(function(){

      $('html,body').animate({scrollTop: 0},1000);
  });
})




  



