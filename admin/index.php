<?php session_start();
    include "model/connect.php";
    $db = new database();
    $db -> connect();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'tranggoc';
    }

switch ($page) {
    case 'tranggoc':
        include "view/v_tranggoc.php";
        break;
    case 'trangchu':
        include "controller/c_trangchu.php";
        break;
    case 'login':
        include "controller/c_Login.php";
        break;
    case 'logout':
        include "controller/c_logout.php";
        break;
    case 'help':
        include "view/v_Help.php";
        break;
    case 'information':
        include "view/v_infor-Web.php";
        break;
    case 'QuanlyDh':
        include "controller/QuanLyDonHang/c_QuanLyDh.php";
        break;
    case 'ct_donhang':
        include "controller/QuanLyDonHang/c_Ct-donhang.php";
        break;
    case 'Indonhang':
        include "controller/QuanLyDonHang/c_Indonhang.php";
        break;
    case 'QuanlyKh':
        include "controller/c_QuanLyKh.php";
        break;
    case 'DsNhanVien':
        include "controller/QuanLyNhanVien/c_Nhanvien.php";
        break;
    case 'Suanv':
        include "controller/QuanLyNhanVien/c_Suanv.php";
        break;
    case 'Themnv':
        include "controller/QuanLyNhanVien/c_Themnv.php";
        break;
    case 'Xoanv':
        include "controller/QuanLyNhanVien/c_xoanv.php";
        break;
    case 'DsSanPham':
        include "controller/QuanLySanPham/c_SanPham.php";
        break;
    case 'Themsp':
        include "controller/QuanLySanPham/c_Themsp.php";
        break;
    case 'Suasp':
        include "controller/QuanLySanPham/c_Suasp.php";
        break;
    case 'Xoasp':
        include "controller/QuanLySanPham/c_Xoasp.php";
        break;
    case 'ct_sanpham':
        include "controller/QuanLySanPham/c_ct_sanpham.php";
        break;
    case 'xoadh':
        include "controller/QuanLyDonHang/c_xoadh.php";
        break;
    case 'xoakh':
        include "controller/c_xoakh.php";
        break;
    case 'duyet':
        include "controller/QuanLyDonHang/c_upd_duyet.php";
        break;

    case 'indh':
        include "view/QuanLyDonHang/c_Indonhang.php";
        break;

    case 'upd_tinhtrang':
        include "controller/QuanLyDonHang/c_QuanLyDh.php";
        break;
}
?>