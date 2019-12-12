<?php
  //provide your hostname, username and dbname
$host="localhost";                            
$username="root";  
$password="";
$db_name="ykk"; 
//$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
$con=mysql_connect($host, $username, $password);
mysql_select_db($db_name,$con);
$packagename = $_POST['packagename'];
$sql = "select packagename from packagetb where packagename LIKE '%$packagename%'";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
echo "<p>".$row['packagename']."</p>";
}
