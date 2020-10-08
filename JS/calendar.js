//Global Variables
var MAXDATASET = 0;
var CONNECTIONFAULT = true;
var loading = false;

var Months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
var Days = [31,28,31,30,31,30,31,31,30,31,30,31];
var TrackListCalendar = new Array();
var TrackArray = new Array();

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

function StartCalendar(){
	loadTopSongs();
	setTimeout(FocusMonth(),1000);
	loadSongs(MAXDATASET-1);
}

function FocusMonth(){
	var today = new Date();
	var CurMonth = today.getMonth();
	var CurYear = today.getFullYear();
	var CalMonth = Months.indexOf(document.querySelector(".CurrMonth").innerHTML);
	var CalYear = parseInt(document.querySelector(".CurrYear").innerHTML);
	var AdvanceTime = 12*(CurYear-CalYear)+(CurMonth-CalMonth);
	
	if(AdvanceTime>0){ for(var i=0; i<AdvanceTime; i++){AdvanceCalendar();}}
	else{ for(var i=0; i>AdvanceTime; i--){ReverseCalendar();}}
	LoadCalendarData();
	/*
	while(loading){
		if(MAXDATASET!=0){
			loadSongs(MAXDATASET);
		}
	}*/
}

//*/IMPORTANT - LAST FM API	
function loadTopSongs(){
	var api = getFromCookie("TuneRoomKey");
	$.ajax({
		url: "../../../api.php", 
		data: "key="+api+"&type=info&ranking=*&return[]=*",
		method: "POST",
		success: function(data){
			//stuff goes here - LAST FM 
			checkInfo(data);
			loading = false;
			CONNECTIONFAULT = false;
        }, 
		error: function(textStatus){CONNECTIONFAULT = true;},
		dataType: "JSON"
	});        
}

function checkInfo(response){
	//alert(JSON.stringify(response));
	MAXDATASET = response.data.length;
	for(var i=0; i<response.data.length;i++){
		TrackArray[i]=response["data"][i]["title"];
		TrackListCalendar[i]=(response["data"][i]["release date"]!="unknown" && response["data"][i]["release date"].length==10)?response["data"][i]["release date"]:"0000-00-00";
		//alert(TrackArray[i]+TrackListCalendar[i]);
	}
}

function LoadCalendarData(){
	//*focus on current date
	var today = new Date();

	var CurDay = today.getDate();
	var CurMonth = today.getMonth();
	var CurYear = today.getFullYear();
	var CalMonth = Months.indexOf(document.querySelector(".CurrMonth").innerHTML);
	var CalYear = parseInt(document.querySelector(".CurrYear").innerHTML);
	var DATEBLOCKS = document.querySelectorAll(".c_day");
	
	//remove last today when cycling between months
	if (CalMonth!=CurMonth) {
		var last = document.getElementById("c_Today");
		if (last!=null) last.removeAttribute("id");
	}
	

	//highlight today
	for(var i=0; i<Days[CalMonth]; i++){
		DATEBLOCKS[i].innerHTML = "";
		DATEBLOCKS[i].innerHTML = i+1;
		var CalDay = i+1;
		if ( (CalDay == CurDay) && (CalMonth == CurMonth) && (CalYear == CurYear)){
			DATEBLOCKS[i].id = "c_Today";
			
		}
	}
	loading = false;
	
}

function loadSongs(maxSongsIndex){
	//*Load songs into calendar
	var today = new Date();
	var CurDay = today.getDate();
	var CurMonth = today.getMonth();
	var CurYear = today.getFullYear();
	var CalMonth = Months.indexOf(document.querySelector(".CurrMonth").innerHTML);
	var CalYear = parseInt(document.querySelector(".CurrYear").innerHTML);
	var DATEBLOCKS = document.querySelectorAll(".c_day");
	//loading = true;
	for(var i=0; i<Days[CalMonth]; i++){
		DATEBLOCKS[i].innerHTML = i+1;
		var CalDay = i+1;
		
		//*/loadNewReleases
		for(var j=0; j<=maxSongsIndex; j++){
			if (TrackListCalendar[j].substr(8,2) == CalDay && TrackListCalendar[j].substr(5,2) == parseInt(CalMonth+1) && TrackListCalendar[j].substr(0,4) == CalYear){
				DATEBLOCKS[i].innerHTML += "</h4>"+"<h4 class='newReleaseTitle'>"+TrackArray[j]+"</h4>";
			}		
		}
		//*/
	}
	
}



