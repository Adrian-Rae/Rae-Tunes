<?php
		include('config.php');
		$activePage = "featured";
?>

<!DOCTYPE html>
<html>
<head>
	<!-- PRAC 1 -->
	<title name="WebTitle"> Tune Room ZA : Featured</title>
	<link rel="stylesheet" type="text/css" href="../CSS/featured.css">
	<link rel="stylesheet" type="text/css" href="../CSS/main_image.css">
	
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
<body style="background-color:white;" onload="START();">

	
	
	<img class="LoadingBar" id="LB" src="../SVG/RippleLoad.svg" >	

		<!-- =========================================================== NOTE FOR MARKERS : NAV BAR INCLUDED HERE ======================================== -->
		<?php
			include('header.php');
		?>
		<!-- ============================================================================================================================================= -->

	<div class="MainImageHolder">
		<img class="HomeImage" src="../IMG/FeaturedImage.jpg">	
		<h1 class="HomeImageTitle"> In the spotlight </h1>
		<p class="HomeImageCaption">
			We've kept up a list of all the juicy tracks<br>
			we think you might enjoy.	
		</p>
	</div>

	<table class="featuredTable">
		<tr>	
			<th class="MainHeading" colspan="6">
				<h1 class="tableTitle"> Your featured selection </h1>
			</th>
		</tr>
		<tr>
			<th colspan="2"><h3> Title </h3></th>
			<th><h3> Artist </h3></th>
			<th><h3> Release Date </h3></th>
			<th><h3> Genre </h3></th>
			<th><h3> Duration </h3></th>
		</tr>
		
		<!-- Real Fake Data -->
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Take It From Me </h3></td>
			<td> <h3 class="TableText"> KONGOS </h3></td>
			<td> <h3 class="TableText"> May 3rd 2016 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative </h3></td>
			<td> <h3 class="TableText"> 3:57 </h3></td>
		</tr>	
		<tr> 
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/egomaniac.jpg"> </td>
			<td colspan="5"> <iframe class="YouTubeVideo" src="https://www.youtube.com/embed/-wpxXODaSdo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </td>
		</tr>
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Hollow Moon (Bad Wolf) </h3></td>
			<td> <h3 class="TableText"> AWOLNATION </h3></td>
			<td> <h3 class="TableText"> September 4th 2017 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative; Electronic; Dance </h3></td>
			<td> <h3 class="TableText"> 4:20 </h3></td>
		</tr>	
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/run.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/i2PsXT88UeU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>

		<tr>
			<td colspan="2"> <h3 class="TableText"> Madness </h3></td>
			<td> <h3 class="TableText"> Muse </h3></td>
			<td> <h3 class="TableText"> July 2nd 2012 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative </h3></td>
			<td> <h3 class="TableText"> 5:12 </h3></td>
		</tr>
		<tr> 
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/2nd_law.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/Ek0SgwWmF9w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>	
		

		<tr>
			<td colspan="2"> <h3 class="TableText"> Handclap </h3></td>
			<td> <h3 class="TableText"> Fitz and the Tantrums</h3></td>
			<td> <h3 class="TableText"> September 27th 2017 </h3></td>
			<td> <h3 class="TableText"> Pop; Dance </h3></td>
			<td> <h3 class="TableText"> 3:45 </h3></td>
		</tr>
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/handclap.jpg"> </td>
			<td colspan="5"> <iframe class="YouTubeVideo" src="https://www.youtube.com/embed/Y2V6yjjPbX0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </td>
		</tr>
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Run </h3></td>
			<td> <h3 class="TableText"> Foo Fighters </h3></td>
			<td> <h3 class="TableText"> May 23rd 2017 </h3></td>
			<td> <h3 class="TableText"> Rock </h3></td>
			<td> <h3 class="TableText"> 3:52 </h3></td>
		</tr>
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/frun.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/ifwc5xgI3QM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Stop Stop </h3></td>
			<td> <h3 class="TableText"> The Black Keys </h3></td>
			<td> <h3 class="TableText"> August 4th 2011 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative; Garage;  </h3></td>
			<td> <h3 class="TableText"> 3:32 </h3></td>
		</tr>
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/el_camino.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" height="315" src="https://www.youtube.com/embed/RuNGWSPeXRU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Figure it Out </h3></td>
			<td> <h3 class="TableText"> Royal Blood </h3></td>
			<td> <h3 class="TableText"> July 2nd 2017 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative; Heavy Metal </h3></td>
			<td> <h3 class="TableText"> 3:23 </h3></td>
		</tr>	
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/royal_blood.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/jhgVu2lsi_k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>

		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Beauty Like a Tightened Bow </h3></td>
			<td> <h3 class="TableText"> Beatenberg </h3></td>
			<td> <h3 class="TableText"> June 5th 2013 </h3></td>
			<td> <h3 class="TableText"> Alternative; Indie </h3></td>
			<td> <h3 class="TableText"> 4:45 </h3></td>
		</tr>
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/hanging_gardens.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/WTRSWJYJb0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>
		
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Castle of Glass </h3></td>
			<td> <h3 class="TableText"> Linkin Park </h3></td>
			<td> <h3 class="TableText"> May 23rd 2012 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative; Heavy Metal </h3></td>
			<td> <h3 class="TableText"> 5:02 </h3></td>
		</tr>	
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/living_things.jpg"> </td>
			<td colspan="5"><iframe  class="YouTubeVideo" src="https://www.youtube.com/embed/ScNNfyq3d_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>

		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Ghosts </h3></td>
			<td> <h3 class="TableText"> Big Wreck </h3></td>
			<td> <h3 class="TableText"> January 14th 2017 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative; Blues </h3></td>
			<td> <h3 class="TableText"> 5:34 </h3></td>
		</tr>	
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/ghosts.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/Pghhg40gTs4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>
		
		<tr>
			<td colspan="2"> <h3 class="TableText"> Asking for It </h3></td>
			<td> <h3 class="TableText"> Shinedown </h3></td>
			<td> <h3 class="TableText"> May 12th 2016 </h3></td>
			<td> <h3 class="TableText"> Rock; Alternative; Grunge </h3></td>
			<td> <h3 class="TableText"> 4:32 </h3></td>
		</tr>	
		<tr>
			<td class="AlbumHolder"> <img class="ThumbNail" src="../AlbumArt/threat_to_survival.jpg"> </td>
			<td colspan="5"><iframe class="YouTubeVideo" src="https://www.youtube.com/embed/X8eQDSHaN5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
		</tr>
	</table>
	
		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->

</body>
</html>