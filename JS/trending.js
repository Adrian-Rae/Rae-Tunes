var searchCrit;
var searchField = "";
var defaultMode;
var loadVisible;


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


function UpdateSpecs(){
	document.cookie = "TuneRoomRatings==null; expires = Thu, 01 Jan 1970 00:00:00 GMT";
	var searchCrit = document.querySelector(".SearchBar").value;
	if (searchCrit == ""){}
	else{
		
		//FIND THE FIELD TO SEARCH BY
		var ele = document.querySelectorAll(".radioBut");
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) {
				searchField = String(ele[i].id);
				}
             }
		//Done
		
		var URL = "../../../api.php";
		var data = "";
		var api = getFromCookie("TuneRoomKey");

		if(searchCrit.length==0){return;}

		
		if(searchField=="Title")
		{
			var data = "key="+api+"&type=info&title="+searchCrit+"&return[]=title&return[]=artist&return[]=album&return[]=rank";
		}
		else if(searchField=="Ranking")
		{
			if(Number.isNaN(searchCrit)){console.log("This is not a number"); return;}
			if(searchCrit>1000 || searchCrit<1 ){ console.log("This is not a valid input"); return;}
			var data = "key="+api+"&type=info&ranking="+searchCrit+"&return[]=title&return[]=artist&return[]=album&return[]=rank";
		}

		
		GetTrackInfo(URL,data);
		
		
	
	}//end of else
}//end of function
/*/
function UpdateSpecs(default){
	

	var searchCrit = default;
	if (searchCrit == ""){}
	else{
		
		//FIND THE FIELD TO SEARCH BY
		var ele = document.querySelectorAll(".radioBut");
              
            for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) {
				searchField = String(ele[i].id);
				}
             }
		searchField = "Album"; //for default purpose
		//Done
		
		var URL = "http://ws.audioscrobbler.com/2.0/?method=track.search&track=Welcome&api_key=05ddd7a55e17b1bd7f1bf1886cc17101&format=json";
		
		if(searchField=="Title")
		{
			var URL = "http://ws.audioscrobbler.com/2.0/?method=track.search&track="+searchCrit+"&api_key=05ddd7a55e17b1bd7f1bf1886cc17101&format=json";
		}
		else if(searchField=="Artist")
		{
			var URL = "http://ws.audioscrobbler.com/2.0/?method=artist.search&artist="+searchCrit+"&api_key=05ddd7a55e17b1bd7f1bf1886cc17101&format=json";
		}
		else if(searchField=="Album")
		{
			var URL = "http://ws.audioscrobbler.com/2.0/?method=album.search&album="+searchCrit+"&api_key=05ddd7a55e17b1bd7f1bf1886cc17101&format=json";
		}

		
		GetTrackInfo(URL);
		
		
	
	}//end of else
}//end of function
//*/

function GetTrackInfo(URL,data){
	getRatings();	
	start_loading_bar(); 
	loadVisible=true;
	
		$.ajax({
			url: URL,
			data: data,
			method: "POST",
			success: function(result){
				//stuff goes here
				CheckInfo(result);
        	}, 
			dataType: "JSON"
		});
		
  

}

function CheckInfo(preset){
		//alert(JSON.stringify(preset));
			
		//to update the names of all the tracks
		var TrackNames = document.querySelectorAll(".SongTitle");
		var ArtistNames = document.querySelectorAll(".ArtistDetail");
		var Ranks = document.querySelectorAll(".BillboardDetail");
		var Thumbs = document.querySelectorAll(".ThumbNail");
					
		//now to get metadata
		for( var i=0; i<1; i++){ //go through tracks and update
			TrackNames[i].innerHTML = preset["data"]["title"];
			ArtistNames[i].innerHTML = preset["data"]["artist"];
			Ranks[i].innerHTML = "Billboard Spot: "+preset["data"]["rank"];
			Thumbs[i].src = preset["data"]["artwork"];
			Thumbs[i].alt = "NO IMAGE FOUND";
		}

		var compare = {"title":preset["data"]["title"],"artist":preset["data"]["artist"]};

		//now check to see whether or not it exists in pre-rated cache - change sliderRate
		var existingData = JSON.parse(getFromCookie("TuneRoomRatings"));
		document.querySelectorAll(".sliderRate")[0].value = 0;
		document.querySelector("#sliderValue").innerHTML = "Unrated";
		for(var p=0; p<existingData.length; p++){
			//alert(existingData[p]["trackId"]+" AND "+JSON.stringify(compare));
			if(existingData[p]["trackId"]==JSON.stringify(compare)){
				//alert("found");
				var rate = existingData[p]["rating"];
				document.querySelectorAll(".sliderRate")[0].value = rate;
				document.querySelector("#sliderValue").innerHTML = (rate==0)?"Unrated":"Rated "+rate+" star"+((rate>1)?"s":"");
				break;
			}
		}

	
		
		loadVisible = false;
		setTimeout(stop_loading_bar(),1000);

}

function c1(){
	document.getElementById("Title").checked = true;
	document.getElementById("C1").className = "fa fa-fw fa-toggle-on";
	document.getElementById("C2").className = "fa fa-fw fa-toggle-off";
	//document.getElementById("C3").className = "fa fa-fw fa-toggle-off";
}

function c2(){
	document.getElementById("Ranking").checked = true;
	document.getElementById("C1").className = "fa fa-fw fa-toggle-off";
	document.getElementById("C2").className = "fa fa-fw fa-toggle-on";
	//document.getElementById("C3").className = "fa fa-fw fa-toggle-off";
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


function saveRating(title,artist,rate){
	var metadata = {"title":title,"artist":artist};
	var api = getFromCookie("TuneRoomKey");
	var data = "key="+api+"&type=rate&meta="+encodeURI(JSON.stringify(metadata))+"&rate="+rate+"&return[]=state";
	//console.log(data);
	$.ajax({
			url: "../../../api.php",
			data: data,
			method: "POST",
			success: function(result){
				//alert(JSON.stringify(result));
        	}, 
			dataType: "JSON"
	});


}

function sliderRate(){
	var rate = document.querySelectorAll(".sliderRate")[0].value;
	var TrackName = document.querySelectorAll(".SongTitle")[0].innerHTML.trim();
	var ArtistName = document.querySelectorAll(".ArtistDetail")[0].innerHTML.trim();
	document.querySelector("#sliderValue").innerHTML = (rate==0)?"Unrated":"Rated "+rate+" star"+((rate>1)?"s":"");
	//alert(TrackName+ArtistName);

	saveRating(TrackName,ArtistName,rate);

}

function getRatings(){
	
	var api = getFromCookie("TuneRoomKey");
	var data = "key="+api+"&type=rate&meta=none&rate=none&return[]=current";
	$.ajax({
			url: "../../../api.php",
			data: data,
			method: "POST",
			success: function(result){
				document.cookie = "TuneRoomRatings="+JSON.stringify(result["data"]);
				//alert(document.cookie);
        	}, 
			dataType: "JSON"
	});
}