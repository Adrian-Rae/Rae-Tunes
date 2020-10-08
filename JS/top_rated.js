


function loadSongs(){
		var api = getFromCookie("TuneRoomKey");
		$.ajax({
			url: "../../../api.php",
			data: "key="+api+"&type=info&ranking=*&return[]=title&return[]=album&return[]=artist&return[]=release",
			method: "POST",
			success: function(result){
				//stuff goes here - LAST FM 
				CheckInfo(result);
			}, 
			dataType: "JSON"
		});        

}


function CheckInfo(response){
	//var TrackArray = new Array(response.tracks.track[0],response.tracks.track[1],response.tracks.track[2],response.tracks.track[3],response.tracks.track[4]);
	//alert(response)

	//to update the names of all the tracks
	var TrackNames = document.querySelectorAll(".SongTitle");
	var ArtistNames = document.querySelectorAll(".ArtistDetail");
	var Thumbs = document.querySelectorAll(".ThumbNail");
	var release = document.querySelectorAll(".ReleaseDetail");
	
	//now to get metadata
	for( var i=0; i<TrackNames.length; i++){ //go through tracks and update
		TrackNames[i].innerHTML = response["data"][i]["title"];
		ArtistNames[i].innerHTML = "by: "+response["data"][i]["artist"];
		release[i].innerHTML = "released: "+response["data"][i]["release date"];
		//alert(response["data"][i]["title"]);
		//var ref = getArtwork(response["data"][i]["title"]);
		setArtwork(response["data"][i]["title"]+" "+response["data"][i]["artist"],Thumbs,i);
	}
	//alert(JSON.stringify(response));
	//load the images

}

function setArtwork(album,Thumbs,index){
	var api = getFromCookie("TuneRoomKey");
	var string = "key="+api+"&type=info&album="+encodeURI(album)+"&return[]=album";
	$.ajax({
		url: "../../../api.php",
		data: string,
		error: function(xhr, thrownError){console.warn(string+" "+xhr.status+" "+thrownError);},
		method: "POST",
		success: function(result){
			//stuff goes here - LAST FM 
			//alert(JSON.stringify(result));
			Thumbs[index].src = result["data"]["artwork"];
		}, 
		dataType: "JSON"
	}); 
}


