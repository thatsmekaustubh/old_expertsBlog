<?php
$pid=$_POST['pid'];

$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);


//Deleting entries from all the tables

mysql_query("DELETE FROM `expertsblog`.`kj_articleu` WHERE `kj_articleu`.`PID` =$pid LIMIT 1 ;");

mysql_query("DELETE FROM `expertsblog`.`kj_blogu` WHERE `kj_blogu`.`PID` =$pid LIMIT 1 ;");

mysql_query("DELETE FROM `expertsblog`.`kj_loginu` WHERE `kj_loginu`.`PID` =$pid LIMIT 1 ;");

mysql_query("DELETE FROM `expertsblog`.`kj_profileimagesu` WHERE `kj_profileimagesu`.`PID` =$pid LIMIT 1 ;");

mysql_query("DELETE FROM `expertsblog`.`kj_signupu` WHERE `kj_signupu`.`PID` =$pid LIMIT 1 ;");


mysql_close($con);

header("Location: http://localhost/ExpertsBlog/adminDashboard.php");

?>