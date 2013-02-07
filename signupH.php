<?php
mb_http_input("iso-8859-1");
mb_http_output("iso-8859-1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experts Blog [ SIGNUP ]</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 39px;
	top: 6px;
}
#Layer2 {
	position:absolute;
	width:431px;
	height:115px;
	z-index:1;
	left: 395px;
	top: 59px;
}
.style2 {color: #FF0000}
#Layer6 {	position:absolute;
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
#Layer8 {	position:absolute;
	width:26px;
	height:60px;
	z-index:8;
	left: 6px;
	top: 6px;
}
#Layer3 {
	position:absolute;
	width:37px;
	height:60px;
	z-index:10;
	left: 562px;
	top: 9px;
}
.style3 {
	font-size: x-small;
	color: #333333;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div id="Layer2">
  <form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/signup.php">
    <table width="424" border="0">
      <tr>
        <td colspan="4" bgcolor="#9BBC54"><div align="center" class="style4">Signup Form </div></td>
      </tr>
      <tr>
        <td width="33">&nbsp;</td>
        <td colspan="3"><div align="center"><strong>Account related information</strong></div></td>
      </tr>
      <tr>
        <td><div align="right"><span class="style2">*</span></div></td>
        <td width="145">User Id: </td>
        <td width="187"><div align="center">
          <?php $n=$_COOKIE["uname"];

echo "<input name='uname' type='text'  id='uname' value='".$n."' />"; ?>
        </div></td>
        <td width="41">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style2">*</div></td>
        <td>Password:</td>
        <td>
		  <div align="center">
		    <?php
$p=$_COOKIE["pass"];

echo "<input name='pass' type='password' id='pass' value='".$p."' />";
		?>		
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style2">*</div></td>
        <td>Confirm password: </td>
        <td><div align="center">
          <input name="passc" type="password" id="passc" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right" class="style2">*</div></td>
        <td>Your cachy line: </td>
        <td><div align="center">
          <input name="cachyLine" type="text" id="cachyLine" value="" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td colspan="3"><div align="center"><strong>Personal Information </strong></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td>First name: </td>
        <td><div align="center">
          <input name="firstName" type="text" id="firstName" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Last name: </td>
        <td><div align="center">
          <input name="lastName" type="text" id="lastName" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Email address:</td>
        <td><div align="center">
          <input name="email" type="text" id="email" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center"><span class="style3">e.g. smith@hotmail.com</span> </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Address:</td>
        <td><div align="center">
          <textarea name="address" id="address"></textarea>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td>&nbsp;</td>
        <td>Zip:</td>
        <td><div align="center">
          <input name="zipCode" type="text" id="zipCode" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Country:</td>
        <td><div align="center">
          <input name="country" type="text" id="country" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Date of Birth: </td>
        <td><div align="center">
          <input name="dateOfBirth" type="text" id="dateOfBirth" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Phone number: </td>
        <td><div align="center">
          <input name="phoneNumber" type="text" id="phoneNumber" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><div align="center">
          <input type="submit" name="Submit" value="Submit" />
        </div></td>
        <td><div align="center">
          <input type="reset" name="Submit2" value="Reset" />
        </div></td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
<div id="Layer6"><a href="http://localhost/ExpertsBlog/companyDetails.php"><img src="http://localhost/ExpertsBlog/images/companylogo.jpg" alt="i" width="46" height="42" align="left" longdesc="http://localhost/ExpertsBlog/companyDescription.php" />Company Description<br />
  Company details</a></div>
<div id="Layer12"><a href="http://localhost/ExpertsBlog/index.php">Home</a></div>
<div id="Layer1"><a href="http://localhost/ExpertsBlog/siteMap.php">Sitemap</a></div>
<div id="Layer8"><a href="http://localhost/ExpertsBlog/siteMap.php"><img src="http://localhost/ExpertsBlog//images/sitemap.gif" alt="sitemap" width="26" height="30" border="0" align="top" longdesc="http://localhost/ExpersBlog/siteMap.php" /></a></div>
<div id="Layer3"><a href="http://localhost/ExpertsBlog/index.php"><img src="http://localhost/ExpertsBlog/images/home.png" alt="map" width="35" height="31" border="0" align="bottom" longdesc="http://localhost/ExpertsBlog/index.php" /></a></div>
</body>
</html>
