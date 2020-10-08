<?php
		include('config.php');
		$activePage = "newReleases";
?>

<!DOCTYPE html>
<html>
<head>
	<title name="WebTitle"> Tune Room ZA : New Releases</title>
	<link rel="stylesheet" type="text/css" href="../CSS/main_image.css">
	<link rel="stylesheet" type="text/css" href="../CSS/new_releases.css">

	<!-- PRAC2 -->
	<link rel="stylesheet" type="text/css" href="../CSS/loading_bar.css">
	<script type="text/javascript" src="../JS/loading_bar.js"></script>
	<script type="text/javascript" src="../JS/theme.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
		function START(){
			useTheme();
			start_loading_bar();
			setTimeout(stop_loading_bar,500);
		}

	</script>
	<?php include('favicon.php')?>
</head>
<body onload="START();">

	<img class="LoadingBar" id="LB" src="../SVG/RippleLoad.svg" >
		
		<!-- =========================================================== NOTE FOR MARKERS : NAV BAR INCLUDED HERE ======================================== -->
		<?php
			include('header.php');
		?>
		<!-- ============================================================================================================================================= -->

	<div class="MainImageHolder">
		<img class="HomeImage" src="../IMG/NewReleases.jpg"></img>	
		<h1 class="HomeImageTitle"> The new kids on the block </h1>
		<p class="HomeImageCaption">
			Presenting the tracks that are coming in <br>
			hot out of the studio, for your listening.	
		</p>
	</div>

	<table class="newTable">
		<th class="mainTitle" colspan="4">
			<h1>New Releases</h1>
		</th>
		<tr>
			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/egomaniac.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Autocorrect</h2></th>
					<tr><td><h3> KONGOS</h3></td></tr>
					<tr><td><h3> Virgin Records </h3></td></tr>
					<tr><td><h3> Rock; Alternative; Electro </h3></td></tr>
					<tr><td><h3 class="stars"s> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
					</h3></td></tr>
				</table>
			</td>
			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/GMS.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Bikini Weather</h2></th>
					<tr><td><h3> Shortstraw </h3></td></tr>
					<tr><td><h3> Tokoloshe Records </h3></td></tr>
					<tr><td><h3> Alternative </h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>
						<i class="fa fa-fw fa-star"></i>  
					</h3></td></tr>
				</table>
			</td>
			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/Audioslave.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Cochise</h2></th>
					<tr><td><h3> Audioslave </h3></td></tr>
					<tr><td><h3> Atlantic Records </h3></td></tr>
					<tr><td><h3> Alternative; Metal </h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>
						<i class="fa fa-fw fa-star"></i>  
					</h3></td></tr>
				</table>
			</td>

			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/RW.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Love Illumination</h2></th>
					<tr><td><h3> Franz Ferdinand</h3></td></tr>
					<tr><td><h3> Atlantic Records </h3></td></tr>
					<tr><td><h3> Alternative; Rock; Dance </h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>  
					</h3></td></tr>
				</table>
			</td>
			

		</tr>
		<tr>
			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/TIAY.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Every Other Freckle</h2></th>
					<tr><td><h3> Alt-J </h3></td></tr>
					<tr><td><h3> Atlantic Records </h3></td></tr>
					<tr><td><h3> Alternative </h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>
					</h3></td></tr>
				</table>
			</td>
			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/TB.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Fever</h2></th>
					<tr><td><h3> The Black Keys </h3></td></tr>
					<tr><td><h3> Virgin Records </h3></td></tr>
					<tr><td><h3> Rock</h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>  
					</h3></td></tr>
				</table>
			</td>
			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/Splinter.png">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Hit That</h2></th>
					<tr><td><h3> The Offspring </h3></td></tr>
					<tr><td><h3> Atlantic Records </h3></td></tr>
					<tr><td><h3> Alternative; Rock </h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
					</h3></td></tr>
				</table>
			</td>

			<td class="ContentBin">
				<img class="FreshImage" src="../AlbumArt/LAD.jpg">
				<table class="songInfo" colspan="1">
					<th colspan="1"><h2 class="songName">Love is Mystical </h2></th>
					<tr><td><h3> Cold War Kids </h3></td></tr>
					<tr><td><h3> Atlantic Records </h3></td></tr>
					<tr><td><h3> Alternative </h3></td></tr>
					<tr><td><h3 class="stars"> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i> 
						<i class="fa fa-fw fa-star"></i>
					</h3></td></tr>
				</table>
			</td>
			

		</tr>
	</table>
	
		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->	

</body>
</html>