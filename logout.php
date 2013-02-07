<?php
session_start();
unset($_SESSION['fname']);
//session_destroy();
//$_SESSION['fname']=NULL;
//setcookie("Validity", $_POST['fname'], time()-86400);
header("Location: http://localhost/ExpertsBlog/index.php");
?>