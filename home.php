<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KotiPi web application">
    <meta name="author" content="Mirya Nezvitskaya">

    <title>KotiPi</title>

 <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="css/home.css" rel="stylesheet">

 <!-- Script for buttons-->
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<!--script for inside light-->
		<script type="text/javascript">
		$(document).ready(function(){
			$('#clickON1').click(function(){
		var a = new XMLHttpRequest();
		a.open("GET", "insidelighton.php");
		a.onreadystatechange=function(){
			if (a.readyState==4){
				if(a.status == 200){
}
				else alert("HTTP error");
}
}
		a.send();
});

});
		$(document).ready(function(){
		$('#clickOFF1').click(function(){
		var a = new XMLHttpRequest();
		a.open("GET", "insidelightoff.php");
		a.onreadystatechange=function(){
			if (a.readyState==4){
				if(a.status == 200){
}
				else alert("HTTP error")
}
}
		a.send();
});

});
		<!--script for outside light-->
                $(document).ready(function(){
                        $('#clickON2').click(function(){
                var a = new XMLHttpRequest();
                a.open("GET", "outsidelighton.php");
                a.onreadystatechange=function(){
                        if (a.readyState==4){
                                if(a.status == 200){
}
                                else alert("HTTP error");
}
}
                a.send();
});

});
                $(document).ready(function(){
                $('#clickOFF2').click(function(){
                var a = new XMLHttpRequest();
                a.open("GET", "outsidelightoff.php");
                a.onreadystatechange=function(){
                        if (a.readyState==4){
                                if(a.status == 200){
}
                                else alert("HTTP error")
}
}
                a.send();
});

});
		<!--script for speakers-->
                $(document).ready(function(){
                        $('#clickON3').click(function(){
                var a = new XMLHttpRequest();
                a.open("GET", "musicon.php");
                a.onreadystatechange=function(){
                        if (a.readyState==4){
                                if(a.status == 200){
}
                                else alert("HTTP error");
}
}
                a.send();
});

});
                $(document).ready(function(){
                $('#clickOFF3').click(function(){
                var a = new XMLHttpRequest();
                a.open("GET", "musicoff.php");
                a.onreadystatechange=function(){
                        if (a.readyState==4){
                                if(a.status == 200){
}
                                else alert("HTTP error")
}
}
                a.send();
});

});
</script>

		<!--script for alarm clock-->
		<script type="text/javascript>
		var sound = new Audio("/home/pi/www/RadioTunes-RootsReggae.pls");
		getID = function(value){
			return document.getElementById(value);
		}
		var hour = getID("hour"),
		    minute = getID("minute"),
		    h = getID("h"),
		    m = getID("m"),
		    aswitch = getID("switch"),
		    off = getID("turnoff"),
		    refreshtime = 600,
		    alarmtimer = null;
		aswitch.On = false;
		aswitch.value = "OFF";
		function alarmonoff(){
			switch(aswitch.On)
			{
				case false:
					aswitch.On = true;
					aswtich.value = "ON";
					alarmset();
				break;
				case true:
					aswitch.On = false;
					aswitch.value = "OFF";
			}
		}
		function disablealarm(){
			sound.pause();
			off.style.display = "none";
		}
		function alarmplay(){
			if (aswitch.On)
			{
				off.style.display = "block";
				sound.play();
			}
			else
				alert("There was an error.");
			}
		function alarmset(){
			clearTimeout(alarmtimer);
			var tomorrow = false;
			if (hour.value<h.value)
				{tomorrow = true;}
			else if (hour.value == h.value && minute.value < m.value)
				{tomorrow = true;}
			var date = new Date(), year = date.getFullYear(), month = date.getMonth(), day = parseInt (date.getDate());
			if (tomorrow){day += 1;}
			time = new Date (year, month, day, hour.value, minute.value, second.value, date.getMilliseconds());
			time = (time - (new Date()));
			if (alarmswitch.On = false)
				alarmswitch();
			alarmtimer = setTimeout(function()){alarmplay();},parseInt(time));
			}
			timeRefresh = function(){
			date = new Date();
			h.innerHTML = date.getHours();
			h.value = h.innerHTML;
			m.innerHTML = date.getMinutes();
			m.value = m.innerHTML;
			setTimeout("timeRefresh()", refreshTime);
		};
		numCap = function( obj, min, max){
			obj.value = Math.max(obj.min, Math.min(obj.max, obj.value) );
			alarmSet();// Starts up the alarm automatically when a value is changed.
		};
		timerefresh();

		var a = getID("hour");
		a.value = h.innerHTML;
		a = getID("minute");
		a.value = m.innerHTML;
</script>

<!--show temperature every second refreshes temperature-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
                var auto_refresh = setInterval(function(){
                        $('#showtemp').load('tempshow.php');
                }, 1000); 
</script>


 </head>

<body>

    <div class="container">
      <div class="header clearfix">
        <img src="images/kotipi_logo_version1.png" alt="KotiPi logo" style="width:91px;height:123px;">
      </div>

      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Wake Up <input id="hour" type="number" min="0" max="23" onChange="numCap(this);"/> <input id="minute" type="number" min="00" max="59" onChange="numCap(this)"/> <input id="switch" type="button" value="OFF" onClick="alarmswitch()"/></h2>
      </div>
      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music play</h2>
      </div>
      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span> Lights In<button type= "button" id="clickON1"> ON </a>
		<button type="button" id="clickOFF1"> OFF </button>Lights Out<button type= "button" id="clickON2"> ON </a> <button type="button" id="clickOFF2"> OFF </button></h2>
      </div>
      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Lock House <button type="button"> ON </a> <button type="button"> OFF </button></h2>
      </div>
      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Video<button type= "button"> take photo </a> </button></h2>
      </div>
      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span> Temperature <label id="showtemp"></label></h2>
      </div>
      <div class="jumbotron">
        <h2><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> History</h2>
      </div>

      <footer class="footer">
        <p>&copy; KotiPi 2015</p>
      </footer>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

