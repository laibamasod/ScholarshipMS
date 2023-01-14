<?php

include "dbconnet.php";
class login
{
    public $d1;
    private $s1;
    private $user_name;
    private $password;
    function __construct($u,$p,$db,$std)
    {  
        $this->d1=$db;
        $this->s1=$std;
        $this->user_name=$u;
        $this->password=$p;
    }
    public function get_username()
    {
        return $this->user_name;
    }
    public function get_password()
    {
        return $this->password;
    }
   public function validate_login()
   {
        $res=$this->d1->db_valid_login($this);
        if($res)
        {
            echo 'Login Successful';
            header("Location: dashboard.php");
            $this->s1->view_student($this);
        }
        else{
            echo'Login Unsuccessful';
        }
   }

}
class student {
    private $d1;
    private $i1;
    private $students_results;
    function __construct($inf,$db)
    {
        $this->d1=$db;
        $this->i1=$inf;
      
    }
    public function view_student($l)
    {
        $students_results=$this->d1->db_view_student_dashboard($l); 
        $this->i1->get_student_details($students_results);
    }
    
}
/*

class university
{
    private $uni_id;
    private $uni_name;
    private $uni_type;
    public function get_name()
    {
        return $this->uni_name;
    }
    public function get_type()
    {
        return $this->uni_type;
    }
}
class department
{ 
    public $u1
    private $dept_id;
    private $dept_name;
    private $dept_head;
    public __construct()
    {
        $this->u1=new university();
    }
    public function get_dep_name()
    {
        return $this->dept_name;
    }
    public function get_dep_head()
    {
        return $this->dept_head;
    }
}
class program
{
    public $dep1=new department;
    private $prg_id;
    private $prg_name;
    private $prg_duration;
    public function get_prg_name()
    {
        return $this->pgr_name;
    }
    public function get_prg_duration()
    {
        return $this->prg_duration;
    }
}
class semester
{
    public $prg1=new program;
    private $sem_id;
    private $sem_session;
    private $sem_year;
    private $sem_fee;
    public function get_sem_session()
    {
        return $this->sem_session;
    }
    public function get_sem_year()
    {
        return $this->sem_year;
    }
    public function get_sem_fee()
    {
        return $this->sem_fee;
    }
}
class scholarship{
    public $u1=new university;
    private $schl_id;
    private $schl_name;
    private $schl_prg; 
    private $schl_amount;
    private $schl_duration;
    private $schl_category;
    public function get_schl_category()
    {
        return $this->schl_category;
    }
    public function get_schl_name()
    {
        return $this->schl_name;
    }
    public function get_schl_prg()
    {
        return $this->schl_prg;
    }
    public function get_schl_amount()
    {
        return $this->schl_amount;
    }
    public function get_schl_duration()
    {
        return $this->schl_duration;
    }
}
class advertisements{
    public $s1=new scholarship;
    private $adv_id;
    private $adv_publish_date;
    private $adv_closing_date;
    public function get_adv_publishdate()
    {
        return $this->adv_publish_date;
    }
    public function get_adv_closingdate()
    {
        return $this->adv_closing_date;
    }
}
class complaint{
    public $s1=new student;
    private $cmplnt_id;
    private $cmplnt_desc;
    private $cmplnt_status;
    public function get_cmplnt_desc()
    {
        return $this->fdbck_desc;
    }
    public function get_cmplnt_status()
    {
        return $this->fdbck_status;
    }
    
}
class feedback{
    public $a1=new admin;
    public $c1=new complaint;
    private $fdbck_id;
    private $fdbck_desc;
    private $fdbck_status;
    public function get_fdbck_desc()
    {
        return $this->fdbck_desc;
    }
    public function get_fdbck_status()
    {
        return $this->fdbck_status;
    }

}
class application_form{
    private $cgpa;
    private $no_sibling;
    private $father_salary;
    private $father_cnic;
    private $father_occ;
    private $perm_addr;
    private $present_addr;
  private $mother_edu;
  private $father_edu;
  private $mother_cnic;
  private $mother_occ;
  private $house_type;
private $house_del;
private $othr_income;
private $no_property;

}
class student extends login{
    private $stdnt_name;
    private $stdnt_id;
    private $stdnt_fname;
    private $stdnt_regno;
    private $stdnt_cnic;
    private $stdnt_admission_date;
    public function get_stdnt_name()
    {
        return $this->stdnt_name;
    }
    public function get_stdnt_cnic()
    {
        return $this->stdnt_cnic;
    }  public function get_stdnt_regno()
    {
        return $this->stdnt_regno;
    }
    public function get_stdnt_fname()
    {
        return $this->stdnt_fname;
    }
}
class admin extends login{
    private $admin_name;
    public function get_admin_name()
    {
        return $this->admin_name;
    }
}
*/
?>