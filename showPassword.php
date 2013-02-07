<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Experts Blog [ SHOW PASSWORD ]</title>
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
#Layer3 {	position:absolute;
	width:801px;
	height:253px;
	z-index:10;
	left: 201px;
	top: 108px;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
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
<div id="Layer3">
  <p><strong> Forgot your password:</strong></p>
  <hr />
  <p>You just now 
    to entered your cachy statement that you had entered while you signed up for the Experts Blog account &amp; your User ID and both are correct so your password is: </p>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="http://localhost/ExpertsBlog/forgotPassword.php">
    <table width="335" border="0" align="center">
      <tr>
        <td colspan="3" bgcolor="#9BBC54"> <div align="center"><span class="style1">Forgot Password</span></div>
        <div align="center"></div></td>
      </tr>
      <tr>
        <td width="26">&nbsp;</td>
        <td width="255">&nbsp;</td>
        <td width="40"><div align="center"></div></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><div align="center">
          <?php 
		  $na=$_COOKIE["pwd"];
		  echo "<font color=red>".$na."</font>"; ?>
        </div></td>
        <td><div align="center"></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
</body>
</html>
