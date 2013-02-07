<?php 

session_start();
$n=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];
if ($n == NULL )
{
header("Location: http://localhost/ExpertsBlog/accessDenied.php");
}

$na=$_POST['id'];

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

if($_POST['type']==Article)
{
$table='kj_articleu';
}
else
{
$table='kj_blogu';
}


mysql_query("DELETE FROM $table where ID='$na'");

mysql_close($con);

header("Location: http://localhost/ExpertsBlog/dashBoardH.php");
?>
