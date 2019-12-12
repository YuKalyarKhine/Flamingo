<?php
  $q = $_GET['q'];
  //echo $q;
//$con = mysqli_connect('localhost','','','my_db');
$con = mysql_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysql_error($con));
}
mysql_select_db("ykk",$con);
$sql="SELECT * FROM packagetb WHERE days = '$q'";
$result = mysql_query($sql,$con);
echo "<table border='1'>
<tr>
<th>Pakage ID</th>
<th>Triptype Name</th>
<th>Description</th>
<th>Days</th>
<th>Rate</th>
</tr>";
while($row = mysql_fetch_array($result)) {
echo "<tr>";
  echo "<td>" . $row['packageid'] . "</td>";
  echo "<td>" . $row['triptypeid'] . "</td>";
  echo "<td>" . $row['description'] . "</td>";
 echo "<td>" . $row['days'] . "</td>";
echo "<td>" . $row['rate'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysql_close($con);

?>
