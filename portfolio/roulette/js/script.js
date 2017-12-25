var numorder = [0, 32, 15, 19, 4, 21, 2, 25, 17, 34, 6, 27, 13, 36, 11, 30, 8, 23, 10, 5, 24, 16, 33, 1, 20, 14, 31, 9, 22, 18, 29, 7, 28, 12, 35, 3, 26];
var timeRu;

//Create roulette

function rouletteWrite()
{
	for (var i = 0; i < 37; i++)
	{
		var OldObj = $('#roulette').html();
		var rotate = i * 9.73;
		$('#roulette').html(OldObj + '<li style="transform: rotate(' + rotate + 'deg);">' + numorder[i] + '</li>');
		
	}
}

//Move to number

function rouletteStart(num)
{	
	
	if (num > 36 || num < 0)
	{
		num = 0;
	}
	var deg;
	
	for (var i = 0; numorder[i] != num; i++)
	{
		deg = -9.73 * (i + 1) + 3603;
	}
	
	if (num == 0)
	{
		deg = 3603;
	}
	
	$('#style').html('@-webkit-keyframes number{from{-webkit-transform: rotate(0);transform: rotate(0);}to{-webkit-transform: rotate(' + deg + 'deg);transform: rotate(' + deg + 'deg);}}');
	
	$('#roulette').removeAttr('class').addClass('number');
	$('#ball').removeAttr('class').addClass('ball');
	
	setTimeout(function(){
		$('#roulette').css("transform","rotate(" + deg + "deg)");
		$('#roulette').removeAttr('class');
	}, 5000);
	
	setTimeout(function(){
		$('#ball').css("transform","rotate(3deg)");
		$('#ball').removeAttr('class');
	}, 6000);
}

//setTimeout(function(){
	
	//RouletteTimer(9);
	
	//$.ajax({
	//  url: "test.html",
	//  context: document.body
	//}).done(function() {
	//  $( this ).addClass( "done" );
	//});
	
	//rouletteStart();	
	
//}, 60000);

//$(document).ready(RouletteTimer);