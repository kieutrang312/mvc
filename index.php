<?php
//echo 'mo hình mvc';
include_once 'controllers/UserController.php';
include_once 'controllers/VendorController.php';
if (isset($_GET['controller'])) { // user
    $controller = $_GET['controller'];

    if ($controller == 'user') {
        $c_user = new UserController();

        $method = $_GET['method'];
        if ($method == 'them') {

            $c_user->add(); // thêm

        } elseif ($method == 'danhsach') {
            $c_user->index(); // dach sách

        } elseif ($method == 'sua') {
            $c_user->edit();
        } elseif ($method == 'xoa') {
            $c_user->delete();
        } else {
            echo 'method không tồn tại';
        }

    } elseif ($controller == 'vendors') {
        $c_vendors = new VendorController();
        $method = $_GET['method'];
        if ($method == 'them') {
            $c_vendors->add();
        } elseif
        ($method == 'danhsach') {
            $c_vendors->index(); //danh sach
        } elseif ($method == 'sua') {
            $c_vendors->edit();
        } elseif ($method == 'xoa') {
            $c_vendors->delete();
        }
        else {
                echo 'method không tồn tại';
            }
        }

}






