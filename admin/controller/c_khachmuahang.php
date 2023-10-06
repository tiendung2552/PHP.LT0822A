<?php
if(isset($_SESSION['ss_admin'])){
    //Kiểm tra xem có tồn tại keyword trên thanh url không
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $seach = ['name'];
        $data_khachhang = $db->get_like_like('khach_hang',$seach,$keyword);
    }else{
        //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_khachhang=$db->get('khach_hang', array());
    }
}else{
    header('location: ?page=login');
}
    include "./view/v_khachmuahang.php";
?>