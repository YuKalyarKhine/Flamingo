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
		<li><a href="#">Program &raquo;</a>
			<ul class="sub">
            	<?php
					include("dbconnect.php");
					$sql="select * from triptypetb";
					$res=mysql_query($sql);
					while($row=mysql_fetch_array($res)):
				?>
                	<li><a href="trip.php?triptypeid=<?php echo $row['triptypeid']; ?>"><?php echo $row['triptypename']; ?></a></li>
                <?php
					endwhile;
				?>
                
	</ul>
		</li>
        <li><a href="#">Hotels &raquo;</a>
        <ul class="sub">
        <li><a href="ygnhotel.php">Yangon Hotel Rates</a></li>
       	<li><a href="mdyhotel.php">Mandalay Hotel Rates</a></li> 
        <li><a href="baganhotel.php">Bagan Hotel Rates</a></li>
        <li><a href="inlehotel.php">Inle Hotel Rates</a></li>
        </ul>
        </li>
        <li><a href="carservice.php">Car Rental</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
		
	</ul>
  
</body>
</html>  