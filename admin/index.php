<?php session_start();
    include "modal/connect.php";
    $db = new database();
    $db -> connect();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'tranggoc';
    }

switch ($page) {
    case 'tranggoc':
        include "view/tranggoc.php";
        break;
    case 'trangchu':
        include "controller/trangchu.php";
        break;
    case 'login':
        include "controller/login.php";
        break;
    case 'logout':
        include "controller/logout.php";
        break;
    case 'help':
        include "controller/Help.php";
        break;
    case 'information':
        include "controller/infor-Web.php";
        break;
    case 'QuanlyDh':
        include "controller/QuanLyDonHang/QuanLyDh.php";
        break;
    case 'ct_donhang':
        include "controller/QuanLyDonHang/Ct-donhang.php";
        break;
    case 'Indonhang':
        include "controller/QuanLyDonHang/Indonhang.php";
        break;
    case 'QuanlyKh':
        include "controller/QuanLyKh.php";
        break;
    case 'DsNhanVien':
        include "controller/QuanLyNhanVien/Nhanvien.php";
        break;
    case 'Suanv':
        include "controller/QuanLyNhanVien/Suanv.php";
        break;
    case 'Themnv':
        include "controller/QuanLyNhanVien/Themnv.php";
        break;
    case 'Xoanv':
        include "controller/QuanLyNhanVien/xoanv.php";
        break;
    case 'DsSanPham':
        include "controller/QuanLySanPham/SanPham.php";
        break;
    case 'Themsp':
        include "controller/QuanLySanPham/Themsp.php";
        break;
    case 'Suasp':
        include "controller/QuanLySanPham/Suasp.php";
        break;
    case 'Xoasp':
        include "controller/QuanLySanPham/Xoasp.php";
        break;
    case 'Indonhang':
        include "controller/trangchu.php";
        break;
        
}
?>