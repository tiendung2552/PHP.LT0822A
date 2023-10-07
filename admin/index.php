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
    //trang chưa đăng nhập
    case 'tranggoc':
        include "view/v_tranggoc.php";
        break;
    //trang đã đăng nhập
    case 'trangchu':
        include "controller/c_trangchu.php";
        break;
    //trang đăng nhập
    case 'login':
        include "controller/c_Login.php";
        break; 
    //đăng xuất
    case 'logout':
        include "controller/c_logout.php";
        break;
    //trang thông tin hỗ trợ và giới thiệu
    case 'help':
        include "view/v_Help.php";
        break;
    case 'information':
        include "view/v_infor-Web.php";
        break;
    //Trang quản lý đơn hàng
    //Đơn hàng
    case 'QuanlyDh':
        include "controller/QuanLyDonHang/donhang/c_QuanLyDh.php";
        break;
    case 'themdh':
        include "controller/QuanLyDonHang/donhang/c_themdh.php";
        break;
     case 'suadh':
        include "controller/QuanLyDonHang/donhang/c_suadh.php";
        break;
    case 'xoadh':
        include "controller/QuanLyDonHang/donhang/c_xoadh.php";
        break;
    case 'duyet':
        include "controller/QuanLyDonHang/c_upd_duyet.php";
        break;
    //Chi tiết đơn hàng   
    case 'ct_donhang':
        include "controller/QuanLyDonHang/ct_donhang/c_Ct-donhang.php";
        break;
    case 'Indonhang':
        include "controller/QuanLyDonHang/ct_donhang/c_Indonhang.php";
        break;
    case 'In':
        include "controller/QuanLyDonHang/ct_donhang/c_In.php";
    //trang quản lý khách hàng
    case 'QuanlyKh':
        include "controller/c_QuanLyKh.php";
        break;
    case 'khachmuahang':
        include "controller/c_khachmuahang.php";
        break;    
    case 'xoakh':
        include "controller/c_xoakh.php";
        break;
    //trang quản lý nhân viên 
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
    //trang quản lý sản phẩm, banner, danh muc
    //banner
    case 'banner':
        include "controller/QuanLySanPham/banner/c_banner.php";
        break;
    case 'upd_banner':
        include "controller/QuanLySanPham/banner/c_upd_banner.php";
        break;
    //danhmuc
    case 'danhmuc':
        include "controller/QuanLySanPham/danhmuc/c_danhmuc.php";
        break;
    case 'add_danhmuc':
        include "controller/QuanLySanPham/danhmuc/c_add_danhmuc.php";
        break;
    case 'up_danhmuc':
        include "controller/QuanLySanPham/danhmuc/c_up_danhmuc.php";
        break;
    case 'dell_danhmuc':
        include "controller/QuanLySanPham/danhmuc/c_dell_danhmuc.php";
        break;
    //sanpham
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
   
}
?>