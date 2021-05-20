<?php
include_once 'models/Connection.php';

class User extends Connection
{
    public function __construct()
    {
        parent::__construct(); // kết nối CSDL thành công
    }

    public function danh_sach()
    {
        $sql = 'SELECT * FROM users';
        $ketqua =  $this->con->query($sql);

        $arrData = array(); // Mảng lưu kết quả

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $ketqua->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }

    // thêm dữ liệu
    public function add($name, $email, $pwd, $remember_token)
    {
        $sql = "INSERT INTO users (name, email, password,remember_token) VALUES ('$name', '$email', '$pwd','$remember_token')";

        $this->con->query($sql);
    }

    // lấy chi tiết
    public function detail($id)
    {
        $sql = "SELECT * FROM `users` WHERE id = $id";

        $result = $this->con->query($sql);

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $result->fetch_assoc()) {
            $nguoidung = $row;
        }

        return $nguoidung;

    }

    // hàm cập nhật dự liệu
    public function update($id, $name, $email, $pwd, $remember_token)
    {
        $sql = "UPDATE users
                SET name='$name', email='$email', password='$pwd',remember_token='$remember_token'
                WHERE id = $id";

        $this->con->query($sql);
    }

    // xóa
    public function remove($id)
    {
        $sql = "DELETE FROM users
                WHERE id = $id";

        $this->con->query($sql);
    }
}