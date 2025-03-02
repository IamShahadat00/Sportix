<?php
class Db
{
    private $host = "localhost";
    private $dbname = "Sportix";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->dbname, $this->username, $this->password);

        if($this->conn->connect_error)
        {
            die("Connection Failed : ". $this->conn->connect_error);
        }
    }

    public function insertplayer($username,$password,$email,$phone,$dob,$gender,$Player_cat,$Player_role,$photo)
    {
        $sql = "INSERT INTO Player (username, email, password, dob, nationality, phone, gender, Player_cat, Player_role, photo) 
        VALUES ('$username', '$email', '$password', '$dob', '$phone', '$gender', '$Player_cat', '$Player_role', '$photo')";
        if ($this->conn->query($sql)=== TRUE)
        {
            return true;
        }else{
            return false;
        }
    }
}
?>