<?php
    //Kiểm tra xem có tồn tại keyword trên thanh url không
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $data_sanpham = $db->get_like('sanpham','loaisanpham',$keyword) ;
    }else if($keyword=''){
            //Nếu trống thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_sanpham = $db->get('sanpham', array());
    }else{
         //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_sanpham = $db->get('sanpham', array());
    }

    include "./view/QuanLySanPham/SanPham.php";
?>