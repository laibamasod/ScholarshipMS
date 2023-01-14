<?php
include "../class../database.php";
function getAdminDetails($adddid) {
    $database = new database();
    $adminData = $database->view_admin($adddid);
    $admin = new Admin($adminData);
    return $admin;
}
function getStudentDetails($stdid) {
    $database = new database();
    $studentData = $database->view_student($stdid);
    $student = new Student($studentData);
    return $student;
}
function getprogram($stdid) {
    $database = new database();
    $programData = $database->view_student_program($stdid);
    $Program= new Program($programData);
    return $Program;
}

function getdepartment($stdid) {
    $database = new database();
    $deptData = $database->view_student_department($stdid);
    $dept = new department($deptData);
    return $dept;
}
function getuni($stdid) {
    $database = new database();
    $uniData = $database->view_student_university($stdid);
    $uni= new university($uniData);
    return $uni;
}

?>