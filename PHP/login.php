<?php
	include('config.php');
	$activePage = 'login';
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Tune Room ZA : Login </title>
		<!-- STYLING -->
		<link rel="stylesheet" type="text/css" href="../CSS/login.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- SCRIPTING -->
		<script type="text/javascript" src="../JS/login.js"></script>
		<script type="text/javascript" src="../JS/theme.js"></script>
		
		<!-- JQUERY -->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<!-- Linking to PHP validation -->
		<script type="text/javascript">
			submitURL = <?php echo json_encode($GLOBALS["validateLogin"]); ?>;
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
			<img class="HomeImage" src="../IMG/login.jpg"></img>	
			<h1 class="HomeImageTitle"> Enter the lair </h1>
			<p class="HomeImageCaption">
				login to access your own customisable features... <br>
			</p>
		</div>

		<div class="registrationBox">
			<table class="regTable" border=0>
				<tr><th colspan=2><h1 id="tableHeading"> Login </h1></th></tr>
				<tr><th colspan=2><h3 id="tableSubHeading"> please enter your details </h3></th></tr>
				<tr>
					<td class="collateral" colspan=2>
						<input id= "email" class="SearchBar" type="text" placeholder="Email Address">
					</td>
				</tr>
				<tr>
					<td class="collateral" colspan=2><input id="password" class="SearchBar" type="password" placeholder="Password">
					</td>
				</tr>
				<tr>
					<td><button id="A2" class="loginButton" type="submit" ><h3 id="alertResponse" onclick="login()"> Login </h3></button>
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