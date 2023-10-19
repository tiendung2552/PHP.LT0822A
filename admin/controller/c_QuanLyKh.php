<?php
if(isset($_SESSION['ss_admin'])){
    //Kiểm tra xem có tồn tại keyword trên thanh url không
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $seach = ['name','id_user'];
        $data_taikhoan = $db->get_like_like('taikhoan',$seach,$keyword);
    }else{
        //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_taikhoan=$db->get('taikhoan', array());
    }
}else{
    header('location: ?page=login');
}
    include "./view/v_QuanLyKh.php";
?>