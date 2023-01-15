<?php
include "../class/database.php";
class login
{
    private $db;
    private $email;
    private $password;
    public function __construct($u, $p)
    {
        $this->db=new database();
        $this->email=$u;
        $this->password=$p;
    }
    public function get_user()
    {
        return $email;
    }
    public function get_pass()
    {
        return $password;
    }
    public function checkvalidstudent($e,$p){
        $student=$this->db->check_for_valid_login_student($e,$p);
        if (!$student) {
            return false;
        }
        return $student;
    }
    public function checkvalidadmin($e,$p) {
        $admin=$this->db->check_for_valid_login_admin($e,$p);
        if (!$admin) {
            return false;
        }
        return $admin;
    }

    public function startSessionadmin($admin) {
            session_start();
            $_SESSION["addlogin_id"] = $admin["addlogin_id"];
    }
    public function startSessionstudent($student) {
        session_start();
        $_SESSION["std_id"] = $student["std_id"];
}
}
?>