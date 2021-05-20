<?php
include_once 'models/Connection.php';

class Vendor extends Connection
{
    public function __construct()
    {
        parent::__construct(); // kết nối CSDL thành công
    }
    public function danh_sach()
    {
        $sql= 'SELECT * FROM vendors';

        $ketqua = $this->con->query($sql);

        $arrData = array(); //mảng lưu kết quả

        //sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $ketqua->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }
    public function add($name, $slug, $phone)
    {
        $sql = "INSERT INTO vendors (name, slug, phone) VALUES ('$name', '$slug', '$phone')";

        //print_r($sql);

        $this->con->query($sql);
    }


    // lấy chi tiết
    public function detail($id)
    {
        $sql = "SELECT * FROM `vendors` WHERE id = $id";

        $result = $this->con->query($sql);

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $result->fetch_assoc()) {
            $nguoiban = $row;
        }

        return $nguoiban;

    }

    // hàm cập nhật dự liệu
    public function update($id, $name, $slug, $phone)
    {
        $sql = "UPDATE vendors
                SET name='$name', slug='$slug', phone='$phone'
                WHERE id = $id";

        $this->con->query($sql);
    }

    // xóa
    public function remove($id)
    {
        $sql = "DELETE FROM vendors
                WHERE id = $id";

        $this->con->query($sql);
    }


}