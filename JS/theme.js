function useTheme(){
		var theme = JSON.parse(getFromCookie("TuneRoomTheme"));
		if(theme!=null){
			var form = document.documentElement;	
			var elements = document.querySelectorAll("*");
			//for(var p=0; p<elements.length; p++){p.style.setProperty("transition","color 1s");}

			form.style.setProperty("--theme-primary",theme["primary"]);
			form.style.setProperty("--theme-secondary",theme["secondary"]);
			form.style.setProperty("--theme-text",theme["text"]);
			document.getElementById("themeSelectorButton").innerHTML = '<i class="fa fa-paint-brush"></i> '+theme["name"];
		}

		var user = getFromCookie("TuneRoomUser");
		if(user!=null){
			var signup = document.getElementById("signupTab");
			signup.style.display = "none";
			var login = document.getElementById("loginTab");
			login.style.width = "360px";
			login.innerHTML = '<i class="fa fa-user-circle"></i> '+user+' -logout-';
			login.href = "../PHP/logout.php";

		}

		//make sure that the user can only see certain pages if they're logged in
		//*
		var active = (user!=null);
		if(active){	
			var tabs = document.querySelectorAll(".loginOnlyTab");
			for(var i=0; i<tabs.length; i++) tabs[i].style.setProperty("display","inline");
		}
		else{
			//alert("hello");
			var tabs = document.querySelectorAll(".loginOnlyTab");
			for(var i=0; i<tabs.length; i++) tabs[i].style.setProperty("display","none");
		}

}

function getFromCookie(cname){
		//gets an attribute value from a cookie if it exists
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