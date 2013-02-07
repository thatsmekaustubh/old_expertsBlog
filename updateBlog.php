<?php
$title=$_POST['title'];
$content=$_POST['details'];
$hd=$_POST['hd'];
$id=$_POST['id'];

/* echo $id;
echo $hd;
echo $title;
echo $content; */


$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);


//executing query to PID Proceesing
mysql_query("UPDATE `expertsblog`.`kj_blogu` SET `Title` = '$title',
`Details` = '$content' WHERE `kj_blogu`.`ID` =$id LIMIT 1 ;");

mysql_close($con);

header("Location: http://localhost/ExpertsBlog/dashBoardH.php");

?>
