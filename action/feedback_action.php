<?php
session_start();
include "../class/database.php";

$database_object = new database();
$row1 = $database_object->view_admin($_SESSION["addlogin_id"]);
$cmp_id=$_SESSION["complaint_id"];
$std_name = $_SESSION["complaint_name"] ;
$msg = $_POST['message'];
if($database_object->insert_feedback_in_db($row1["addlogin_id"],$std_name,$msg,$cmp_id)){
  echo("Added successfully");
}else{
    echo("not Added successfully");
}

$database_object->update_complaint_in_db($_SESSION['complaint_id']);
unset($_SESSION['complaint_id']);
unset($_SESSION['complaint_name']);
?>
