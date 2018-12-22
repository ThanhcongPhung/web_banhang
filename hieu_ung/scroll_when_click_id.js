// $(document).ready(function(){
// $('.go-to-register').click(function () {
//        $('html, body').animate({scrollTop: $('.register_form').offset().top}, 1000); 
//     });
// }

$("a[href*='#']:not([href='#])").click(function() {
  let target = $(this).attr("href");
  $('html,body').stop().animate({
    scrollTop: $(target).offset().top
  }, 1000);
  event.preventDefault();
});