<?php
		include('config.php');
		$activePage = "topRated";
?>


<!DOCTYPE html>
<html>
<head>
	<?php include('favicon.php')?>
	<title name="WebTitle"> Tune Room ZA : Top Rated</title>
	<link rel="stylesheet" type="text/css" href="../CSS/top_rated.css">
	<link rel="stylesheet" type="text/css" href="../CSS/main_image.css">

	<!-- PRAC2 -->
	<link rel="stylesheet" type="text/css" href="../CSS/loading_bar.css">
	<script type="text/javascript" src="../JS/loading_bar.js"></script>
	<script type="text/javascript" src="../JS/top_rated.js"></script>
	<script type="text/javascript" src="../JS/theme.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!--START -->
	<script>
		function START(){
			useTheme();
			start_loading_bar();
			loadSongs();
			setTimeout(stop_loading_bar,2000);
		}
	</script>
	

</head>
<body style="background-color:white;" onload="START();">
	
	<img class="LoadingBar" id="LB" src="../SVG/RippleLoad.svg" >
	
		<!-- =========================================================== NOTE FOR MARKERS : NAV BAR INCLUDED HERE ======================================== -->
		<?php
			include('header.php');
		?>
		<!-- ============================================================================================================================================= -->
	
	<div class="MainImageHolder">
			<img class="HomeImage" src="../IMG/TopImage.jpg"></img>	
			<h1 class="HomeImageTitle"> The Best of the Best </h1>
			<p class="HomeImageCaption">
				The tracks that have taken the world's heart. <br>
			</p>
	</div>
	
	<table class="BigTable">
		<tr>	
			<th class="MainHeading">
				<h1 class="tableTitle"> The Top of The Charts </h1>
			</th>
		</tr>
		
		<!-- Real Fake Data -->
		
		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---1--- </h3><h3 class="SongTitle"></h3></td>	
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---2--- </h3><h3 class="SongTitle"></h3></td>	
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>
		
		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"><h3 class="spot"> ---3--- </h3> <h3 class="SongTitle"></h3></td>	
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"><h3 class="spot"> ---4--- </h3> <h3 class="SongTitle"></h3></td>	
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---5--- </h3><h3 class="SongTitle"></h3></td>
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>
		
		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---6--- </h3><h3 class="SongTitle"></h3></td>
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>	

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---7--- </h3><h3 class="SongTitle"></h3></td>
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>	

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---8--- </h3><h3 class="SongTitle"></h3></td>
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>	

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---9--- </h3><h3 class="SongTitle"></h3></td>
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>	

		<tr><td>
			<table class="TopTable"> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../IMG/load.jpg"> </td>
				<th colspan="2"> <h3 class="spot"> ---10--- </h3><h3 class="SongTitle"></h3></td>
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"></h3></td>
				<td colspan="1"> <h3 class="ReleaseDetail"></h3></td>
				</tr>
			</table>
		</td></tr>	
	</table>

		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->	
	

</body>
</html>