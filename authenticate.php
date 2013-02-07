<?php
session_start();
if(isset($_SESSION['fname']))
{
header("Location: http://localhost/ExpertsBlog/dashBoardH.php");
}
?>