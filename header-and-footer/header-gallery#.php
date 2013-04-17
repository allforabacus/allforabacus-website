<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>ABACUS - A Bona fide Association for Computer Users and Students</title>
	<meta name="description" content="ABACUS or A Bona fide Association for Computer Users and Students is a Community of Computer Science students of NSS College of Engineering, Palakkad" />
	<meta name="keywords" content="abacus, NSS College of Engineering, Palakkad, computer science, student, community, association, student activities, A Bona fide Association for Computer Users and Students" />
    
    
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/jquery-style.css" />
    <link rel="icon" href="../images/favicon.png" />
    <script src="../js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="../js/hoverline.js"></script>
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
    
 <script type="text/javascript" src="../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			*   Examples - images
			*/

			$("a#example1").fancybox();

			$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

			$("a#example3").fancybox({
				'transitionIn'	: 'none',
				'transitionOut'	: 'none'	
			});

			$("a#example4").fancybox({
				'opacity'		: true,
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'none'
			});

			$("a#example5").fancybox();

			$("a#example6").fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
			});

			$("a#example7").fancybox({
				'titlePosition'	: 'inside'
			});

			$("a#example8").fancybox({
				'titlePosition'	: 'over'
			});

			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			/*
			*   Examples - various
			*/

			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});

			$("#various2").fancybox();

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});

			$("#various4").fancybox({
				'padding'			: 0,
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
		



	</script>
    <?php include'google-analytics-tracking.php'; ?>
    	
</head>
<body>
	<header>
    	<div class="wrapper"><!--wrapper is to make the content area width to 960px, and to centralize it-->
    		<div id="logo"><!--logo-->
            	<img src="../images/abacus%20logo.png" width="36" height="33" alt="abacus-logo">
            	<img src="../images/academy.png" width="120" height="27" alt="abacus">
            </div>
        	<?php include'navigation-menu#.php'; ?>
        </div>
    </header>