<?php
session_id("login");
session_start();
include "../class/database.php";
$database_object = new database();
$row = $database_object->view_admin($_SESSION["addlogin_id"]);
$name=$_POST['Name'];
$prg=$_POST['prgms'];
$amt=$_POST['amount'];
$des=$_POST['schldes'];
$sponsors= $_POST['sponsors'];
$duration= $_POST['duration'];
$prgms_pay = $_POST['prgms_pay'];
$dead=$_POST['dead'];
$category=$_POST['category'];
//$image=$_POST['image'];
$admin_id=$row['addlogin_id'];
$uni_id=$row['uni_id'];
if($database_object->insert_scholarship_in_db($admin_id,$uni_id,$name,$prg,$amt,$des,$sponsors,$duration,$prgms_pay,$dead,$category)){
  echo("Added successfully");
}else{
    echo("not Added successfully");
}

?>
