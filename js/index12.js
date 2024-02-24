$(document).ready(function () {
  $(window).scroll(function () {
    if (this.scrollY) {
      $(".navbar").addClass("sticky");
    } else {
      $(".navbar").removeClass("sticky");
    }
  });
  $(".menu-btn").click(function () {
    $(".navbar .menu").toggleClass("active");
  });
 
  var typed = new Typed('.type2', {
    strings: ["Frontend Developer.","Backend Developer",],
   typeSpeed:100,
   backspeed:100,
   loop:true,
 });
 
var typed = new Typed('.typing', {
  strings: ["Frontend Developer And Backend Developer", ""],
  typeSpeed: 100,
  backSpeed: 100,
 loop: true,


});
// 

  
});
