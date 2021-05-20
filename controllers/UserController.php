<?php
include_once 'models/User.php';

class UserController
{
    public function __construct()
    {
        //echo 'ham khoi tao cua UserController';
    }

    // danh sach
    public function index()
    {
        // goi Model User
        $m_user = new User();
        // Lấy dữ liệu hiển thị sang View
        $data = $m_user->danh_sach();

        // gọi View User
        include_once 'views/user/index.php';
    }

    // thêm
    public function add()
    {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $remember = $_POST['remember'];

            $m_user  = new User(); // Model User
            $m_user->add($name, $email, $pwd, $remember); // hàm thêm trong Model

            header('Location:http://localhost/mvc-master/?method=danhsach&controller=user');
            exit;
        }

        include_once 'views/user/add.php';
    }

    // sưa
    public function edit()
    {
        $id = $_GET['id'];

        // lấy chi tiết user có id = 8
        $m_user = new User(); // gọi tới lớp model
        $data = $m_user->detail($id); // chứa kết quả trả về từ model

        if (isset($_POST['name'])) {
            // Bước 1: lấy giá trị từ FORM
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            $remember = $_POST['remember'];

            // Bước 2 : Thao tác model -> cập nhật dữ liệu vào DB
            $m_user  = new User(); // Model User
            $m_user->update($id, $name, $email, $pwd, $remember); // hàm thêm trong Model

            //$data = $m_user->detail($id);

            header('Location: http://localhost/mvc-master/?method=danhsach&controller=user');
            exit;
        }

        include_once 'views/user/edit.php';

    }

    // xóa
    public function delete()
    {
        $id = $_GET['id'];

        $m_user = new User();
        $m_user->remove($id); // gọi hàm xóa từ model

        header('Location: http://localhost/mvc-master/?method=danhsach&controller=user');
        exit;
    }
}