<?php
	session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" media="all">
</head>
<body>

<header>
		
        <?php
			if(isset($_SESSION['user']))
			{
		?>
				<span class="link"><a href="logout.php">Logout</a></span>
        <?php
			}
		?>
        
		<span><a href="home.php"><img src="pic/logo2.png" class="limg" alt=""></a></span>
		<hgroup>
			<h1>Flamingoes Travel & Tour^^</h1>
			<h2>We offer ready made and tailor made tour packages. Your Sweet Memory is Our Victory.</h2>
		</hgroup>
</header>
	<br>
		<ul class="nav">
		<li><a href="Home.php">Home</a></li>
		<li><a href="TravelTour.php">Login</a></li>
		<li><a href="search.php">Search</a></li>
		<li><a href="TravelTour.php">Program &raquo;</a></li>
        </li>
        <li><a href="TravelTour.php">Hotels &raquo;</a>
        </li>
        <li><a href="Car.php">Car Rental</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
		
	</ul>
  
</body>
</html>  