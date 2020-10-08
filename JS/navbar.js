var searchCrit = document.querySelector(".SearchBar").value;
var searchField = "";


function UpdateSpecs(){
	

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


function GetTrackInfo(URL){
		$(document).ready(function(){
		$.ajax({url: URL, success: function(result){
			//stuff goes here - LAST FM 
			CheckInfo(result);
        }, dataType: "JSON"});        
		});
}

function CheckInfo(preset){
		if (searchField=="Title"){
			
			var TrackListing = new Array(preset.results.trackmatches.track[0],preset.results.trackmatches.track[1],preset.results.trackmatches.track[2],preset.results.trackmatches.track[3],preset.results.trackmatches.track[4]);

			//to update the names of all the tracks
			var TrackNames = document.querySelectorAll(".SongTitle");
			var ArtistNames = document.querySelectorAll(".ArtistDetail");
			var Thumbs = document.querySelectorAll(".ThumbNail");
		
			
			//now to get metadata
			for( var i=0; i<TrackNames.length; i++){ //go through tracks and update
				TrackNames[i].innerHTML = TrackListing[i].name;
				ArtistNames[i].innerHTML = TrackListing[i].artist;
				Thumbs[i].src = TrackListing[i].image[3]['#text'];
				Thumbs[i].alt = "NO IMAGE FOUND";
			}

		}
		else if (searchField=="Artist"){
			var ArtistListing = new Array(preset.results.artistmatches.artist[0],preset.results.artistmatches.artist[1],preset.results.artistmatches.artist[2],preset.results.artistmatches.artist[3],preset.results.artistmatches.artist[4]);

			//to update the names of all the tracks
			var TrackNames = document.querySelectorAll(".SongTitle");
			var ArtistNames = document.querySelectorAll(".ArtistDetail");
			var Thumbs = document.querySelectorAll(".ThumbNail");
			
			
			//now to get metadata
			for( var i=0; i<TrackNames.length; i++){ //go through tracks and update
				TrackNames[i].innerHTML = ArtistListing[i].name;
				ArtistNames[i].innerHTML = "======ARTIST======";
				Thumbs[i].src = ArtistListing[i].image[3]['#text'];
				Thumbs[i].alt = "NO IMAGE FOUND";
			}		
		}
		else if (searchField=="Album"){
			var AlbumListing = new Array(preset.results.albummatches.album[0],preset.results.albummatches.album[1],preset.results.albummatches.album[2],preset.results.albummatches.album[3],preset.results.albummatches.album[4]);

			//to update the names of all the tracks
			var TrackNames = document.querySelectorAll(".SongTitle");
			var ArtistNames = document.querySelectorAll(".ArtistDetail");
			var Thumbs = document.querySelectorAll(".ThumbNail");
		
			
			//now to get metadata
			for( var i=0; i<TrackNames.length; i++){ //go through tracks and update
				TrackNames[i].innerHTML = AlbumListing[i].name;
				ArtistNames[i].innerHTML = AlbumListing[i].artist;
				Thumbs[i].src = AlbumListing[i].image[2]['#text'];
				Thumbs[i].alt = "NO IMAGE FOUND";

			}
		
		}

}



