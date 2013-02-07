<?php
session_start();
$na=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];

if ($na == NULL)
{
header("Location: http://localhost/ExpertsBlog/accessDenied.php");
}

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_loginu where Uname='$na'");

while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
  }

$title=$_POST['title'];
$details=$_POST['details'];
$blog=$_POST['blog'];
$article=$_POST['article'];
$category=$_POST['select'];
$table="";

if($blog==NULL)
{
$table="kj_articleu";
}

if($article==NULL)
{
$table="kj_blogu";
}

//executing query to PID Proceesing
$res = mysql_query("SELECT * FROM `expertsblog`.`$table`;");

while($rw = mysql_fetch_array($res))
  {
  $id=$rw['ID'];
  }
$id=$id+1;


mysql_query("INSERT INTO `expertsblog`.`$table` (`PID`, `ID`, `Title`, `Category`, `Details`, `Images`, `Links`) VALUES ('$pid', '$id','$title', '$category',  '$details', '', '');");

//db connection closing
mysql_close($con);

header("Location: http://localhost/ExpertsBlog/dashBoardH.php");

?>