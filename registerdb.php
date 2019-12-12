<?php
	$username=$_POST["username"];
	$pw=$_POST["password"];
	$gender=$_POST["gender"];
	$country=$_POST["country"];
	$phno=$_POST["phno"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	
	
	$con = mysql_connect("localhost","root","");
		if(!$con){
			die('Could not connect:'.mysql_error());
		}
		// Create table
		 mysql_select_db("ykk",$con);
		 
		 $sql="INSERT INTO usertb(username,password,gender,country,phno,email,address) VALUES('$username','$pw','$gender','$country','$phno','$email','$address')";
		 
		$ret=mysql_query($sql,$con);				
		if($ret)
        {
				header("location:TravelTour.php");
		}
        else{
			echo "<p>404 errors:" .mysql_error()."</p>";
		}
	mysql_close($con);
?>