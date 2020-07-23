<?php
class Register extends Controller{

    public $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->model("UserModel"); 
    }
    public function Sayhi(){
        $this->view("master1",[
            "page"=>"register"
        ]);
    }

    function KhachHangDangKy(){
        //getdata
        if(isset($_POST["register"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST["email"];
            $hoten = $_POST["hoten"];
            $diachi = $_POST["diachi"];
            //insert database
            $kq = $this->UserModel->InsertNewUser($username, $password, $email, $hoten, $diachi);

            //thong bao
            $this->view("master1",[
                "page"=>"register",
                "result"=>$kq
            ]);
        }
    }
}
?>