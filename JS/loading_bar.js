
	//loading bar functionality

	function stop_loading_bar(){
		//setTimeout(function a(){},100);
		var Elements = document.querySelectorAll("tr:not(th)");
		for(var i=0; i<Elements.length; i++){
			Elements[i].style.opacity = 1;
					
		}
		var LoadingBar = document.querySelector("#LB");
		LoadingBar.style.opacity = 0;
		LoadingBar.style.visibility= "hidden";

	}

	function start_loading_bar(){
		var Elements = document.querySelectorAll("tr:not(th)");
		for(var i=0; i<Elements.length; i++){
			Elements[i].style.opacity = 0.1;
					
		}
		
		var LoadingBar = document.querySelector("#LB");
		LoadingBar.style.visibility= "visible";
		LoadingBar.style.opacity = 1;
	}

	function PING(){
		alert("PING");
	}