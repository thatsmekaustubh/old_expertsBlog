<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer6 {position:absolute;
	width:200px;
	height:48px;
	z-index:6;
	left: 534px;
	top: 607px;
}
#Layer12 {	position:absolute;
	width:54px;
	height:22px;
	z-index:9;
	left: 607px;
	top: 17px;
}
#Layer1 {	position:absolute;
	width:191px;
	height:23px;
	z-index:1;
	top: 7px;
	left: 36px;
	border: 0;
	border-color: #FFFFFF;
	border-left-color: #0033FF;
}
#Layer8 {	position:absolute;
	width:26px;
	height:60px;
	z-index:8;
	left: 6px;
	top: 6px;
}
#Layer2 {	position:absolute;
	width:42px;
	height:48px;
	z-index:2;
	left: 561px;
	top: 8px;
}
#Layer11 {	position:absolute;
	width:1113px;
	height:513px;
	z-index:14;
	left: 54px;
	top: 88px;
	overflow: scroll;
}
-->
</style>
</head>

<body>
<div id="Layer6"><a href="http://localhost/ExpertsBlog/companyDetails.php"><img src="http://localhost/ExpertsBlog/images/companylogo.jpg" alt="i" width="46" height="42" align="left" longdesc="http://localhost/ExpertsBlog/companyDescription.php" />Company Description<br />
  Company details</a></div>
<div id="Layer12"><a href="http://localhost/ExpertsBlog/index.php">Home</a></div>
<div id="Layer1"><a href="http://localhost/ExpertsBlog/siteMap.php">Sitemap</a></div>
<div id="Layer8"><a href="http://localhost/ExpertsBlog/siteMap.php"><img src="http://localhost/ExpertsBlog//images/sitemap.gif" alt="sitemap" width="26" height="30" border="0" align="top" longdesc="http://localhost/ExpersBlog/siteMap.php" /></a></div>
<div id="Layer2"><a href="http://localhost/ExpertsBlog/index.php"><img src="http://localhost/ExpertsBlog/images/home.png" alt="home" width="35" height="31" border="0" align="bottom" longdesc="http://localhost/ExpertsBlog/index.php" /></a></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer11">
  <?php
 session_start();
$na=$_SESSION['fname']; 
//$na=$_COOKIE["Validity"];
//echo $na;
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
//echo $pid;
$result = mysql_query("SELECT * FROM kj_blogu where PID='$pid'");
echo "<table width='450'>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>";
  echo $row['Title'];
  echo "</td>";
  echo "<td>";
  echo $row['Category'];
  echo "</td>";
  echo "<td>";
  $pidis=$row['ID'];
  echo "<form action='http://localhost/ExpertsBlog/blogView.php' method='post'>";
  echo "<input type='hidden' name='pid' value='$pidis' />";
  echo "<input type='hidden' name='type' value='Blog' />";
  echo "<input type='submit' name='Submit' value='View' />";
  echo "</form>";
  echo "</td>";
  echo "<td>";
  echo "<form action='http://localhost/ExpertsBlog/delete.php' method='post'>";
  echo "<input type='hidden' name='pid' value='$pidis' />";
  echo "<input type='hidden' name='type' value='Blog' />";
  echo "<input type='submit' name='Submit' value='Delete' />";
  echo "</form>";
  echo "</td>";
  echo "</tr></td>";
  }

echo "</table>"; 

//db connection closing
mysql_close($con);
?>
</div>
<p>&nbsp;</p>
</body>
</html>
