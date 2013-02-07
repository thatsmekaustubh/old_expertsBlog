<?php
$na=$_COOKIE["Validity"];

if ($na == NULL)
{
header("Location: http://localhost/ExpertsBlog/accessDenied.php");
}

//db connection establishing
$con = mysql_connect("localhost","root","kags");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//selecting database
mysql_select_db("expertsblog", $con);

$result = mysql_query("SELECT * FROM kj_loginu where Uname='$na'");

while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
  }

$result = mysql_query("SELECT * FROM kj_loginu where Uname='$na'");

while($row = mysql_fetch_array($result))
  {
  $pid=$row['PID'];
  }

$result = mysql_query("SELECT * FROM kj_articleu where PID='$pid'");
echo "<table width='550'>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr><td>";
  echo $row['Title'];
  echo "<td>";
  echo $row['Category'];
  echo "</td>";
  echo "</tr></td>";
  }

echo "</table>"; 

//db connection closing
mysql_close($con);
?>