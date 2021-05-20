<?php
// Model
include_once 'Connection.php';

class Banner extends Connection
{
    public function __construct()
    {
        parent::__construct(); // gọi đến hàm kết nối của lớp cha
    }

    public function danhsach()
    {
        $sql = 'SELECT id,title,slug FROM `banners`';

        $result = $this->con->query($sql);

        //$arrData = []; // Mảng lưu kết quả
        $arrData = array(); // Mảng lưu kết quả

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $result->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }

}