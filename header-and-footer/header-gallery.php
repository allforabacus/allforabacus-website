<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABACUS - A Bona fide Association for Computer Users and Students</title>
	<meta name="description" content="ABACUS or A Bona fide Association for Computer Users and Students is a Community of Computer Science students of NSS College of Engineering, Palakkad" />
	<meta name="keywords" content="abacus, NSS College of Engineering, Palakkad, computer science, student, community, association, student activities, A Bona fide Association for Computer Users and Students" />
    
    
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/jquery-style.css" />
    <link rel="icon" href="images/favicon.png" />
    
    
    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    
	<script type="text/javascript" src="js/hoverline.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.navbar').makeNavbar();
			/*$('.navbar').hoverline({
		  		'color'       			:		'#CCC',
		  		'height'				:		'2px',
		  		'start'					:		'2',
		  		'speed'					:		'500',
		  		'border'				:		'none',
		  		'borderwidthside'		:		'1px',
		  		'borderwidthtop'		:		'1px',
		  		'borderstyle'			:		'solid'
			});*/
			$('#nav1').hoverline();
			$('#nav2').hoverline({'start' : '3'});
			$('#nav3').hoverline({'color' : 'orange'});
			$('#nav4').hoverline({'speed' : '1000'});
			$('#nav5').hoverline({'height': '5px'});
			$('#nav6').hoverline({
	  			'border'			:	'red',
	  			'borderwidthside'	:	'1px',
	  			'borderwidthtop'	:	'1px',
	  			'borderstyle'		:	'solid'
			});
		});
	</script>   	
    <script src="js/jquery.easing.1.3.js"></script>
<script>

$(document).ready(function() {

	//Custom settings
	var style_in = 'easeOutBounce';
	var style_out = 'jswing';
	var speed_in = 1000;
	var speed_out = 300;	

	//Calculation for corners
	var neg = Math.round($('.qitem').width() / 2) * (-1);	
	var pos = neg * (-1);	
	var out = pos * 2;
	
	$('.qitem').each(function () {
	
		url = $(this).find('a').attr('href');
		img = $(this).find('img').attr('src');
		alt = $(this).find('img').attr('img');
		
		$('img', this).remove();
		$(this).append('<div class="topLeft"></div><div class="topRight"></div><div class="bottomLeft"></div><div class="bottomRight"></div>');
		$(this).children('div').css('background-image','url('+ img + ')');

		$(this).find('div.topLeft').css({top:0, left:0, width:pos , height:pos});	
		$(this).find('div.topRight').css({top:0, left:pos, width:pos , height:pos});	
		$(this).find('div.bottomLeft').css({bottom:0, left:0, width:pos , height:pos});	
		$(this).find('div.bottomRight').css({bottom:0, left:pos, width:pos , height:pos});	

	}).hover(function () {
	
		$(this).find('div.topLeft').stop(false, true).animate({top:neg, left:neg}, {duration:speed_out, easing:style_out});	
		$(this).find('div.topRight').stop(false, true).animate({top:neg, left:out}, {duration:speed_out, easing:style_out});	
		$(this).find('div.bottomLeft').stop(false, true).animate({bottom:neg, left:neg}, {duration:speed_out, easing:style_out});	
		$(this).find('div.bottomRight').stop(false, true).animate({bottom:neg, left:out}, {duration:speed_out, easing:style_out});	
				
	},
	
	function () {

		$(this).find('div.topLeft').stop(false, true).animate({top:0, left:0}, {duration:speed_in, easing:style_in});	
		$(this).find('div.topRight').stop(false, true).animate({top:0, left:pos}, {duration:speed_in, easing:style_in});	
		$(this).find('div.bottomLeft').stop(false, true).animate({bottom:0, left:0}, {duration:speed_in, easing:style_in});	
		$(this).find('div.bottomRight').stop(false, true).animate({bottom:0, left:pos}, {duration:speed_in, easing:style_in});	
	
	}).click (function () {
		window.location = $(this).find('a').attr('href');	
	});
	
	

});

</script>
<?php include'google-analytics-tracking.php'; ?>
</head>
<body>
	<header>
    	<div class="wrapper"><!--wrapper is to make the content area width to 960px, and to centralize it-->
    		<div id="logo"><!--logo-->
            	<img src="images/abacus%20logo.png" width="36" height="33" alt="abacus-logo">
            	<img src="images/academy.png" width="120" height="27" alt="abacus">
            </div>
        	<?php include'navigation-menu.php'; ?>
        </div>
    </header>