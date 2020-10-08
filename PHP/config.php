<?php

	//basic folder hierarchy
	$GLOBALS["folderStructure"]="COS216/Prac4/";

	//Authorisation
	$GLOBALS["siteName"] = "Tune Room ZA";
	$GLOBALS["siteVersion"] = "1.3.0";
	$GLOBALS["adminContact"] = "u19004029@tuks.co.za";

	$GLOBALS["userPass"] = "u19004029:Bl@derunner6";
	
	//connection
	$GLOBALS["serverName"] = "127.0.0.1";
	$GLOBALS["username"] = "u19004029";
	$GLOBALS["password"] = "Bl@derunner6";
	$GLOBALS["database"] = "u19004029_tune_room_users";
	
	//Signup validation
	$GLOBALS["validateSignup"]= "validate-signup.php";

	//API Functionality
	$GLOBALS["LastFMAPI"] = "05ddd7a55e17b1bd7f1bf1886cc17101";
	$GLOBALS["MusicBrainzHeader"] = "User-Agent: '" . $GLOBALS["siteName"] . "/" . $GLOBALS["siteVersion"] . " (" . $GLOBALS["adminContact"] . ")";
	$GLOBALS["MAXBILLBOARD"] = 1000;
	$GLOBALS["MAXDISPLAY"] = 60;
	
	$GLOBALS["serverLocation"] = "localhost/";//"wheatley.cs.up.ac.za"; 
	$GLOBALS["wheatleyProxy"] = "phugeet.cs.up.ac.za:3128";

	//Caching
	$GLOBALS["isCaching"] = true;
	$GLOBALS["cacheSize"] = 3000;
	$GLOBALS["maximumCacheTime"] = 14*86400; //specifies in seconds, the amount of time a cached request is valid for

	//Page view variables
	$activePage;

	//themes
	$GLOBALS["themes"]=array(
	array("name"=>"Magma","primary"=>"#222","secondary"=>"#500000","text"=>"#FFFFFF"),
	array("name"=>"artic","primary"=>"#b8aba9","secondary"=>"#34ad8f","text"=>"#000000"),
	array("name"=>"jungle","primary"=>"#111","secondary"=>"#005000","text"=>"#FFFFFF"),
	array("name"=>"oceanic","primary"=>"#3067bf","secondary"=>"#000050","text"=>"#FFFFFF"),
	array("name"=>"savannah","primary"=>"#420707","secondary"=>"#bd2c00","text"=>"#FFFFFF"),

	
	);
	

?>