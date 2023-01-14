<?php
class complaint
{
    private $db;
    private $cmp_id;
    private $cmp_desc;
    private $cmp_status;
    private $cmp_type;
    private $std_id;
    private $applicant_name;
    private $applicant_email;
    //... other properties

    // constructor
    public function __construct($db,$stdid,$name,$email,$msg,$type) 
    {
    $this->db=$db;
    $this->cmp_desc=$msg;
    $this->cmp_status="pending";
    $this->cmp_type=$type;
    $this->std_id=$stdid;
    $this->applicant_name=$name;
    $this->applicant_email=$email;
    }
    public function get_cmp_id()
    {
        return $this->cmp_id;
    }
    public function get_cmp_desc()
    {
        return $this->cmp_desc;
    }
    public function get_cmp_status()
    {
        return $this->cmp_status;
    }
    public function get_cmp_type()
    {
        return $this->cmp_type;
    }
    public function get_std_id()
    {
        return $this->std_id;
    }
    public function get_name_app()
    {
        return $this->name_app;
    }
    public function get_email_app()
    {
        return $this->email_app;
    }
    public function insert_complaint($id,$name,$email,$msg,$type)
    {
        $cmp=$this->db->insert_complaint_in_db($id,$name,$email,$msg,$type);
        if (!$cmp) {
            return false;
        }
        return true;
    }
}
class department {
    private $dept_id;
    private $name;
    private $dept_head;
    private $uni_id;
   
    //... other properties

    // constructor
    public function __construct($data) 
    {
    $this->dept_id=$data['dept_id'];
    $this->name=$data['dept_name'];
    $this->dept_head=$data['dept_head'];;
    $this->uni_id_id=$data['uni_id'];
    }
    public function get_dept_id()
    {
        return $this->id;
    }
    public function get_dept_name()
    {
        return $this->name;
    }
    public function get_dept_head()
    {
        return $this->dept_head;
    }
    public function get_uni_id()
    {
        return $this->uni_id_id;
    }
}
class Program {
    private $prg_id;
    private $name;
    private $duration;
    private $dept_id;
   
    //... other properties

    // constructor
    public function __construct($data) 
    {
    $this->prg_id=$data['prg_id'];
    $this->name=$data['prg_name'];
    $this->duration=$data['prg_duration'];;
    $this->dept_id=$data['dept_id'];
    }
    public function get_prg_id()
    {
        return $this->id;
    }
    public function get_prg_name()
    {
        return $this->name;
    }
    public function get_prg_duration()
    {
        return $this->duration;
    }
    public function get_dep_id()
    {
        return $this->dept_id;
    }
}
class university {
    private $uni_id;
    private $uni_name;
    private $uni_type;
   
    //... other properties

    // constructor
    public function __construct($data) 
    {
    $this->uni_id=$data['uni_id'];
    $this->uni_name=$data['uni_name'];
    $this->uni_type=$data['uni_type'];;

    }
    public function get_uni_name()
    {
        return $this->uni_name;
    }
    public function get_uni_id()
    {
        return $this->uni_id;
    }
    public function get_uni_type()
    {
        return $this->uni_type;
    }

}
class semester{
    private $sem_id;
    private $sem_session;
    private $sem_fee;
    private $prg_id;
    private $curr_sem_date;
    //... other properties

    // constructor
    public function __construct($data) 
    {
    $this->sem_id=$data['sem_id'];
    $this->sem_session=$data['session'];
    $this->sem_fee=$data['semester_fee'];
    $this->prg_id=$data['prg_id'];
    $this->curr_sem_date=$data['current_sem_date'];
    }
    public function get_prg_id()
    {
        return $this->prg_id;
    }
    public function get_curr_sem_date()
    {
        return $this->curr_sem_date;
    }
    public function get_sem_id()
    {
        return $this->sem_id;
    }
    public function get_sem_session()
    {
        return $this->sem_session;
    }
    public function get_sem_fee()
    {
        return $this->sem_fee;
    }

}
class Student {
    private $id;
    private $name;
    private $cnic;
    private $cgpa;
    private $fathername;
    private $reg_no;
    private $add_date;
    private $sem_id;
    private $dob;
    private $province;
    private $domicile;
    private $contry;
    private $religion;
    private $add_session;
    private $pic;
    //... other properties

    // constructor
    public function __construct($data) 
    {
    $this->id=$data['std_id'];
    $this->name=$data['std_name'];
    $this->cnic=$data['std_cnic'];;
    $this->cgpa=$data['CGPA'];
    $this->fathername=$data['father_name'];
    $this->reg_no=$data['reg_no'];
    $this->add_date=$data['admission_date'];
    $this->sem_id=$data['sem_id'];
    $this->dob=$data['DOB'];
    $this->province=$data['Province'];
    $this->domicile=$data['Domicile'];
    $this->contry=$data['Birth_country'];
    $this->religion=$data['religion'];
    $this->add_session=$data['admission_session'];
    $this->pic=$data['std_pic'];
    }
    public function get_std_id()
    {
        return $this->id;
    }
    public function get_std_name()
    {
        return $this->name;
    }
    public function get_std_cnic()
    {
        return $this->cnic;
    }
    public function get_reg_no()
    {
        return $this->reg_no;
    }
    public function get_std_father()
    {
        return $this->fathername;
    }
    public function get_add_date()
    {
        return $this->add_date;
    }
    public function get_sem_id()
    {
        return $this->sem_id;
    }
    public function get_dob()
    {
        return $this->dob;
    }
    public function get_province()
    {
        return $this->province;
    }
    public function get_domicile()
    {
        return $this->domicile;
    }
    public function get_contry()
    {
        return $this->contry;
    }
    public function get_religion()
    {
        return $this->religion;
    }
    public function get_add_session()
    {
        return $this->add_session;
    }
    public function get_std_pic()
    {
        return $this->pic;
    }
}

?>
