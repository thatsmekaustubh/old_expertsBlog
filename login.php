<?php 
//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("ExpertsBlog", $con);


//executing query
$result = mysql_query("SELECT * FROM kj_loginu WHERE Uname='".$_POST['fname']."'");

//seperating password
while($row = mysql_fetch_array($result))
  {
  $pwd=$row['Pass'];
  $un=$row['Uname'];
  }
  

//checking ADMIN password
if ($pwd==$_POST['pass'] && $un=="admin")
{
session_start();
$_SESSION['fname']="admin";

//echo "Success";
//setcookie("Validity", $_POST['fname'], time()+60*60*24);
header("Location: http://localhost/ExpertsBlog/AdashBoardH.php");
echo "<p>Redirecting<br /> If not redirected click <a href='http://localhost/ExpBlog/Success.html'>here</a>";
}  



//checking password
if ($pwd==$_POST['pass'] && $un==$_POST['fname'])
{
session_start();
$_SESSION['fname']=$_POST['fname'];


//setcookie("Validity", $_POST['fname'], time()+60*60*24);
header("Location: http://localhost/ExpertsBlog/dashBoardH.php");
echo "<p>Redirecting<br /> If not redirected click <a href='http://localhost/ExpBlog/Success.html'>here</a>";
}  

if ($pwd=="")
{
setcookie("uname", $_POST['fname'], time()+10);
setcookie("pass", $_POST['pass'], time()+10);
header("Location: http://localhost/ExpertsBlog/signupH.php");
}
else
{
setcookie("passis", "*", time()+10);
header("Location: http://localhost/ExpertsBlog/loginH.php");
echo "<p>Redirecting<br /> If not redirected click <a href='http://localhost/ExpBlog/Login.html'>here</a>";
}



//db connection closing
mysql_close($con);
?>
