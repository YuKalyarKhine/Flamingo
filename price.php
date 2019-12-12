<?php
	session_start();
	include("dbconnect.php");
	$userid=$_SESSION['user'];
	$pno=$_REQUEST['pno'];
	$packageid=$_REQUEST['packageid'];
	$price=$_REQUEST['price'];
	$amount=intval($pno)*intval($price);
	echo $pno."<br>".$packageid."<br>".$price."<br>".$amount;
	$sql="insert into triptb(userid,packageid,numberofperson,amount) VALUES($userid,$packageid,$pno,$amount)";
	$ret=mysql_query($sql,$con);				
		if($ret)
        {
				header("Location:thankyou.php");
		}
        else{
			echo "<p>404 errors:" .mysql_error()."</p>";
		}
	mysql_close($con);
?> 