<?php
class UserModel extends DB{
    public function InsertNewUser($username, $password, $email, $hoten, $diachi){
        $sql = "INSERT INTO `register` VALUES (null, '$username', '$password', '$email', '$hoten', '$diachi')";
        $result = false;
        if(mysqli_query($this->con,$sql)){
            $result = true;
        }

        return json_encode($result);
    }

    public function checkUsername($un){
        $sql = "SELECT id FROM register WHERE username = '$un'";
        $row = mysqli_query($this->con,$sql);
        $kq = true;
        if(mysqli_num_rows($row)>0){
            $kq = false;
        }
        return $kq;
    }

    public function loGin($user, $pass){
        $sql = "SELECT `id` FROM `register` WHERE `username`=$user,`password`=$pass";
        $row = mysqli_query($this->con,$sql);
        $kq = false;
        if(mysqli_num_rows($row)>0){
            $kq = true;
        }
    }
}
?>