//Global Regex samples
var emailRegOfficial = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

//Allows compound names, or those SEPERATED (not bordered) by whitespace
var nameReg = /^([a-zA-Z]{1,}[\s-]){0,}([a-zA-Z]){1,}$/; 
var surReg = /^([a-zA-Z]{1,}[\s-]){0,}([a-zA-Z]){1,}$/;

//password criteria established independantly
var passRegLength = /(.){8,}/
var passRegUpper = /([A-Z]){1,}/;
var passRegLower = /([a-z]){1,}/;
var passRegNum = /(\d){1,}/;
var passRegSpecial = /([@#&_]){1,}/;
var passRegIllegal = /[^a-zA-Z0-9@#&_]/;

//Connection properties
var submitURL = "";




function agreeToggle(){

	var radio = document.getElementById("A1");
	var button = document.getElementById("A2");
	var responseText = document.getElementById("alertResponse");
	
	if(radio.className == "fa fa-fw fa-toggle-off"){
		radio.className = "fa fa-fw fa-toggle-on";
		button.className = "registerButton";
		button.addEventListener("click",clientSideValidation);
		responseText.innerHTML = "Register";

	}
	else{
		radio.className = "fa fa-fw fa-toggle-off";
		button.className = "deregisterButton";
		button.removeEventListener("click",clientSideValidation);
		responseText.innerHTML = "Please agree to our terms";
	}
	
}


function clientSideValidation(){
	var errorBox = document.getElementById("E1");
	var confirmBox = document.getElementById("C1");
	var homePageLink = document.getElementById("homePageLink");
	var heading = document.getElementById("tableHeading");
	var subheading = document.getElementById("tableSubHeading");
	var button = document.getElementById("A2");
	button.removeEventListener("click",clientSideValidation);
	button.className = "deregisterButton";

	var coll = document.querySelectorAll(".collateral");

	var name = document.getElementById("firstName").value;
	var surname = document.getElementById("lastName").value;
	var email = document.getElementById("email").value;
	var pass = document.getElementById("password").value;

	var masterPass = false;
	
	
	masterPass = nameReg.test(name) && surReg.test(surname) && emailRegOfficial.test(email) && passRegLength.test(pass) && 
	passRegUpper.test(pass) && passRegLower.test(pass) && passRegNum.test(pass) &&
	passRegSpecial.test(pass) && !passRegIllegal.test(pass);

	if(masterPass){
		//successful on client side
		errorBox.innerHTML = "<img class='LoadingBar' id='LB' src='../SVG/InfinityLoad.svg' >";
		var sendData = "name="+name+"&surname="+surname+"&email="+email+"&password="+pass; 
		//*
		$.ajax({
			url: submitURL,
			data: sendData,
			dataType: "JSON",
			error: function(xhr,thrownError){
				errorBox.innerHTML = "<i onclick class='fa fa-fw fa-times-circle-o'></i> Server Error: "+xhr.status+" "+thrownError; 
				button.addEventListener("click",clientSideValidation);
				button.className = "registerButton";
			},
			method: "POST",
			success: function(result){
				if(result["status"]){
					
					for(var i=0; i<coll.length; i++){
						coll[i].innerHTML = "";
						coll[i].style.height = "0px";
						coll[i].style.display = "none";
					}

					button.style.top="-100px";
					confirmBox.style.top="-40px";
					
					heading.innerHTML = "<i onclick class='fa fa-fw fa-hand-peace-o'></i> Success!";
					heading.style.position = "relative";
					heading.style.top+="30px";
					

					confirmBox.innerHTML = result["message"];

					subheading.innerHTML = "You've signed up.";
					subheading.style.position = "relative";
					subheading.style.top+="30px";
					errorBox.innerHTML = "";

					button.innerHTML = "<b> Proceed to Tune Room </b>";
					button.addEventListener("click",function(){homePageLink.click();});
					button.className = "registerButton";

				}
				else {
					confirmBox.innerHTML = "";
					errorBox.innerHTML = "<i onclick class='fa fa-fw fa-times-circle-o'></i> "+result["message"];
					button.addEventListener("click",clientSideValidation);
					button.className = "registerButton";
				}
			}
		});
		//*/

	}
	else{
		errorBox.innerHTML = "";
		//unsuccessful client side
		if(!nameReg.test(name)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Invalid first name"+'<br>';}
		if(!surReg.test(surname)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Invalid last name"+'<br>';}
		if(!emailRegOfficial.test(email)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Invalid email address"+'<br>';}
		if(!passRegLength.test(pass)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Password does not contain at least 8 characters"+'<br>';}
		if(!passRegUpper.test(pass)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Password does not contain at least 1 uppercase character"+'<br>';}
		if(!passRegLower.test(pass)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Password does not contain at least 1 lowercase character"+'<br>';}
		if(!passRegNum.test(pass)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Password does not contain at least 1 numeric character"+'<br>';}
		if(!passRegSpecial.test(pass)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Password does not contain at least 1 special character (@,#,&,_)"+'<br>';}
		if(passRegIllegal.test(pass)){errorBox.innerHTML+="<i onclick class='fa fa-fw fa-times-circle-o'></i>"+"Password contains illegal characters"+'<br>';}
		
	}

	



}