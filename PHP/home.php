<?php
		include('config.php');
		$activePage = "home";
?>



<!DOCTYPE html>
<html>
<head>
	<title name="WebTitle"> Tune Room ZA</title>
	
	<!-- Links to sources -->
	<link rel="stylesheet" type="text/css" href="../CSS/home.css">
	<link rel="stylesheet" type="text/css" href="../CSS/main_image.css">

	<script type="text/javascript" src="../JS/theme.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include('favicon.php')?>

</head>
<body onload="useTheme()">
	
		<!-- =========================================================== NOTE FOR MARKERS : NAV BAR INCLUDED HERE ======================================== -->
		<?php
			include('header.php');
		?>
		<!-- ============================================================================================================================================= -->
	

	<div class="MainImageHolder">
		<img class="HomeImage" src="../IMG/HomeImage.jpg"></img>	
		<h1 class="HomeImageTitle"> The industry's leading artists, in one Room. </h1>
		<p class="HomeImageCaption">
			
			From Beethoven to Beatenburg; whatever your music needs are, <br>
			we've got you covered.
		</p>
	</div>

	<div class="AboutTextBlock">
		<h1 class="MainHeading">
			Welcome to the Tune Room, South Africa's premier music cataloguing website.
		 </h1>
		<div style="text-align:justify;" class="subtext"><p class="AboutText">
			Over here, we aspire to give you access to the music which is taking the world by storm,
			all the while maintaining a careful list of track metadata. The world's music tastes are 
			continuously evolving, and we aim to meet this rapid trend with our several services; 
			such as our dynamic Featured setlists, our Trending analysis model, our New Release Radar
			and our ever-reliable Top Charts. Whatever you are looking for, we aim to help you find it.
			Happy Hunting!
		</p></div>
		<div id="logo1"></div>
		<div id="logo2"></div>
		<div id="logo3"></div>
		
		
	</div>

		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->
	
	

</body>
</html>