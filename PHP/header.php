<?php
	include('config.php');
	define('CSSPATH', '../CSS/'); define('IMGPATH', '../IMG/'); 
	$cssItem = 'nav_theme.css'; //css item to display
	$imgItem = 'shortLogo.jpg'; //css item to display
	//session_start();

?>    


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="<?php echo (CSSPATH . "$cssItem"); ?>" type="text/css">

<div class="topnav">
		<img class="NavLogo" src="<?php echo (IMGPATH . "$imgItem"); ?>">
		<a id="homePageLink" <?php if($activePage=='home'){echo 'class="active"';} ?> href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  		<a <?php if($activePage=='featured'){echo 'class="active"';} ?> class="loginOnlyTab" style="display:none" href="featured.php"> Featured </a> 
	 	<a <?php if($activePage=='newReleases'){echo 'class="active"';} ?> class="loginOnlyTab" style="display:none" href="new_releases.php"> New Releases </a> 
		<a <?php if($activePage=='trending'){echo 'class="active"';} ?> class="loginOnlyTab" style="display:none" href="trending.php"> Trending </a>
		<a <?php if($activePage=='topRated'){echo 'class="active"';} ?> class="loginOnlyTab" style="display:none" href="top_rated.php"> Top Rated </a>
		<a <?php if($activePage=='calendar'){echo 'class="active"';} ?> class="loginOnlyTab" style="display:none" href="calendar.php"> Calendar </a>
		<a <?php if($activePage=='signup'){echo 'class="active"';}?> style="float: right;" href="signup.php" id="signupTab"> Sign-Up </a>
		<a <?php if($activePage=='login'){echo 'class="active"';}?> style="float: right;" href="login.php" id="loginTab"> Log In </a>
</div>
	

</html>