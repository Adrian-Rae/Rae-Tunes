<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('favicon.php')?>
		<title>Tune Room ZA : API Testing </title>
		<link rel="stylesheet" href="../CSS/tester.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			function load(){
				
				var submitURL = "http://localhost/api.php";	
				var sendData = document.getElementById("A2").value;
				//*/
				document.getElementById("A").innerHTML = "retrieving...";
				$.ajax({
					url: submitURL,
					data: sendData,
					dataType: "JSON",
					error: function(xhr,thrownError){document.getElementById("A").innerHTML = "Server Error: "+xhr.status+" "+thrownError; },
					method: "POST",
					success: function(result){document.getElementById("A").innerHTML = JSON.stringify(result);},
				});
				//*/
			}
		</script>
	</head>
	<body>
		
		<div id="content">
			<div><p1> Developer API </p1></div>
			<div><p2> Testing and queries <p2></div> 
			<div><img src="../IMG/invisiLogo.png"></div>
			<div><label>API URL: http://<?php echo $GLOBALS["serverLocation"]; ?>api.php</label><br><br>
			<label for="getPOST">Message body:</label><br>
	 		<input type="text" id="A2" name="getPOST" value="key=gnnqihV9YdxQYRTJy3gwwYSPeaNA4fG8&type=info&ranking=*&return[]=*"><br>
			<button  onclick="load()">Submit</button></div>
			<div id="A">The API response object will appear here</div>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>