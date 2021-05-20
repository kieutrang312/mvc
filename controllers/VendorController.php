<?php
include_once 'models/Vendor.php';

class VendorController
{
    public function __construct()
    {

    }

    // danh sach
    public function index()
    {

        $m_vendor = new Vendor();
        // Lấy dữ liệu hiển thị sang View
        $data = $m_vendor->danh_sach();


        include_once 'views/vendor/index.php';
    }

    // thêm
    public function add()
    {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $slug = $_POST['email'];
            $phone = $_POST['phone'];


            $m_vendor = new Vendor(); // Model User
            $m_vendor->add($name, $slug, $phone ); // hàm thêm trong Model

            header('Location:http://localhost/mvc-master/?method=danhsach&controller=vendors');
            exit;
        }

        include_once 'views/vendor/add.php';
    }

    // sưa
    public function edit()
    {
        $id = $_GET['id'];


        $m_vendor = new Vendor(); // gọi tới lớp model
        $data =  $m_vendor->detail($id); // chứa kết quả trả về từ model

        if (isset($_POST['name'])) {
            // Bước 1: lấy giá trị từ FORM
            $name = $_POST['name'];
            $slug = $_POST['slug'];
            $phone = $_POST['phone'];
            $remember = $_POST['remember'];


            // Bước 2 : Thao tác model -> cập nhật dữ liệu vào DB
            $m_vendor= new Vendor();
            $m_vendor->update($id, $name, $slug, $phone, $remember); // hàm thêm trong Model



            header('Location: http://localhost/mvc-master/?method=danhsach&controller=vendors');
            exit;
        }

        include_once 'views/vendor/edit.php';

    }

    // xóa
    public function delete()
    {
        $id = $_GET['id'];

        $m_vendor = new Vendor();
        $m_vendor->remove($id); // gọi hàm xóa từ model

        header('Location: http://localhost/mvc-master/?method=danhsach&controller=vendors');
        exit;
    }
}