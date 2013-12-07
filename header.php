<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" >
	</script>
	<script>
		$(document).ready(function (){
			/* $('#mainlogo').animate({left: '420px'}); */
			$("#chara1").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/HBF_S.png');
				/* $('#chara1').css("border", '3px solid yellow'); */
				 $("#slideinfo").html("What is this?: Hojeij Brand Foods Airports (Modified Theme With Partner)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara1").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/HBF_S.png');
				/* $('#chara1').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
			$("#chara2").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Machar_S.png');
				/* $('#chara2').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: Machar (Modified Theme Solo)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara2").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Machar_S.png');
				/* $('#chara2').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
			$("#chara3").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Blueprint_S.png');
				/* $('#chara3').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: BluePrint Combine (Modified Theme Solo)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara3").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Blueprint_S.png');
				/* $('#chara3').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
			$("#chara4").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Drawchange_S.png');
				/* $('#chara4').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: Hojeij Brand Foods Airports (Modified Theme Solo)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara4").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Drawchange_S.png');
				/* $('#chara4').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
			$("#chara5").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/CAttorney_S.png');
				/* $('#chara5').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: Erika Cole Law Offices (Developed Theme Solo)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara5").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/CAttorney_S.png');
				/* $('#chara5').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
			$("#chara6").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Shpigel_S.png');
				/* $('#chara6').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: Allen Shpigel (Modified Theme Solo)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara6").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Shpigel_S.png');
				/* $('#chara6').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
/* 			});
			$("#chara6").click(function(){
				$('#mainlogo').animate({left: '310px'});
			}); */
			$("#chara7").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Lunar_S.png');
				/* $('#chara7').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: Lunar Massive (Modified Theme Solo)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara7").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Lunar_S.png');
				/* $('#chara7').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
/* 			$("#chara7").click(function(){
				$('#mainlogo').animate({left: '670px'});
			}); */
			$("#chara8").mouseenter(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Contact_S.png');
				/* $('#chara8').css("border", '3px solid yellow'); */
				$("#slideinfo").html("What is this?: Contact Me (Via Email Contact Form)");
				
				// Audio('SF2Select.ogg').play()
				// Audio('SF2Select.wav').play()
			});
			$("#chara8").mouseleave(function(){
				$('#sliderpic').attr("src", 'http://madebylanre.com/wp-content/uploads/2013/09/Contact_S.png');
				/* $('#chara8').css("border", '3px none yellow'); */
				 $("#slideinfo").html("Mouseover These Circles to Learn About The Project"); 
			});
			var a = new Audio('SF2CharacterSelect.ogg')
			var b = new Audio('SF2CharacterSelect.mp3')
			a.volume = 0.1;
			b.volume = 0.1;
			// a.play();
			// b.play();
			// $("#musicpower").click(function(){
				// a.pause();
				// b.pause();
			// });
		});
	</script>
	
	
	<title><?php bloginfo('name'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Spicy+Rice' rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/Favi.png" />
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
	<a href="http://www.madebylanre.com" style="display: inline;">
	<img id="mainlogo" src="http://madebylanre.com/wp-content/uploads/2013/05/cropped-MBL_LogoMini.png" alt="Made By Lanre"  style="display: inline; margin-top: 5px;" />
	</a>
<!-- 	<button id="musicpower">
		Turn Off Music
	</button> -->
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'Menu-1' ) ); ?>
	<header>

	</header>
