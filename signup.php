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
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$address=$_POST['address'];
$zipCode=$_POST['zipCode'];
$country=$_POST['country'];
$dateOfBirth=$_POST['dateOfBirth'];
$phoneNumber=$_POST['phoneNumber'];

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$cachyLine=$_POST['cachyLine'];

//executing query to PID Proceesing
$result = mysql_query("SELECT * FROM kj_loginu");

//checking if field are left null
//if ($uname=" " && $pass=" " && $cachyLine=" ")
//{
//header("Location: http://localhost/ExpertsBlog/signupH.php");
//}
//else
//{
//seperating password
while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
  }
$pid=$pid+1;

//Insert uid, pid and password
mysql_query("INSERT INTO `expertsblog`.`kj_loginu` (`Uname`, `Pass`, `RememberMe`, `IP`, `LoginTime`, `LogoutTime`, `PID`) VALUES ('$uname', '$pass', '', '', '', '', '$pid');");

//Query for inserting form data into database
mysql_query("INSERT INTO `expertsblog`.`kj_signupu` (`PID`, `FirstName`, `LastName`, `Email`, `Address`, `Zip`, `Country`, `DateOfBirth`, `PhoneNo`, `UserID`, `Password`, `CachyLine`) VALUES ('$pid','$fname', '$lname', '$email', '$address', '$zipCode', '$country', '$dateOfBirth', '$phoneNumber', '$uname', '$pass', '$cachyLine');");

//mysql_query("INSERT INTO `expertsblog`.`kj_sessions` (`PID`, `sessionName`, `sessionValue`, `IP`, `dateTime`) VALUES ('$pid', '', '', '', '');");

//Query to set profile pic
//mysql_query("INSERT INTO 'expertsblog'.'kj_profileimagesu' ('PID`, `SRC`, `Hieght`, `Width`, `AltText`) VALUES ('$pid', 'single user.png', '85', '98', 'User Photo');");
 
 
mysql_query("INSERT INTO `expertsblog`.`kj_profileimagesu` (`PID`, `SRC`, `Hieght`, `Width`, `AltText`) VALUES ('$pid', 'single user.png', '196', '214', 'User Photo');");
 
 
//db connection closing
mysql_close($con);

header("Location: http://localhost/ExpertsBlog/loginH.php");
//}
?>