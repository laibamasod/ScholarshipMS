<?php
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
