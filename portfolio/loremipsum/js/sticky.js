$(document).ready(function()
{
	
	var stickyNavTop = $('#container').offset().top - 1;
	 
	var stickyNav = function()
	{
		var scrollTop = $(window).scrollTop();
			  
		if (scrollTop > stickyNavTop) $('#nav').addClass('sticky'); 
		else $('#nav').removeClass('sticky'); 
	}
 
	stickyNav();
	
	$(window).scroll(function()
	{
		stickyNav();
	});
	
});