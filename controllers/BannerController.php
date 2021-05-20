<?php
include_once '../models/Banner.php';

class BannerController
{
    public function __construct()
    {

    }

    // danh sác
    public function index()
    {
        $banner = new Banner();
        $data = $banner->danhsach();

        include_once '../views/banner/index.php';
    }

    // Thêm
    public function create()
    {
        include_once '../views/banner/create.php';
    }

    // Sua
    public function edit()
    {
        include_once '../views/banner/edit.php';
    }
}

$banner = new BannerController();
$banner->index();
//$banner->create();
//$banner->edit();