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
    <script src="js/jquery-1.8.1.min.js"></script>
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
    
    
<script src="js/jquery.ui.core.js"></script>
<script src="js/jquery.ui.widget.js"></script>
<script src="js/jquery.ui.tabs.js"></script>
<script>
$(function() {
$( "#tabs1" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs1 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );


$( "#tabs2" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs2 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

$( "#tabs3" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs3 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

$( "#tabs4" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs4 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

$( "#tabs5" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs5 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );

$( "#tabs6" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
$( "#tabs6 li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
});
</script>
<?php include'google-analytics-tracking.php'; ?>
<style>


</style>
    	
</head>
<body>
	<header>
    	<div class="wrapper"><!--wrapper is to make the content area width to 960px, and to centralize it-->
    		<div id="logo"><!--logo-->
            	<img src="./images/abacus%20logo.png" width="36" height="33" alt="abacus-logo">
            	<img src="./images/academy.png" width="120" height="27" alt="abacus">
            </div>
        	<?php include'navigation-menu.php'; ?>
        </div>
    </header>