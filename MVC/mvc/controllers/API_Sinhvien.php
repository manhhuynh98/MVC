<?php
class API_Sinhvien extends Controller{
    public function DanhSach(){
        $sinhvien = $this->model("SinhVienModel");
        $sv = $sinhvien->SinhVien();
        $mang = [];

        while($s = mysqli_fetch_array($sv)){
            array_push($mang, new SinhVien(
                $s["ID"], 
                $s["NAME"], 
                $s["AGE"]
            ));
        }
        echo json_encode($mang);
    }
}

class SinhVien extends Controller{
    public $ID;
    public $NAME;
    public $AGE;


    public function __construct($id, $name, $age){
        $this->ID = $id;
        $this->NAME = $name;
        $this->AGE = $age;
    }
}
?>