$(document).ready(function(){

  //add banner height
  var browser_height = $( window ).height();
  $('.main-banner').css('height', browser_height);

  //pop up box hide and close button
  setTimeout(function(){
    $('.popup-box').show();
  }, 2000);

  setTimeout(function(){
    $('.popup-box').hide();
  }, 10000);

  $('.fa-times').click(function(){
    $('.popup-box').css('display','none');
  });

  //scroll down for more functionality
  $('.scroll-down').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
  });

  //go to top icon 
  $('.go-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
});

// full screen menu
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}






