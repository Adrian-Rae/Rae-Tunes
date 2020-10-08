<?php
		include('config.php');
		$activePage = "trending";
?>

<!DOCTYPE html>
<html>
<head>
	<?php include('favicon.php')?>
	<title name="WebTitle"> Tune Room ZA : Trending </title>
	<link rel="stylesheet" type="text/css" href="../CSS/main_image.css">
	<link rel="stylesheet" type="text/css" href="../CSS/trending.css">

	<!-- PRAC2 -->
	<link rel="stylesheet" type="text/css" href="../CSS/loading_bar.css">
	<script type="text/javascript" src="../JS/loading_bar.js"></script>
	<script type="text/javascript" src="../JS/trending.js"></script>
	<script type="text/javascript" src="../JS/theme.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- JQUERY -->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script>
		function START(){
			useTheme();
			//defaultMode = true;
			LoadScreen();
			setTimeout(stop_loading_bar(),2000);
		}

		function LoadScreen(){
			UpdateSpecs();
			//setTimeout(stop_loading_bar(),2000);

		}

		function keyShortcut(){ // Enter on keypress
			document.addEventListener('keydown', function(event) {
				if (event.keyCode === 13) {
				LoadScreen();
				}
			});
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
		<img class="HomeImage" src="../IMG/TrendingImage.jpg"></img>	
		<h1 class="HomeImageTitle"> What's got the people talking </h1>
		<p class="HomeImageCaption">
			Bringing you the tracks that have started a fire in people's hearts.
		</p>
	</div>

	<table class="BigTable">
		<tr>	
			<th class="MainHeading">
				<h1 class="tableTitle"> Trending Tracks </h1>
			</th>
		</tr>
		
		<!-- Real Fake Data -->
		
		<tr><td>
			<table class="TrendingTable" border=0;> 
			<tr>
				<th rowspan="6" class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/MTJAD.jpg" alt="NO IMAGE AVAILABLE FOR SONG"> </td>
				<th colspan="3"> <h3 class="SongTitle"> The Walker </h3></td>	
			</tr>
			<tr>
				<td colspan="1"> <h3 class="ArtistDetail"> Fitz and the Tantrums </h3></td>
				<td colspan="1"> <h3 class="BillboardDetail"> ranking: 1 </h3></td>
			</tr>
			<tr>
				
				<td colspan="1"><input onchange="sliderRate()" type="range" min=0 max=5 value=0 class="sliderRate" id="S1"></td>
				<td><h3 id="sliderValue"> Unrated </h3></td>
			</tr>
			</table>
		</td></tr>	
	</table>

	<!-- SEARCH BAR -->
	<div class="SearchPanel">
			<h3 class="SearchText"> Refine your search, here: </h3>
			<input class="SearchBar" onkeypress="keyShortcut();" type="text" placeholder="Search...">
			<button class="SearchButton" type="submit" onclick="LoadScreen();" ><i class="fa fa-search"></i></button>
			<div class="Filters">
					 
						<input class="radioBut" type="radio" name="SearchCrit" id="Title" checked><i id="C1" onclick="c1();" class="fa fa-fw fa-toggle-on"></i> Title </br>
						<input class="radioBut" type="radio" name="SearchCrit" id="Ranking"><i id="C2" onclick="c2();" class="fa fa-fw fa-toggle-off"></i> Billboard Ranking </br>
			</div>
			<div style="position:absolute; bottom:20px; width:80%; left: 10px;" >
				<h3 style="font-size:10px"> Search for tracks by the appropriate fields, and your own custom query. Adjust the slider to set you own ranking for a track. </h3>
			</div>
	</div>
	
		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->

</body>
</html>