function AdvanceCalendar(){
	var NextMonthButton = document.querySelector("#PrevMonth");
	var PrevMonthButton = document.querySelector("#NextMonth");
	var CurrMonth = document.querySelector(".CurrMonth");
	var CurrYear = document.querySelector(".CurrYear");
	
	var IndexMonth = Months.indexOf(String(CurrMonth.innerHTML));
	
	var NewMonth = (IndexMonth+1)%12;
	var NewYear = parseInt(CurrYear.innerHTML);
	if (NewMonth == 0) NewYear++;
	CurrMonth.innerHTML = Months[NewMonth];
	CurrYear.innerHTML = NewYear;

	var DAY29 = document.querySelector("#D29");
	var DAY30 = document.querySelector("#D30");
	var DAY31 = document.querySelector("#D31");

	if(Days[NewMonth] > 30) DAY31.innerHTML = "31";
	else DAY31.innerHTML = "";

	if(Days[NewMonth] >= 30) DAY30.innerHTML = "30";
	else DAY30.innerHTML = "";

	if(Days[NewMonth] >= 29) DAY29.innerHTML = "29";
	else DAY29.innerHTML = "";

	//LoadCalendarData();
}

function forward(){
	AdvanceCalendar();
	LoadCalendarData();
	setTimeout(loadSongs(MAXDATASET-1),200);
}

function ReverseCalendar(){
	var NextMonthButton = document.querySelector("#PrevMonth");
	var PrevMonthButton = document.querySelector("#NextMonth");
	var CurrMonth = document.querySelector(".CurrMonth");
	var CurrYear = document.querySelector(".CurrYear");
	
	var IndexMonth = Months.indexOf(String(CurrMonth.innerHTML));
	
	var NewMonth = (IndexMonth+12-1)%12;
	var NewYear = parseInt(CurrYear.innerHTML);
	if (NewMonth == 11) NewYear--;
	CurrMonth.innerHTML = Months[NewMonth];
	CurrYear.innerHTML = NewYear;

	var DAY29 = document.querySelector("#D29");
	var DAY30 = document.querySelector("#D30");
	var DAY31 = document.querySelector("#D31");

	if(Days[NewMonth] > 30) DAY31.innerHTML = "31";
	else DAY31.innerHTML = "";

	if(Days[NewMonth] >= 30) DAY30.innerHTML = "30";
	else DAY30.innerHTML = "";

	if(Days[NewMonth] >= 29) DAY29.innerHTML = "29";
	else DAY29.innerHTML = "";	
}

function backward(){
	ReverseCalendar();
	LoadCalendarData();
	setTimeout(loadSongs(MAXDATASET-1),200);
}

//==================================
//		BONUS
//==================================

function download(){
	//*/

	if(!CONNECTIONFAULT){

	var DATEBLOCKS = document.querySelectorAll(".c_day");
	var CalMonth = document.querySelector(".CurrMonth").innerHTML;
	var CalYear = parseInt(document.querySelector(".CurrYear").innerHTML);
	var fileName = "Releases_"+CalMonth+CalYear+".txt";
	
	var contents = 
	"======================================"+'\n'+
	'\t'+"Your Release Rader | "+CalMonth+" "+CalYear+'\n'+
	"======================================"+'\n';
	
	for(var i=0; i<Days[Months.indexOf(CalMonth)]; i++){
		var CalDay = i+1;
		contents+='\t'+CalDay+'\t'+" | ";
		for(var j=0; j<MAXDATASET; j++){
			//*/
			if ((TrackListCalendar[j].substr(8,2) == CalDay) && (TrackListCalendar[j].substr(5,2) == parseInt(1+Months.indexOf(CalMonth))) && (TrackListCalendar[j].substr(0,4) == CalYear)){
				contents += '\n'+'\t'+TrackArray[j];
			}
			//*/
		}
		contents+='\n'+"--------------------------------------"+'\n';
	}

	var dLink = document.createElement("a");
	dLink.setAttribute("href","data:text/plain;charset=utf-8,"+encodeURIComponent(contents));
	dLink.setAttribute("download", fileName);
	dLink.click();
	//dLink.parentNode.removeChild(dLink);
	//*/
	}
	else{alert("Connection Error: Cannot Export!");}

}


