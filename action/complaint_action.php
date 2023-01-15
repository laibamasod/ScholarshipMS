<?php
session_start();
include "../class/studentclasses.php";
include "../class/interface.php";
$stdid=$_SESSION['std_id'];
$student = getStudentDetails($stdid);
$std_id=$student->get_std_id();
$std_name=$student->get_std_name();
$email = $_POST['email'];
$msg = $_POST['message'];
$type = $_POST['comp_type'];
$db=new database();
$complain = new complaint($db);
if($complain->insert_complaint($std_id,$std_name,$email,$msg,$type)){
  echo 'Success';
}else{
  echo 'fail';
}
?>
