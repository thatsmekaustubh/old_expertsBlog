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
#Layer9 {	position:absolute;
	width:288px;
	height:28px;
	z-index:14;
	left: 978px;
	top: 12px;
}
.style3 {color: #AE744E}
#Layer3 {	position:absolute;
	width:223px;
	height:490px;
	z-index:10;
	left: 5px;
	top: 97px;
}
#Layer4 {
	position:absolute;
	width:885px;
	height:489px;
	z-index:15;
	left: 247px;
	top: 97px;
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
<div id="Layer9">
  <div align="right"></div>
</div>
<div id="Layer4">
  <?php 
$na=$_POST['pid'];

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

if($_POST['radiobutton']==Article)
{
$table='kj_articleu';
}
else
{
$table='kj_blogu';
}

$result = mysql_query("SELECT * FROM $table where ID='$na'");

while($row = mysql_fetch_array($result))
  {
  echo $row['PID']."<br />";
  echo $row['ID']."<br />";
  echo $row['Title']."<br />";
  echo $row['Category']."<br />";
  echo $row['Details']."<br />";
  }

mysql_close($con); ?>
</div>
<p>&nbsp;</p>
<div id="Layer3">
  <table width="227" height="489" border="0">
    <tr>
      <td width="215" bgcolor="#DCCFAF"><div align="center"><span class="style3">My profile </span></div></td>
    </tr>
    <tr>
      <td height="129"><div align="center"><img src="images/single user.png" alt="img" width="85" height="98" /></div></td>
    </tr>
    <tr>
      <td bgcolor="#DCCFAF"><div align="center">
<?php 
$na=$_POST['pid'];

$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_signupu where PID='$na'");
while($row = mysql_fetch_array($result))
  {
  $fname=$row['FirstName'];
   $lname=$row['LastName'];
   $uname=$row['UserID'];
   setcookie("name", $uname, time()+10);
  }

echo $fname." ".$lname." ".$uname; 
mysql_close($con); 
?>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">
        <?php 
$na=$_POST['pid'];

$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_signupu where PID='$na'");
while($row = mysql_fetch_array($result))
  {
  $fname=$row['Email'];
  }

echo $fname." ".$lname; 
mysql_close($con); 
 ?>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="177">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#DCCFAF"><div align="center"><a href="http://localhost/ExpertsBlog/profileView.php">
	  <?php  ?>
	  View Profile
	   </a></div></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
</body>
</html>
