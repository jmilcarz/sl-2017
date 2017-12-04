$(document).ready(function() {
     var navStateOpen = false;
     $("#toggleSiteMobileMenu").click(function() {
          if (navStateOpen == false) {
               $(".sl-container#mobileNav").slideDown(300);
               navStateOpen = true;
          }else {
               $(".sl-container#mobileNav").slideUp(300);
               navStateOpen = false;
          }
     });
     if (screen.width > 980 && navStateOpen == true) {
          $(".sl-container#mobileNav").css("display", "flex");
     }

     var searchOpen = false;
     $("#toggleSearch").click(function() {
          if (searchOpen == false) {
               $(".nav-search-box").slideDown(400);
               searchOpen = true;
          }else {
               $(".nav-search-box").slideUp(300);
               searchOpen = false;
          }
     });

     $("#toggleSearchMobile").click(function() {
          if (searchOpen == false) {
               $(".nav-search-box").slideDown(400);
               searchOpen = true;
          }else {
               $(".nav-search-box").slideUp(300);
               searchOpen = false;
          }
     });

     $("#closeMenu").click(function() {
          $(".nav-search-box").slideUp(300);
     });
     $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
});

$(window).ready(function() {
    $("#brandslider").endlessScroll({ width: '100%', height: '100px', steps: -1, speed: 75, mousestop: false });
});
