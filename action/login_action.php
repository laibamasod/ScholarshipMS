<?php
include "../class/loginclass.php";
$email = $_POST['email'];
$pass = $_POST['psw'];
$log = new login($email,$pass);
if($std=$log->checkvalidstudent($email,$pass)){
  $log->startSessionstudent($std);
  header("Location: ../frontend/dashboard.php");
}
else if($admin=$log->checkvalidadmin($email,$pass)){
  $log->startSessionadmin($admin);
  header("Location: ../frontend/admindashboard.php");
}else{
 header("Location: ../frontend/login.php");
}
?>