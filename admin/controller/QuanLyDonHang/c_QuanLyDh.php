<?php
   if(isset($_SESSION['ss_admin'])){
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $columns_search = ['name'];
        $data_donhang = $db->get_join_like('donhang','khach_hang','id_kh', $columns_search,$keyword) ;
    }else if($keyword=''){
            //Nếu trống thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_donhang = $db->get('donhang', array());
    }else{
         //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        // $data_donhang = $db->get('donhang', array());
        $data_donhang = $db->get_join_like('donhang','khach_hang','id_kh','name','','') ;
    }
}else{
    header('location: ?page=login');
}
    include "view/QuanLyDonHang/v_QuanLyDh.php";
?>