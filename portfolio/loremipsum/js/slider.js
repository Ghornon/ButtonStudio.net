var nrslida = 1;

var timer1 = 0;
var timer2 = 0;
var timer3 = 0;

var autoplay = 1;

function slider()
{
	clearTimeout(timer3);
	if (autoplay==1)
	{
		$("#slider").fadeIn(400);
	
		if (nrslida>10) nrslida=1;
		if (nrslida<1) nrslida=10;
		
		document.getElementById("slider").innerHTML = "<img src=\"images/slider_" + nrslida + ".png\" />";
		
		timer2 = setTimeout("schowaj()",4600);
		timer1 = setTimeout("slider()",5000);
		
		nrslida++;
	}
	else if (autoplay>1)
	{
		clearTimeout(timer1);
		clearTimeout(timer2);
		
		$("#slider").fadeIn(400);
	
		if (nrslida>10) nrslida=1;
		if (nrslida<1) nrslida=10;
		
		document.getElementById("slider").innerHTML = "<img src=\"images/slider_" + nrslida + ".png\" />";
		
		nrslida++;
		autoplay = 0;
	}
	else
	{
		clearTimeout(timer2);
	}
}
function zmienslide(nowy)
{	
	if (nowy > 0) nrslida = nrslida;
	else nrslida = nrslida - 2;
	
	clearTimeout(timer1);
	clearTimeout(timer2);
	
	autoplay = 2;
	
	schowaj();
	setTimeout("slider()",400);
}
function schowaj()
{
	$("#slider").fadeOut(400);	
}
function play()
{
	clearTimeout(timer1);
	clearTimeout(timer2);
	if (autoplay<1)
	{
		autoplay = 1;
		schowaj()
		timer3 = setTimeout("slider()",400);
		document.getElementById("play").innerHTML = "<i class=\"icon-play\"></i>";
	}
	else
	{
		autoplay = 0;
		document.getElementById("play").innerHTML = "<i class=\"icon-pause\"></i>";
	}
}

window.onload = slider;




























