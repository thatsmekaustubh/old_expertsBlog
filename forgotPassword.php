<?php
//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

//Assigning values to variables
$uname=$_POST['uname'];
$cachyLine=$_POST['cachyLine'];

//executing query
$result = mysql_query("SELECT * FROM kj_signupu WHERE UserID='".$_POST['uname']."'");

//seperating password
while($row = mysql_fetch_array($result))
  {
  $uid=$row['UserID'];
  $cachyL=$row['CachyLine'];
  $pwd=$row['Password'];
  }
  mysql_close($con);

//checking password
if ($uid==$_POST['uname'] && $cachyL==$_POST['cachyLine'])
{
setcookie("pwd", $pwd, time()+10);
header("Location: http://localhost/ExpertsBlog/showPassword.php");
echo "<p>Redirecting<br /> If not redirected click <a href='http://localhost/ExpBlog/showPassword.php'>here</a>";
}  
else
{
setcookie("cachy", "*", time()+10);
header("Location: http://localhost/ExpertsBlog/forgotPasswordH.php");
}
?>