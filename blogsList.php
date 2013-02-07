<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experts Blog [ DETAILS ]</title>
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
#Layer3 {
	position:absolute;
	width:230px;
	height:490px;
	z-index:10;
	left: 5px;
	top: 95px;
}
#Layer4 {
	position:absolute;
	width:289px;
	height:22px;
	z-index:10;
	left: 978px;
	top: 12px;
}
#Layer5 {
	position:absolute;
	width:1019px;
	height:23px;
	z-index:11;
	left: 260px;
	top: 109px;
}
#Layer7 {
	position:absolute;
	width:446px;
	height:240px;
	z-index:12;
	left: 819px;
	top: 102px;
}
#Layer9 {
	position:absolute;
	width:446px;
	height:235px;
	z-index:13;
	left: 819px;
	top: 352px;
}
#Layer10 {
	position:absolute;
	width:564px;
	height:197px;
	z-index:14;
	top: 31px;
}
#Layer11 {
	position:absolute;
	width:1001px;
	height:223px;
	z-index:14;
	left: 260px;
	top: 139px;
	overflow: scroll;
}
#Layer13 {
	position:absolute;
	width:1012px;
	height:25px;
	z-index:15;
	left: 258px;
	top: 367px;
}
#Layer14 {
	position:absolute;
	width:1001px;
	height:200px;
	z-index:16;
	left: 257px;
	top: 397px;
	overflow: scroll;
}
.style4 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div id="Layer6"><a href="http://localhost/ExpertsBlog/companyDetails.php"><img src="http://localhost/ExpertsBlog/images/companylogo.jpg" alt="i" width="46" height="42" align="left" longdesc="http://localhost/ExpertsBlog/companyDescription.php" />Company Description<br />
  Company details</a></div>
<div id="Layer12"><a href="http://localhost/ExpertsBlog/index.php">Home</a></div>
<div id="Layer1"><a href="http://localhost/ExpertsBlog/siteMap.php">Sitemap</a></div>
<div id="Layer8">
  <div id="Layer3">
    <table width="230" height="491" border="0">
      <tr>
        <td width="227" background="/ExpertsBlog/images/Table top.jpg" bgcolor="#FFFFFF"><div align="center"><span class="style4">My profile </span></div></td>
      </tr>
      <tr>
        <td height="231"><div align="center">
		<?php
		$pid=$_POST['pid'];
//		echo $pid;
		//db connection establishing
		$con = mysql_connect("localhost","root","kags");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
	
		//selecting database
		mysql_select_db("expertsblog", $con);	
		$result = mysql_query("SELECT * FROM kj_profileimagesu where PID='$pid'");
	
		while($row = mysql_fetch_array($result))
		  {
		  $src=$row['SRC'];
		  $hieght=$row['Hieght'];
		  $width=$row['Width'];
		  $alt=$row['AltText'];
  		  }


		echo "<img src='upload/".$src."' width='$width' height='$hieght' alt='$alt' />";
		?>

		</div></td>
      </tr>
      <tr>
        <td height="27" bgcolor="#9CB95D"><div align="center">
          <?php 
		  	$pid=$_POST['pid'];
//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_signupu where PID='$pid'");
while($row = mysql_fetch_array($result))
  {
  $fname=$row['FirstName'];
   $lname=$row['LastName'];
  }

echo "<font color='white'>".$fname." ".$lname."</font>"; 
mysql_close($con); ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?php
		  	$pid=$_POST['pid'];
//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_signupu where PID='$pid'");
while($row = mysql_fetch_array($result))
  {
  $email=$row['Email'];
  }

echo $email; 
mysql_close($con); ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center"><a href="http://localhost/ExpertsBlog/dashBoardP.php"></a><a href="http://localhost/ExpertsBlog/dashBoardP.php"></a></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="57">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#9BBB58"><div align="center"><form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/profileView.php">
          <?php 
$na=$_POST['pid'];
echo "<input type='hidden' name='id' value='$na' />";
echo "<input type='submit' name='Submit' value='View Profile' />";

 ?>
        </form></div></td>
      </tr>
    </table>
  </div>
  <a href="http://localhost/ExpertsBlog/siteMap.php"><img src="http://localhost/ExpertsBlog//images/sitemap.gif" alt="sitemap" width="26" height="30" border="0" align="top" longdesc="http://localhost/ExpersBlog/siteMap.php" /></a></div>
<div id="Layer2"><a href="http://localhost/ExpertsBlog/index.php"><img src="http://localhost/ExpertsBlog/images/home.png" alt="home" width="35" height="31" border="0" align="bottom" longdesc="http://localhost/ExpertsBlog/index.php" /></a></div>
<div id="Layer5">
  <table width="1017" height="25" border="0" bordercolor="#91604E">
    <tr>
      <td width="1011" height="21" bgcolor="#9BBC54"><span class="style4">Blogs by me . . . </span></td>
    </tr>
  </table>
</div>
<div id="Layer11">
  <?php
$pid=$_POST['pid'];
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
  $id=$row['ID'];
//  echo $id;
  echo "<form action='http://localhost/ExpertsBlog/blogView.php' method='post'>";
  echo "<input type='hidden' name='id' value='$id' />";
  echo "<input type='hidden' name='type' value='Blog' />";
  echo "<input type='submit' name='Submit' value='View' />";
  echo "</form>";
  echo "</td>";
  echo "<td>";
  echo "</tr></td>";
  }

echo "</table>"; 

//db connection closing
mysql_close($con);
?>
</div>
<div id="Layer13">
  <div id="layer">
    <table width="1011" height="25" border="0" bordercolor="#91604E">
      <tr>
        <td width="894" height="21" bgcolor="#9CB95D"><span class="style4">Articles by me . . . </span></td>
      </tr>
    </table>
  </div>
</div>
<div id="Layer14">
<?php
$pid=$_POST['pid'];

$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

//echo $pid;
$result = mysql_query("SELECT * FROM kj_articleu where PID='$pid'");

echo "<table width='450'>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>";
  echo $row['Title'];
  echo "<td>";
  echo $row['Category'];
  echo "</td>";
  echo "<td>";
  $id=$row['ID'];
  echo "<form action='http://localhost/ExpertsBlog/blogView.php' method='post'>";
  echo "<input type='hidden' name='id' value='$id' />";
  echo "<input type='hidden' name='type' value='Article' />";
  echo "<input type='submit' name='Submit' value='View' />";
  echo "</form>";
  echo "</td>";
  echo "</tr></td>";
  }

echo "</table>"; 

//db connection closing
mysql_close($con);
?>
</div>
</body>
</html>
