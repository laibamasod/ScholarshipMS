<?php
class database
{ 
    public function check_for_valid_login_admin($email,$password)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM admin WHERE addlogin_id=:email AND password=:pass";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":email",$email);
        $stat->bindValue(":pass",$password);
        $stat->execute();
        if($result = $stat->fetch()){
            return $result;
        }

    }
    public function check_for_valid_login_student($email,$password)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM student WHERE reg_no=:email AND password=:pass";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":email",$email);
        $stat->bindValue(":pass",$password);
        $stat->execute();
        if($result = $stat->fetch()){
            return $result;
        }
    }
    public function view_admin($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM admin WHERE addlogin_id=:id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
        $stat->execute();
        if($result = $stat->fetch()){
            return $result;
        }
    }
    public function view_student($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM student WHERE std_id=:id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
        $stat->execute();
        if($result = $stat->fetch()){
            return $result;
        }else{
            return false;
        }
    }
    public function view_student_program($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM program
                    INNER JOIN semester ON program.prg_id = semester.prg_id
                    INNER JOIN student ON semester.sem_id = student.sem_id
                    WHERE student.std_id = :id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->execute();
        if($result = $stat->fetch())
        {
            return $result;
        }
    }
    public function view_student_department($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM department
                    INNER JOIN program ON  department.dept_id = program.dept_id
                    INNER JOIN semester ON program.prg_id = semester.prg_id
                    INNER JOIN student ON semester.sem_id = student.sem_id
                    WHERE student.std_id = :id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->execute();
        if($result = $stat->fetch())
        {
            return $result;
        }
    }
    public function view_student_university($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM university
                    INNER JOIN department ON  university.uni_id = department.uni_id
                    INNER JOIN program ON  department.dept_id = program.dept_id
                    INNER JOIN semester ON program.prg_id = semester.prg_id
                    INNER JOIN student ON semester.sem_id = student.sem_id
                    WHERE student.std_id = :id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id", $id);
        $stat->execute();
        if($result = $stat->fetch())
        {
            return $result;
        }
    } 
    public function view_student_semester($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM student WHERE std_id=:id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
        $stat->execute();
        if($result = $stat->fetch()){
            $sql = "SELECT * FROM semester WHERE sem_id=:semid";
            $stat = $pdo->prepare($sql);
            $stat->bindValue(":semid",$result["sem_id"]);
            $stat->execute();
            if($result=$stat->fetch()){
                    return $result;
                }
                else{
                    return false;
        }
        }
    }
    public function get_all_complaints()
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
            $sql = "SELECT * FROM complaint";
            $stat = $pdo->prepare($sql);
            $stat->execute();
            if($result=$stat->fetchall()){
              
                    return $result;
                }
                else{
                    return false;
        }
    }
    public function get_feedback($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM feedback WHERE cmp_id=:id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
        $stat->execute();
            if($result=$stat->fetch()){
              
                    return $result;
                }
                else{
                    return false;
        }
    }

    public function get_student_complaint($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM student WHERE std_id=:id";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
        $stat->execute();
        if($result = $stat->fetch()){
            $sql = "SELECT * FROM complaint WHERE std_id=:stdid";
            $stat = $pdo->prepare($sql);
            $stat->bindValue(":stdid",$result["std_id"]);
            $stat->execute();
            if($result=$stat->fetch()){
                    return $result;
                }
                else{
                    return false;
        }
        }
    }
    public function insert_complaint_in_db($id,$name,$email,$msg,$type)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $data = [
            'cmp_desc'=>$msg,
            'status'=>"pending",
            'std_id'=>$id,
            'cmp_type'=>$type,
            'name_app'=>$name,
            'email_app'=>$email,
        ];
        $sql = "INSERT INTO complaint (cmp_desc,status,std_id,cmp_type,name_app,email_app)
         VALUES (:cmp_desc,:status,:std_id,:cmp_type,:name_app,:email_app)";
        $stmt= $pdo->prepare($sql);
        
       if ($stmt->execute($data)) {
       return true;
        } else {
       return false;
        }
         }
         public function update_complaint_in_db($id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "UPDATE complaint SET status='resloved' WHERE cmp_id=:id";
        $stat= $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
       if ($stat->execute()) {
       return true;
        } else {
       return false;
        }
         }
         public function insert_feedback_in_db($add_id,$std_name,$msg,$cmp_id)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $data = [
           'feed_decs'=>$msg,
           'cmp_id'=>$cmp_id,
           'addlogin_id'=>$add_id,
           'std_name'=>$std_name,

        ];
        $sql = "INSERT INTO feedback (feed_decs,cmp_id,addlogin_id,std_name)
         VALUES (:feed_decs,:cmp_id,:addlogin_id,:std_name)";
        $stmt= $pdo->prepare($sql);
        
       if ($stmt->execute($data)) {
       return true;
        } else {
       return false;
        }
         }
         public function insert_scholarship_in_db($admin_id,$uni_id,$name,$prg,$amt,$des,$sponsors,$duration,$prgms_pay,$dead,$category)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $data = [
            'schl_name'=>$name,
            'program'=>$prg,
            'schl_amount'=>$amt,
            'schl_duration_yrs'=>$duration,
            'schl_des'=>$des,
            'schl_sponsor'=>$sponsors,
            'paidby'=>$prgms_pay ,
            'deadline'=>$dead,
            'category'=>$category,
            //'schl_pic'=>$image,
            'admin_id'=>$admin_id,
            'uni_id'=>$uni_id,
        ];
        $sql = "INSERT INTO scholarship (schl_name,schl_amount,schl_duration_yrs,uni_id,program,category,admin_id,paidby,deadline,schl_des,schl_sponsor)
         VALUES (:schl_name,:schl_amount,:schl_duration_yrs,:uni_id,:program,:category,:admin_id,:paidby,:deadline,:schl_des,:schl_sponsor)";
        $stmt= $pdo->prepare($sql);
        if ($stmt->execute($data)) {
       return true;
        } else {
       return false;
        }
    }
    public function get_scholarships($id,$name)
    {
        require_once('../connectivity/config.inc.php');
        $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = "SELECT * FROM scholarship WHERE uni_id=:id AND program=:name";
        $stat = $pdo->prepare($sql);
        $stat->bindValue(":id",$id);
        $stat->bindValue(":name",$name);
        $stat->execute();
        if($result=$stat->fetchall()){
                    return $result;
                }
                else{
                    return false;
        }
        }
    }


?>