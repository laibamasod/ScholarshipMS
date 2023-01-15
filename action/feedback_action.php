<?php
session_start();
include "../class/adminclasses.php";
include "../class/interface.php";
$addid=$_SESSION['addlogin_id'];

if(isset($_SESSION['cmpid'])){
  $cmpid= $_SESSION['cmpid'];
  }
  if(isset($_SESSION['cmpname'])){
  $name = $_SESSION['cmpname'];
  }
  
$feed=$_POST['message'];
$db=new database();
$feedback = new feedback($db);
if($feedback->insert_feedback($addid,$cmpid,$name,$feed)){
  echo 'Success';
}else{
  echo 'fail';
}
?>
