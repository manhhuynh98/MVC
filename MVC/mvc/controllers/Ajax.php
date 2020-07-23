<?php
class Ajax extends Controller{

    public $Usermodel;

    public function __construct()
    {
        $this->Usermodel = $this->model("UserModel");
    }

    public function checkUsername(){
        $un = $_POST["un"];

        echo $this->Usermodel->checkUsername($un);
    }

}
?>