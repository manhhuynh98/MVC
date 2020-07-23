<?php
class Login extends Controller{
    public $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel");
    }

    public function Login(){
        
    }

}
?>