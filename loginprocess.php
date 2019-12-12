<?php
	session_start();
	include("dbconnect.php");
	$name=$_REQUEST['username'];
	$pass=$_REQUEST['pass'];
	//echo $name."<br>".$pass;
	$sql="select * from usertb where username='$name' and password='$pass'";
	$login=mysql_query($sql);
	$numrow=mysql_num_rows($login);
	if($numrow>0){
		while($row=mysql_fetch_array($login)):
			$_SESSION['user']=$row['userid'];
		endwhile;
		header("Location:search.php");
	}
	else{
		//echo alert("Registation Please!!");
		header("Location:register.php");

	}
?>