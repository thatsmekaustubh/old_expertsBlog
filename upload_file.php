<?php


session_start();
$n=$_SESSION['fname'];
//$na=$_COOKIE["Validity"];
if ($n == NULL )
{
header("Location: http://localhost/ExpertsBlog/accessDenied.php");
}

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
  
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      }
    }
	
	$filename=$_FILES["file"]["name"];
//selecting database
mysql_select_db("expertsblog", $con);


$result = mysql_query("SELECT * FROM kj_loginu where Uname='$n'");

while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
  }



$result = mysql_query("UPDATE  `expertsblog`.`kj_profileimagesu` SET  `SRC` =  '$filename' WHERE  `kj_profileimagesu`.`PID` ='$pid' LIMIT 1 ");

//db connection closing
mysql_close($con);

header("Location: http://localhost/ExpertsBlog/dashBoardH.php");
?>