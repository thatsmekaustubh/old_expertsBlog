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
<title>Experts Blog [ DASHBOARD ]</title>
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
	width:223px;
	height:490px;
	z-index:10;
	left: 301px;
	top: 189px;
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
	width:570px;
	height:23px;
	z-index:11;
	left: 240px;
	top: 102px;
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
	width:561px;
	height:223px;
	z-index:14;
	left: 242px;
	top: 132px;
	overflow: scroll;
}
#Layer13 {
	position:absolute;
	width:562px;
	height:25px;
	z-index:15;
	left: 241px;
	top: 362px;
}
#Layer14 {
	position:absolute;
	width:561px;
	height:200px;
	z-index:16;
	left: 242px;
	top: 392px;
	overflow: scroll;
}
.style4 {color: #FFFFFF}
#Layer15 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:17;
	left: 5px;
	top: 101px;
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
<div id="Layer2"><a href="http://localhost/ExpertsBlog/index.php"><img src="http://localhost/ExpertsBlog/images/home.gif" alt="home" width="43" height="40" border="0" align="bottom" longdesc="http://localhost/ExpertsBlog/index.php" /></a></div>
<div id="Layer4">
  <div align="right">
  <?php 
session_start();
$na=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];


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

$result = mysql_query("SELECT * FROM kj_signupu where PID='$pid'");
while($row = mysql_fetch_array($result))
  {
  $fname=$row['FirstName'];
  }

echo $fname; 
mysql_close($con); ?>
  |<a href="http://localhost/ExpertsBlog/logout.php">Logout</a></div>
</div>
<div id="Layer5">
  <table width="570" height="25" border="0" bordercolor="#91604E">
    <tr>
      <td height="21" bgcolor="#99BD53"><span class="style4">Blogs by me . . . </span></td>
    </tr>
  </table>
</div>
<div id="Layer7">
  <form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/quickPost.php">
    <table width="356" border="0">
      <tr>
        <td colspan="5" bgcolor="#9CBA56"><div align="center" class="style4"><span class="style4">Quick Post</span></div></td>
      </tr>
      <tr>
        <td width="42"><div align="center">Title</div></td>
        <td colspan="4"><input name="title" type="text" id="title" size="32" maxlength="50" />          <select name="select" size="1">
            <option value="Science" selected="selected">Science</option>
            <option value="Engineering">Engineering</option>
            <option value="Literature">Literature</option>
            <option value="Health">Health</option>
        </select></td>
      </tr>
      <tr>
        <td><div align="center">Details</div></td>
        <td colspan="4" rowspan="5"><textarea name="details" cols="47" rows="6" id="details"></textarea></td>
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
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="70"><div align="center">
            <input name="blog" type="radio" value="blog" />
        Blog</div></td>
        <td width="70"><div align="center">
            <input name="article" type="radio" value="article" />
        Article</div></td>
        <td width="71">
          <div align="center">
            <input type="reset" name="Submit2" value="Reset" />
          </div></td>
        <td width="81"><div align="center">
          <input type="submit" name="Submit" value="Post" />
        </div></td>
      </tr>
    </table>
  </form>
</div>
<div id="Layer9"></div>
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
<div id="Layer13">
  <div id="layer">
    <table width="570" height="25" border="0" bordercolor="#91604E">
      <tr>
        <td height="21" bgcolor="#9CBA56"><span class="style4">Articles by me . . . </span></td>
      </tr>
    </table>
  </div>
</div>
<div id="Layer14">
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

$result = mysql_query("SELECT * FROM kj_loginu where Uname='$na'");

while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
  }

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
  $pidis=$row['ID'];
  echo "<form action='http://localhost/ExpertsBlog/blogView.php' method='post'>";
  echo "<input type='hidden' name='pid' value='$pidis' />";
  echo "<input type='hidden' name='type' value='Article' />";
  echo "<input type='submit' name='Submit' value='View' />";
  echo "</form>";
  echo "</td>";
  echo "<td>";
  echo "<form action='http://localhost/ExpertsBlog/delete.php' method='post'>";
  echo "<input type='hidden' name='pid' value='$pidis' />";
  echo "<input type='hidden' name='type' value='Article' />";
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
<div id="Layer15">
  <div id="layer2">
    <div id="div">
      <div id="div2">
        <table width="230" height="491" border="0">
          <tr>
            <td width="227" background="/ExpertsBlog/images/top.gif" bgcolor="#FFFFFF"><div align="center"><span class="style4">My profile </span></div></td>
          </tr>
          <tr>
            <td height="231"><div align="center">
              <?php
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
	

		$result = mysql_query("SELECT * FROM kj_profileimagesu where PID='$pid'");
	
		while($row = mysql_fetch_array($result))
		  {
		  $src=$row['SRC'];
		  $hieght=$row['Hieght'];
		  $width=$row['Width'];
		  $alt=$row['AltText'];
  		  }


		echo "<img src='upload/".$src."' width='$width' hieght='$height' alt='$alt' />";
		?>
            </div></td>
          </tr>
          <tr>
            <td height="27" bgcolor="#9CB95D"><div align="center">
              <?php session_start();
$na=$_SESSION['fname'];

//$na=$_COOKIE["Validity"];


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
              <?php session_start();
$na=$_SESSION['fname'];

//$na=$_COOKIE["Validity"];


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
            <td><div align="center">
			<form action="upload_file.php" method="post" enctype="multipart/form-data">
  <div align="center">
  <input type="file" name="file" id="file" />
  <input type="submit" name="submit" value="Submit" />
  </div>
</form>
			</div></td>
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
                  <a href="http://localhost/ExpertsBlog/profileH.php">Edit Profile </a>
                </form>
            </div></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<p>&nbsp;</p>
</body>
</html>
