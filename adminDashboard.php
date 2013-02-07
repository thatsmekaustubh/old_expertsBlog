<?php
session_start();
$na=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];
if ($na == NULL )
{
header("Location: http://localhost/ExpertsBlog/accessDenied.php");
}
?>
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
#Layer16 {	position:absolute;
	width:203px;
	height:21px;
	z-index:18;
	left: 502px;
	top: 58px;
}
#Layer3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:19;
	left: 88px;
	top: 226px;
}
.style4 {color: #FFFFFF}
#Layer5 {	position:absolute;
	width:1008px;
	height:23px;
	z-index:11;
	left: 10px;
	top: 111px;
}
#Layer11 {	position:absolute;
	width:999px;
	height:382px;
	z-index:14;
	left: 11px;
	top: 151px;
	overflow: scroll;
}
-->
</style>
</head>

<body background="/ExpertsBlog/images/psp_wallpaper04.jpg">
<div id="Layer6"><a href="http://localhost/ExpertsBlog/companyDetails.php"><img src="http://localhost/ExpertsBlog/images/companylogo.jpg" alt="i" width="46" height="42" align="left" longdesc="http://localhost/ExpertsBlog/companyDescription.php" />Company Description<br />
  Company details</a></div>
<div id="Layer12"><a href="http://localhost/ExpertsBlog/index.php">Home</a></div>
<div id="Layer1"><a href="http://localhost/ExpertsBlog/siteMap.php">Sitemap</a></div>
<div id="Layer8"><a href="http://localhost/ExpertsBlog/siteMap.php"><img src="http://localhost/ExpertsBlog//images/sitemap.gif" alt="sitemap" width="26" height="30" border="0" align="top" longdesc="http://localhost/ExpersBlog/siteMap.php" /></a></div>
<div id="Layer2"><a href="http://localhost/ExpertsBlog/index.php"><img src="http://localhost/ExpertsBlog/images/home.png" alt="home" width="35" height="31" border="0" align="bottom" longdesc="http://localhost/ExpertsBlog/index.php" /></a></div>
<div id="Layer16"><a href="adminDashboard.php">Admin View</a> / <a href="AdashBoardH.php">User View </a></div>
<div id="Layer5">
  <table width="1011" height="25" border="0" bordercolor="#91604E">
    <tr>
      <td width="1005" height="21" bgcolor="#9BBC54"><span class="style4">Experts in the system . . . </span></td>
    </tr>
  </table>
</div>
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

$result = mysql_query("SELECT * FROM kj_loginu where Uname not like '$na'");

while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
//echo $pid;

  
echo "<table width='630'>";
while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
    
  		$res = mysql_query("SELECT * FROM kj_profileimagesu where PID='$pid'");
	
		while($rw = mysql_fetch_array($res))
		  {
		  $src=$rw['SRC'];
		  }

  echo "<tr><td>";
  echo "<img src='upload/".$src."' width='50' height='50' alt='alt' />";
  echo "</td>";
  echo "<td>";  
  echo $row['FirstName']." ".$row['LastName'];
  echo "</td>";
  echo "<td>";
  echo $row['Email'];
  echo "</td>";
  echo "<td>";
  echo "<form action='http://localhost/ExpertsBlog/blogsList.php' method='post'>";
  echo "<input type='hidden' name='pid' value='$pid' />";
  echo "<input type='submit' name='Submit' value='View' />";
  echo "</form>";
  echo "</td>";
  echo "<td>";
  echo "<form action='http://localhost/ExpertsBlog/deleteUser.php' method='post'>";
  echo "<input type='hidden' name='pid' value='$pid' />";
  echo "<input type='submit' name='Submit' value='Delete' />";
  echo "</form>";
  echo "</td>";
  echo "</tr>";
  }
echo "</table>"; 
}
//db connection closing
mysql_close($con);
?>
</div>
</body>
</html>
