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
.style1 {color: #67604E}
.style2 {color: #FF0000}
#Layer3 {	position:absolute;
	width:733px;
	height:359px;
	z-index:11;
	left: 239px;
	top: 106px;
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
<div id="Layer3">
  <form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/update.php">
    <div>
      <table width="578" border="0" align="center">
        <tr>
          <td colspan="4" bgcolor="#DCCFAF"><div align="center"><span class="style1">My Profile</span> . . . </div></td>
        </tr>
        <tr>
          <td width="111" rowspan="6"><br /></td>
          <td width="42"><div align="right" class="style2">*</div></td>
          <td width="175">User Id: </td>
          <td width="232" rowspan="3"><div>
            <?php
		//session_start();
$na=$_COOKIE["name"];
echo $na;
//$_SESSION['fname']; 

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_signupu where UserID='$na'");

//echo $result."res";

while($row = mysql_fetch_array($result))
  {
echo "<table>";
  echo "<tr>";
  echo "<input name='uname' type='text'  id='uname' value='".$row['UserID']."' readonly/>";
  echo "</tr>";
  echo "<tr>";
  echo "<input name='pass' type='password'  id='' value='".$row['Password']."' />";
  echo "</tr>";
  echo "<tr>";
  echo "<input name='cachyLine' type='text'  id='' value='".$row['CachyLine']."' />";
  echo "</tr>";
echo "</table>";
  }

//db connection closing
mysql_close($con);
		
		?>
          </div></td>
        </tr>
        <tr>
          <td><div align="right" class="style2">*</div></td>
          <td>Password:</td>
        </tr>
        <tr>
          <td><div align="right" class="style2">*</div></td>
          <td>Your cachy line: </td>
        </tr>
        <tr>
          <td><div align="right"></div></td>
          <td colspan="2"><div align="center"><strong>Personal Information</strong></div></td>
        </tr>
        <tr>
          <td><div align="left"></div></td>
          <td><div align="left">First name: </div></td>
          <td rowspan="9"><div>
            <?php
		session_start();
$na=$_SESSION['fname']; 

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_signupu where UserID='$na'");

while($row = mysql_fetch_array($result))
  {
echo "<table>";
  echo "<tr><td>";
  echo "<input name='firstName' type='text'  id='' value='".$row['FirstName']."' />";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<input name='lastName' type='text'  id='' value='".$row['LastName']."' />";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<input name='email' type='text'  id='' value='".$row['Email']."' />";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "e.g. smith@hotmail.com";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<textarea name='address'  id='' >".$row['Address']."</textarea>";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<input name='zipCode' type='text'  id='' value='".$row['Zip']."' />";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<input name='country' type='text'  id='' value='".$row['Country']."' />";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<input name='dateOfBirth' type='text'  id='' value='".$row['DateOfBirth']."' />";
  echo "</td></tr>";
  echo "<tr><td>";
  echo "<input name='phoneNumber' type='text'  id='' value='".$row['PhoneNo']."' />";
  echo "</td></tr>";
echo "</table>";
  }

//db connection closing
mysql_close($con);
		
		?>
          </div></td>
        </tr>
        <tr>
          <td><div align="left"></div></td>
          <td><div align="left">Last name: </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left">Email address:</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left"></div></td>
        </tr>
        <tr>
          <td height="45">&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left">Address:</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left">Zip:</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left">Country:</div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left">Date of Birth: </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="left"></div></td>
          <td><div align="left">Phone number: </div></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="2"><!-- <div align="center"><label for="file">Filename:</label>
<input type="file" name="file" id="file" /> </div>
--></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Submit" />
          </div></td>
          <td><div align="center">
            <input type="reset" name="Submit2" value="Reset" />
          </div></td>
        </tr>
        <tr>
          <td colspan="4"><div align="left"></div></td>
        </tr>
      </table>
    </div>
  </form>
</div>
<p>&nbsp;</p>
</body>
</html>
