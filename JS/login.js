
	function login(){
		var errorBox = document.getElementById("E1");
		var button = document.getElementById("A2");
		var user = document.getElementById("email");
		var pass = document.getElementById("password");
		
		var loginState = false;
		var returnObject;
		

		//start loading
		errorBox.innerHTML = "<img class='LoadingBar' id='LB' src='../SVG/InfinityLoad.svg' >";
		$.ajax({
			url: "../../../api.php",
			data: "type=login&user="+encodeURI(user.value)+"&pass="+encodeURI(pass.value)+"&return[]=*",
			dataType: "JSON",
			error: function(xhr,thrownError){
				errorBox.innerHTML = "<i onclick class='fa fa-fw fa-times-circle-o'></i> "+xhr.status+" "+thrownError;
			},
			method: "POST",
			success: function(result){
				returnObject=result;
				loginState=(result["status"]=="success");
				if(loginState){
					
					//set the cookie aspects 
					document.cookie="TuneRoomUser="+user.value;
					document.cookie="TuneRoomKey="+returnObject["data"]["API_key"];
					if(returnObject["data"]["theme"]!=null) document.cookie="TuneRoomTheme="+returnObject["data"]["theme"];
					//alert(document.cookie);

					var link = document.getElementById("homePageLink");
					setTimeout(function(){link.click()},1000);

					
				}
				else{
					errorBox.innerHTML = "<i onclick class='fa fa-fw fa-times-circle-o'></i> "+result["status"];	
				}
			}
		});	
		/*
		
	
		*/
	}
