<?php
		include('config.php');
		$activePage = "calendar";
?>

<!DOCTYPE html>
<html>
<head>
	<!-- PRAC 1 -->
	<title name="WebTitle"> Tune Room ZA : Calendar</title>
	<link rel="stylesheet" type="text/css" href="../CSS/calendar.css">
	
	<!-- PRAC2 -->
	<link rel="stylesheet" type="text/css" href="../CSS/loading_bar.css">
    <script type="text/javascript" src="../JS/theme.js"></script>
	<script type="text/javascript" src="../JS/loading_bar.js"></script>
    	<script type="text/javascript" src="../JS/calendar.js"></script>

    	<!-- JQUERY -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<?php include('favicon.php')?>

    <!-- LOADING SEQUENCE -->
    <script type="text/javascript">  
        function START(){
            useTheme();
            start_loading_bar();
            loading = true;
            initLoad = true;
            setTimeout(StartCalendar(),1000);
            if(!loading){setTimeout(stop_loading_bar(),1000);}
            
        }
        
        function advanceMonth(){
            start_loading_bar();
            loading = true;
            forward();
            if(!loading) setTimeout(stop_loading_bar(),1000); 
		}
        function regressMonth(){
            start_loading_bar();
            loading = true;
            backward();
            if(!loading) setTimeout(stop_loading_bar(),1000);  
		}
        function Focus(){
            LoadCalendarData();
            FocusMonth();
            loadSongs(MAXDATASET-1);
		}

    </script>




	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body onload="START()">


	
	<img class="LoadingBar" id="LB" src="../SVG/RippleLoad.svg" >	

		<!-- =========================================================== NOTE FOR MARKERS : NAV BAR INCLUDED HERE ======================================== -->
		<?php
			include('header.php');
		?>
		<!-- ============================================================================================================================================= -->



    <main>
    <div class="toolbar">
      <div class="toggle">
        <div id="PrevMonth" class="MonthButton" onclick="regressMonth();"><i class="fa fa-fw fa-hand-o-left"></i> Previous Month</div>
        <div id="NextMonth" class="MonthButton" onclick="advanceMonth();"><i class="fa fa-fw fa-hand-o-right"></i> Next Month </div>
        <div id="Focus" class="MonthButton" onclick="Focus();"><i class="fa fa-fw fa-paperclip"></i> Current Month</div>
        <div id="Export" class="MonthButton" onclick="download();"><i class="fa fa-fw fa-download"></i> Export Month</div>
      </div>
      <div class="CurrMonth">March</div>
      <div class="CurrYear">2020</div>
    </div>
    <div class="calendar">
        <div class="calendar__week">
        <div class="c_day">1</div>
        <div class="c_day">2</div>
        <div class="c_day">3</div>
        <div class="c_day">4</div>
        <div class="c_day">5</div>
        <div class="c_day">6</div>
        <div class="c_day">7</div>
      </div>
      <div class="calendar__week">
        <div class="c_day">8</div>
        <div class="c_day">9</div>
        <div class="c_day">10</div>
        <div class="c_day">11</div>
        <div class="c_day">12</div>
        <div class="c_day">13</div>
        <div class="c_day">14</div>        
      </div>
      <div class="calendar__week">
        <div class="c_day">15</div>
        <div class="c_day">16</div>
        <div class="c_day">17</div>
        <div class="c_day">18</div>
        <div class="c_day">19</div>
        <div class="c_day">20</div>
        <div class="c_day">21</div>    
      </div>
      <div class="calendar__week">
        <div class="c_day">22</div>
        <div class="c_day">23</div>
        <div class="c_day">24</div>
        <div class="c_day">25</div>
        <div class="c_day">26</div> 
        <div class="c_day">27</div> 
        <div class="c_day">28</div> 
      </div>
      <div class="calendar__week">
        <div Id="D29" class="c_day">29</div>
        <div Id="D30" class="c_day">30</div>
        <div Id="D31" class="c_day">31</div>
        <div class="c_day"></div>
        <div class="c_day"></div>
        <div class="c_day"></div>
        <div class="c_day"></div>
      </div>
    </div>
  </main>

		<!-- =========================================================== NOTE FOR MARKERS : FOOTER INCLUDED HERE ======================================== -->
		<?php
			include('footer.php');
		?>
		<!-- ============================================================================================================================================= -->
	

</body>
</html>