<?php
class Connection
{
    // Thuộc tính
    //private $servername = "127.0.0.1";
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "webshop";

    protected $con; // đại diện kết nối hiện tại đến csdl

    // Phương thức
    public function __construct()
    {
        $this->conn();
    }

    // kết nối đến csdl
    protected function conn()
    {
        $this->con = mysqli_connect($this->servername,$this->username,$this->password,$this->database);

        if (!$this->con) {
            die('Kết noi that bai');
        } else {
            // kết nối thành công và thiết lập charset
            $this->con->set_charset("utf8");
        }

        return $this->con;
    }

}