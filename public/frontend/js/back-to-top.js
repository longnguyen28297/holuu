var $backToTop = $(".back-to-top");
$backToTop.hide();

$(window).on('scroll', function() {
  if ($(this).scrollTop() > 100) {
    $backToTop.fadeIn();
  } else {
    $backToTop.fadeOut();
  }
});

$backToTop.on('click', function(e) {
  $("html, body").animate({scrollTop: 0}, 700);
});
//
$(document).ready(function(){
  "use strict";
	
	function scrollMenu(){
	  var menu = document.querySelectorAll('div.menu-fixed');
	  var menu = menu[0];
		  //Truy xuất div menu
		  var status="duoi100";
	  window.addEventListener("scroll",function(){
		  var x = pageYOffset;
		  if(x > 296){
			  if(status == "duoi100")
			  {
				  status="tren100";
				  menu.classList.add('active');
			  }
		  }
		  else{
			  if(status=="tren100"){
			  menu.classList.remove('active');
			  status="duoi100";}
		  }
	  })
	}
	scrollMenu();
});


//img 
$(document).ready(function() {
			

	$('.fancybox').fancybox();

	$(".fancybox-effects-d").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 500,

		closeEffect : 'elastic',
		closeSpeed  : 500,

		closeClick : true,

		helpers : {
			overlay : null
		}
	});

});
