<?php
   
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $data_donhang = $db->get_like('donhang','id_kh',$keyword) ;
    }else if($keyword=''){
            //Nếu trống thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_donhang = $db->get('donhang', array());
    }else{
         //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_donhang = $db->get('donhang', array());
    }
   
    include "view/QuanLyDonHang/QuanLyDh.php";
?>