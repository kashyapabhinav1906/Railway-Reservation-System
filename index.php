<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Railway Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- <script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script> -->
<!-- 
	<script>
		$(document).ready(function()
		{
			$('.wrap').css();
		});
	</script> -->
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:140px; position:relative; top:35px">
				<img src="images/log.png"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="index.php">Railway Reservation</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<a class="brand" href="index.php" ><i class="fa fa-home"></i>&nbsp; HOME</a>
				<a class="brand" href="train.php" ><i class="fa fa-search"></i>&nbsp; FIND TRAIN</a>
				<a class="brand" href="reservation.php"><i class="fa fa-train"></i>&nbsp; BOOK</a>
				<a class="brand" href="profile.php"><i class="fa fa-id-card"></i>&nbsp; PROFILE</a>
				<a class="brand" href="display.php"><i class="fa fa-book"></i>&nbsp; BOOKINGS</a>
				<a class="brand" href="admin_login1.php"><i class="fa fa-user"></i>&nbsp; ADMIN</a>
				<!-- <a class="brand"> -->
				<div class="container">
				  <label class="switch" for="checkbox">
				    <input type="checkbox" id="checkbox" />
				    <div class="slider round"></div>
				  </label>
				</div>
				 <!-- </a> -->

				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner inverted">
				<div class="active item" style="width:600px;height:350px;"><img src="images/r3.jpg"/></div>
				<div class="item" style="width:600px;height:350px;"><img src="images/r2.jpg" /> </div>
				<div class="item" style="width:600px;height:350px;"><img src="images/r1.jpg" /></div>
				<div class="item" style="width:600px;height:350px;"><img src="images/r4.webp" /></div>
				<div class="item"style="width:600px;height:350px;"><img src="images/r5.jpg" /> </div>
				<div class="item" style="width:600px;height:350px;"><img src="images/r6.jpg"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>

				&nbsp; &nbsp; &nbsp; &nbsp;
				<a class="btn btn-info" href="check_pnr.php" style="position:relative; left: 70px; margin:10px">

					<i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; &nbsp;<b>CHECK PNR</b>
				</a>
				

			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="200px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b>Currently the application is a single user system, i.e. can't be accessed by many users at same time.</b></p>
				</br>
				<p><b>The Admin adds and releases the train fixture in the reservation system.</b></p></br>
				<p><b>Search procedure is also implemented to provide an alternative journey with one intermediate station.</b></p></br>
				<p><b>Project is developed by Abhijeet Verma, Abhinav Kashyap and Adityaraje Devade under CSL3050 DBMS Course.</b></p></br>
				</br>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
		<!-- Copyright -->
		<footer >
		<div style="width:100%;">
			<div style="text-align:center;">
			<p class="text-center text-info"><strong>/> by: </strong>Abhijeet-Abhinav-Aditya</p>
			</div>
		</div>
		</footer>	</div>

		<script>

			var el = document.getElementById('checkbox');

			el.addEventListener('click', function() {
			  if(document.getElementById("checkbox").checked === false){
			    document.documentElement.classList.toggle('dark-mode');
			    document.querySelectorAll('.inverted').forEach((result) => {
						result.classList.toggle('invert');
					})
			  } 
			  else {
			    document.documentElement.classList.toggle('dark-mode');
			    document.querySelectorAll('.inverted').forEach((result) => {
						result.classList.toggle('invert');
					})
			  }    
			});
		</script>
	
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>