<?php
	include('config.php');
	$cssItem = 'footer.css'; //css item to display

?>    


<!DOCTYPE html>
<html>
<script>
	
	function setTheme(){

		var form = document.documentElement;
		var themesArray = <?php echo json_encode($GLOBALS["themes"]);?>;
		var themeCount = <?php echo count($GLOBALS["themes"]);?>;
		var CurrentlyUsing = (getFromCookie("TuneRoomTheme")==null)?themesArray[0]:JSON.parse(getFromCookie("TuneRoomTheme"));
		currentTheme = 0;
		for(var i=0; i<themeCount; i++){if(JSON.stringify(themesArray[i])== JSON.stringify(CurrentlyUsing)) currentTheme=i;}
		currentTheme = (currentTheme+1)%themeCount;
		form.style.setProperty("--theme-primary",themesArray[currentTheme]["primary"]);
		form.style.setProperty("--theme-secondary",themesArray[currentTheme]["secondary"]);
		form.style.setProperty("--theme-text",themesArray[currentTheme]["text"]);
		document.getElementById("themeSelectorButton").innerHTML = '<i class="fa fa-paint-brush"></i> '+themesArray[currentTheme]["name"];

		//now actually set the cookie
		document.cookie="TuneRoomTheme="+JSON.stringify(themesArray[currentTheme]);
		var key=getFromCookie("TuneRoomKey");
		theme=getFromCookie("TuneRoomTheme");
		//alert(key)
		if(key!=null){
			updateTheme(key,theme);
		}
	}

	function getFromCookie(cname){
		//gets the theme from the current cookie
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++){
		var c = ca[i];
		while (c.charAt(0) == ' ') {
		  c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
		  return c.substring(name.length, c.length);
		}
		}
		return null;	
	}

	function updateTheme(key,theme){
		//alert("working");
		$.ajax({
			url: "../../../api.php",
			data: "type=update&key="+key+"&return[]=*&theme="+theme,
			dataType: "JSON",
			error: function(xhr,thrownError){
				alert(xhr.status+":"+thrownError+" | We're experiencing some problems saving your preference, please try again later");
			},
			method: "POST",
			success: function(result){
				//alert(result);
			}
		});
	}



</script>

<link rel="stylesheet" href="../CSS/footer.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="footer">
	<a href="home.php"><i class="fa fa-home"></i> Home </a>
	<a href="tester.php"><i class="fa fa-code"></i> Developer API </a>
	<a href="terms.php"><i class="fa fa-handshake-o"></i> Terms and Conditions </a>
	<a onclick="setTheme()" style="cursor:pointer" id="themeSelectorButton"><i class="fa fa-paint-brush"></i> <?php echo $GLOBALS["themes"][0]["name"];?> </a>
			
</div>
<div class="hint"><i style="position:relative;top:-8px;" class="fa fa-angle-double-up" aria-hidden="true"></i><div>

</html>