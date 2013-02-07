<?php
session_start();
$na=$_SESSION['fname'];

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




//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);


//executing query to PID Proceesing
$result = mysql_query("SELECT * FROM kj_loginu where Uname='$na'");

//seperating pid
while($row = mysql_fetch_array($result))
 {
  $pid=$row['PID'];
  }
/*
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  //echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  //echo "Stored in: " . $_FILES["file"]["tmp_name"];
   

   if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
     // echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
  }
*/
//echo $pid;

mysql_query("UPDATE  `expertsblog`.`kj_signupu` SET  `FirstName` =  '$fname',
`LastName` =  '$lname',
`Email` =  '$email',
`Address` =  '$address',
`Zip` =  '$zipCode',
`Country` =  '$country',
`DateOfBirth` =  '$dateOfBirth',
`PhoneNo` =  '$phoneNumber',
`UserID` =  '$uname',
`Password` =  '$pass',
`CachyLine` =  '$cachyLine' WHERE  `kj_signupu`.`PID` =  '$pid' LIMIT 1 ;");
 
//db connection closing
mysql_close($con);

header("Location: http://localhost/ExpertsBlog/dashBoardH.php");
//}
?>