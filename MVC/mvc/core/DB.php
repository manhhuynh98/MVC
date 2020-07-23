<?php

class DB{
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "test";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        mysqli_select_db($this->con,$this->database);
        mysqli_query($this->con, "SET NAMES 'utf8'");

    }
}

?>