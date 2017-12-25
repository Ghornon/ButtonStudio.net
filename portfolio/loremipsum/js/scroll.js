$(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});
$(document).ready(function() {
    $(window).scroll( function(){
        $('.hideme').each( function(i){   
            var bottom_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height() - ($(window).height() / 5);
            if( bottom_of_window >= bottom_of_object ){
                $(this).animate({'opacity':'1'},500);     
            }   
        }); 
    });  
});