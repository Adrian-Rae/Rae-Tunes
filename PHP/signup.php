<?php
	include('config.php');
	$activePage = 'signup';
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Tune Room ZA : Registration </title>
		<!-- STYLING -->
		<link rel="stylesheet" type="text/css" href="../CSS/signup.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- SCRIPTING -->
		<script type="text/javascript" src="../JS/signup.js"></script>
		<script type="text/javascript" src="../JS/theme.js"></script>
		
		<!-- JQUERY -->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<!-- Linking to PHP validation -->
		<script type="text/javascript">
			submitURL = <?php echo json_encode($GLOBALS["validateSignup"]); ?>;
		</script>
		<?php include('favicon.php')?>

	</head>
	<body onload="useTheme()">
		<!-- =========================================================== NOTE FOR MARKERS : NAV BAR INCLUDED HERE ======================================== -->
		<?php
			include('header.php');
		?>
		<!-- ============================================================================================================================================= -->

		<div class="MainImageHolder">
			<img class="HomeImage" src="../IMG/signup.jpg"></img>	
			<h1 class="HomeImageTitle"> Welcome to the Jungle </h1>
			<p class="HomeImageCaption">
				Become part of the Tune Room community... <br>
			</p>
		</div>

		<div class="registrationBox">
			<table class="regTable" border=0>
				<tr><th colspan=2><h1 id="tableHeading"> Create a new account </h1></th></tr>
				<tr><th colspan=2><h3 id="tableSubHeading"> Just tell us a bit about yourself </h3></th></tr>
				<tr>
					<td class="collateral">
						<input id="firstName" class="SearchBar" type="text" placeholder="First Name">
					</td>
					<td class="collateral">
						<input id="lastName" class="SearchBar" type="text" placeholder="Last Name">
					</td>
				</tr>
				<tr>
					<td class="collateral" colspan=2>
						<input id= "email" class="SearchBar" type="text" placeholder="Email Address">
					</td>
				</tr>
				<tr>
					<td class="collateral" colspan=2><input id="password" class="SearchBar" type="password" placeholder="Password">
					</td>
				</tr>
				<tr id="toggle">
					<td class="collateral" colspan=2><h3><i id="A1" onclick="agreeToggle();" class="fa fa-fw fa-toggle-off"></i> I agree to the Tune Room <a href="terms.php"> terms of service </a> </h3>
					</td>
				</tr>
				<tr>
					<td><button id="A2" class="deregisterButton" type="submit" ><h3 id="alertResponse">Please agree to our terms and conditions </h3></button>
					</td>
					<td id="E1">
					</td>
				</tr>
				<tr>
					<td colspan=2 id="C1">
					</td>	
				</tr>
			
			</table>
		</div>

		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->


	</body>
</html>