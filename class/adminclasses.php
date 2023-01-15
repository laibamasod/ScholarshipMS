<?php
class feedback
{
    private $db;
    private $addlogin_id;
    private $cmp_id;
    private $feed_decs;
    private $std_name;
    //... other properties

    // constructor
    public function __construct($db) 
    {
        $this->db=$db;
    }
    public function get_add_id()
    {
        return $this->addlogin_id;
    }
    public function get_cmp_id()
    {
        return $this->cmp_id;
    }
    public function get_feed_decs()
    {
        return $this->feed_decs;
    }
    public function get_std_name()
    {
        return $this->std_name;
    }
    public function get_feedback($db)
    {
        $data=$db->get_all_complaints(); 
        
        $this->cmp=$data;
        return  $this->cmp; 
    }
    public function insert_feedback($addid,$cmp_id,$name,$feedmsg)
    {
        $feed=$this->db->insert_feedback_in_db($addid,$name,$feedmsg,$cmp_id);
        if (!$feed) {
            return false;
        }
        return true;
    }
}
class Admin {
    private $id;
    private $name;
    private $uni_id;
    //... other properties

    // constructor
    public function __construct($data) 
    {
    $this->id=$data['addlogin_id'];
    $this->name=$data['admin_name'];
    $this->cnic=$data['uni_id'];;
    }
    public function get_addlogin_id()
    {
        return $this->addlogin_id;
    }
    public function get_admin_name()
    {
        return $this->name;
    }
    public function get_uni_id()
    {
        return $this->uni_id;
    }
}

?>
