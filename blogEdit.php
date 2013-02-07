<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experts Blog [ BLOG/ARTICLE VIEW MODE ]</title>
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
#Layer3 {	position:absolute;
	width:223px;
	height:490px;
	z-index:10;
	left: 270px;
	top: 19px;
}
#Layer4 {
	position:absolute;
	width:1005px;
	height:511px;
	z-index:15;
	left: 247px;
	top: 91px;
}
.style4 {color: #FFFFFF}
#Layer5 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:16;
}
.style5 {
	font-size: 36px;
	font-weight: bold;
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
<div id="Layer4">
  <form id="form2" name="form2" method="post" action="updateBlog.php">
    <table width="998" height="456" border="0">
      <tr>
        <td width="112" height="79" bgcolor="#9BBB58">&nbsp;</td>
        <td colspan="2"><div align="center" class="style5">
          <hr />
            <div align="center">Editor</div>
          <hr />
        </div></td>
        <td width="25" rowspan="5" bgcolor="#9BBB58">&nbsp;</td>
      </tr>
      <tr>
        <td height="26" bgcolor="#9BBB58"><div align="center"><span class="style4">Title</span></div></td>
        <td width="707"><?php 
$id=$_POST['id'];

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


echo "<input type='hidden' name='hd' value='";
echo $table."' />";

echo "<input type='hidden' name='id' value='";
echo $id."' />";

$result = mysql_query("SELECT * FROM $table where ID='$id'");


while($row = mysql_fetch_array($result))
  {
//  echo"<center><h1>". $row['Title']."</h1><hr>";
//  echo "<h3>".$row['Category']."</h3><hr></center>";
  echo "<input name='title' type='text' id='title' size='80' maxlength='50' value='";
  echo $row['Title']."' />";
  }

mysql_close($con); ?></td>
        <td width="139">
        </td>
      </tr>
      <tr>
        <td rowspan="3" align="left" valign="top" bgcolor="#9BBB58"><div align="center"><span class="style4">Details</span></div></td>
        <td height="215" colspan="2" align="left" valign="top"><?php 
$id=$_POST['id'];

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

$result = mysql_query("SELECT * FROM $table where ID='$id'");

while($row = mysql_fetch_array($result))
  {
//  echo"<center><h1>". $row['Title']."</h1><hr>";
//  echo "<h3>".$row['Category']."</h3><hr></center>";
  echo "<textarea  name='details' cols='120' rows='10' id='details'>";
  echo $row['Details']."</textarea>";
  }

mysql_close($con); ?></td>
      </tr>
      <tr>
        <td height="27">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="97">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
	
	
    <div align="center">
      <input type="submit"/>
      <input type="reset" name="Reset" value="Reset" />
    </div>
  </form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer5">
  <div id="layer">
    <table width="230" height="491" border="0">
      <tr>
        <td width="227" background="/ExpertsBlog/images/Table top.jpg" bgcolor="#FFFFFF"><div align="center"><span class="style4">My profile </span></div></td>
      </tr>
      <tr>
        <td height="231"><div align="center">
          <?php

$id=$_POST['id'];
if($_POST['type']==Article)
{
$table='kj_articleu';
}
else
{
$table='kj_blogu';
}

//echo $id.$table;
		
		//db connection establishing
		$con = mysql_connect("localhost","root","kags");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
	
		//selecting database
		mysql_select_db("expertsblog", $con);	


    	$result = mysql_query("SELECT * FROM $table where ID='$id'");

	while($row = mysql_fetch_array($result))
  	{
	$pid=$row['PID'];
	}

		$result = mysql_query("SELECT * FROM kj_profileimagesu where PID='$pid'");
	
		while($row = mysql_fetch_array($result))
		  {
		  $src=$row['SRC'];
		  $hieght=$row['Hieght'];
		  $width=$row['Width'];
		  $alt=$row['AltText'];
  		  }

echo "<img src='upload/".$src."' width='$width' height='$hieght' alt='$alt' />";

mysql_close($con);

?>
        </div></td>
      </tr>
      <tr>
        <td height="27" bgcolor="#9CB95D"><div align="center">
          <?php 

$id=$_POST['id'];
if($_POST['type']==Article)
{
$table='kj_articleu';
}
else
{
$table='kj_blogu';
}

//echo $id.$table;
		
		//db connection establishing
		$con = mysql_connect("localhost","root","kags");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
	
		//selecting database
		mysql_select_db("expertsblog", $con);	


    	$result = mysql_query("SELECT * FROM $table where ID='$id'");

	while($row = mysql_fetch_array($result))
  	{
	$pid=$row['PID'];
	}

$result = mysql_query("SELECT * FROM kj_signupu where PID='$pid'");
while($row = mysql_fetch_array($result))
  {
  $fname=$row['FirstName'];
   $lname=$row['LastName'];
//   $uname=$row['UserID'];
  }
//   setcookie("profile", $uname, time()+60*60*12);
echo "<font color='white'>".$fname." ".$lname."</font>";
//." ".$uname; 
mysql_close($con); 
?>
        </div></td>
      </tr>
      <tr>
        <td><div align="center">
          <?php 

$id=$_POST['id'];
if($_POST['type']==Article)
{
$table='kj_articleu';
}
else
{
$table='kj_blogu';
}

//echo $id.$table;
		
		//db connection establishing
		$con = mysql_connect("localhost","root","kags");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
	
		//selecting database
		mysql_select_db("expertsblog", $con);	


    	$result = mysql_query("SELECT * FROM $table where ID='$id'");

	while($row = mysql_fetch_array($result))
  	{
	$pid=$row['PID'];
	}
$result = mysql_query("SELECT * FROM kj_signupu where PID='$pid'");
while($row = mysql_fetch_array($result))
  {
  $email=$row['Email'];
  }

echo $email; 
mysql_close($con); 
 ?>
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
        <td bgcolor="#9BBB58"><div align="center">
          <form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/profileView.php">
          <?php 
			$id=$_POST['id'];
			$type=$_POST['type'];
			//echo $_POST['id'].$_POST['type'];
			echo "<input type='hidden' name='id' value='$id' />";
			echo "<input type='hidden' name='type' value='$type' />";
			echo "<input type='submit' name='Submit' value='View Profile' />";
		 ?>
          </form>
        </div></td>
      </tr>
    </table>
  </div>
</div>
<p>&nbsp;</p>
</body>
</html>
