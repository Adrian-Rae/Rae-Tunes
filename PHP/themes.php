<?php 
	function currentTheme(){
		if(isset($_SESSION["theme"])) echo $_SESSION["theme"];
		else echo json_encode($GLOBALS["theme"][0]);
	}

	function advanceTheme(){
		if(isset($_SESSION["loggedIn"])){
			//
		}
	}

?>