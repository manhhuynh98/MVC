<?php
class Home extends Controller{
    public $SinhvienModel;

    public function __construct()
    {
        $this->SinhvienModel = $this->model("SinhVienModel");
    }
    public function SayHi(){
        //view
        $this->view("master1", [
            "page"=>"contast",
            "sv"=>$this->SinhvienModel->SinhVien()
        ]);
        //var_dump($this->model("SinhVienModel")->SinhVien());
    }
    
    public function Show(){
        $this->view("master1", [
            "page"=>"news",
            "SV"=>$this->SinhvienModel->SinhVien()
        ]);
    }
}
?>