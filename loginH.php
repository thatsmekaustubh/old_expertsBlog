<?php
session_start();
$na=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];
if ($na != NULL )
{
header("Location: http://localhost/ExpertsBlog/dashBoardH.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experts Blog [ LOGIN ]</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:191px;
	height:23px;
	z-index:1;
	top: 7px;
	left: 36px;
	border: 0;
	border-color: #FFFFFF;
	border-left-color: #0033FF;
}
#Layer2 {
	position:absolute;
	width:42px;
	height:48px;
	z-index:2;
	left: 561px;
	top: 8px;
}
#Layer3 {
	position:absolute;
	width:170px;
	height:61px;
	z-index:3;
	left: 401px;
	top: 60px;
}
#Layer4 {
	position:absolute;
	width:94px;
	height:301px;
	z-index:4;
	left: 1013px;
	top: 118px;
}
#Layer5 {
	position:absolute;
	width:311px;
	height:230px;
	z-index:5;
	left: 460px;
	top: 188px;
}
#Layer6 {
	position:absolute;
	width:200px;
	height:48px;
	z-index:6;
	left: 534px;
	top: 607px;
}
#Layer7 {
	position:absolute;
	width:203px;
	height:31px;
	z-index:7;
	left: 1077px;
	top: 14px;
}
body {
	background-color: #FFFFFF;
}
#Layer8 {
	position:absolute;
	width:26px;
	height:60px;
	z-index:8;
	left: 6px;
	top: 6px;
}
#Layer9 {
	position:absolute;
	width:268px;
	height:40px;
	z-index:9;
	left: 170px;
	top: 144px;
}
#Layer10 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:10;
	left: 87px;
	top: 238px;
}
#Layer11 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:10;
	left: 125px;
	top: 219px;
}
#Layer12 {
	position:absolute;
	width:54px;
	height:22px;
	z-index:9;
	left: 607px;
	top: 17px;
}
.style5 {color: #FFFFFF}
-->
</style>
<script type="text/JavaScript">
<!--


function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>
<body onload="MM_preloadImages('http://localhost/ExpertsBlog/images/blue1.jpg')">
<div id="Layer1"><a href="http://localhost/ExpertsBlog/siteMap.php">Sitemap</a></div>
<p>&nbsp;</p>
<div id="Layer2"><a href="http://localhost/ExpertsBlog/index.php"><img src="http://localhost/ExpertsBlog/images/home.png" width="35" height="31" border="0" align="bottom" longdesc="http://localhost/ExpertsBlog/index.php" /></a></div>
<div id="Layer7">
  <div align="right"></div>
</div>
<p>&nbsp;</p>
<div id="Layer3"><a href="http://localhost/ExpertsBlog/expertsBlogH.php"><img src="http://localhost/ExpertsBlog/images/Logo.jpg" width="430" height="104" border="0" /></a></div>
<div id="Layer5">
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/login.php">
    <table width="315" border="0" align="center">
      <tr>
        <td colspan="3" bordercolor="#000000" bgcolor="#9BBC54"><div align="center"><span class="style5">Login</span></div></td>
      </tr>
      <tr>
        <td width="27" bordercolor="#000000">&nbsp;</td>
        <td width="130" bordercolor="#000000"><label>User id:</label>
          &nbsp;</td>
        <td width="144" bordercolor="#000000"><input name="fname" type="text" id="fname" />
        </td>
      </tr>
      <tr>
        <td bordercolor="#000000"><div align="right">
            <?php $na=$_COOKIE["passis"];
	
echo "<font color=red>".$na."</font>";

		?>
          </div></td>
        <td bordercolor="#000000"><label>Password:</label>
          &nbsp;</td>
        <td bordercolor="#000000"><input name="pass" type="password" id="pass" /></td>
      </tr>
      <tr>
        <td bordercolor="#000000">&nbsp;</td>
        <td colspan="2" bordercolor="#000000"><div align="center"></div></td>
      </tr>
      <tr>
        <td bordercolor="#000000">&nbsp;</td>
        <td colspan="2" bordercolor="#000000" bgcolor="#FFFFFF"><div align="center"><a href="http://localhost/ExpertsBlog/forgotPasswordH.php">Forgot Password</a></div>
          <div align="center"><a href="http://localhost/ExpertsBlog/signupH.php">Sign Up</a></div></td>
      </tr>
      <tr>
        <td colspan="2" bordercolor="#000000" bgcolor="#9BBC54"><div align="center">
            <input type="submit" name="Submit" value="Submit" />
          </div></td>
        <td bordercolor="#000000" bgcolor="#9BBC54"><div align="center">
            <input type="reset" name="Submit2" value="Reset" />
          </div></td>
      </tr>
    </table>
  </form>
</div>
<div id="Layer6"><a href="http://localhost/ExpertsBlog/companyDetails.php"><img src="http://localhost/ExpertsBlog/images/companylogo.jpg" width="46" height="42" align="left" longdesc="http://localhost/ExpertsBlog/companyDescription.php" />Company Description<br />
  Company details</a></div>
<div id="Layer8"><a href="http://localhost/ExpertsBlog/siteMap.php"><img src="http://localhost/ExpertsBlog//images/sitemap.gif" alt="sitemap" width="26" height="30" border="0" align="top" longdesc="http://localhost/ExpersBlog/siteMap.php" /></a></div>
<div id="Layer12"><a href="http://localhost/ExpertsBlog/index.php">Home</a></div>
</body>
</html>
