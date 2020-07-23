<?php
class SinhVienModel extends DB{
    public function getSV(){
        return "Nguyen van teo";
    }

    public function SinhVien(){
        $sql = "SELECT * FROM album1";
        $row = mysqli_query($this->con,$sql);
        $mang = array();
        while($row1 = mysqli_fetch_array($row)){
            $mang[] = $row1;
        }
        return json_encode($mang,JSON_UNESCAPED_UNICODE);
    }
}
?>