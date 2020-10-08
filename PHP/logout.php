<?php
	include("config.php");
	$activePage="logout";

?>

<!DOCTYPE html>
<html>
	<?php include("favicon.php"); ?>
	<head>
		<title> Tune Room ZA : Logging out </title>
		<script>
			function logout(){
				document.cookie="TuneRoomUser=null; expires = Thu, 01 Jan 1970 00:00:00 GMT";
				document.cookie="TuneRoomKey=null; expires = Thu, 01 Jan 1970 00:00:00 GMT";
				document.cookie="TuneRoomTheme=null; expires = Thu, 01 Jan 1970 00:00:00 GMT";
				
				//alert(document.cookie);
				document.getElementById("homePageLink").click();
			}
		</script>
	</head>
	<body onload="logout()">
		<?php include("header.php"); ?>
		<?php include("footer.php"); ?>
	</body>
</html>