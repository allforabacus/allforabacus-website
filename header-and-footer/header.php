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
	<script type="text/javascript">
		$(function(){
		// Vertical
		$("#vertical div a").hover(function(){
			$("img", this).stop().animate({top:"-150px"},{queue:false,duration:200});
		}, function() {
			$("img", this).stop().animate({top:"0px"},{queue:false,duration:200});
		});
	});
	</script>
    
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
    
    <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript">
		$(function(){
			// Tabs
			$('#tabs').tabs();
				
				
			//hover states on the static widgets
			$('#dialog_link, ul#icons li').hover(
				function() { $(this).addClass('ui-state-hover'); }, 
				function() { $(this).removeClass('ui-state-hover'); }
			);
				
		});
		$(document).ready(function(){
			var oScrollbar = $('#scrollbar1');
			oScrollbar.tinyscrollbar();
			oScrollbar.tinyscrollbar_update(); 

			$('#scrollbar2').tinyscrollbar();
			$('#scrollbar2').tinyscrollbar_update();	
			$('#scrollbar3').tinyscrollbar();
			$('#scrollbar3').tinyscrollbar_update();	
			$('#scrollbar4').tinyscrollbar();	
			$('#scrollbar4').tinyscrollbar_update();
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