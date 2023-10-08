<?php
if (isset($_SESSION['ss_user'])) {
    $id_kh = $_SESSION['ss_id'];
    $donhang = $db -> get_join_3( 'donhang','khach_hang', 'donhang','tinhtrang','donhang', 'id_kh', 'id_tinhtrang' ,'khach_hang','id_user', $id_kh);
   
// var_dump($ct_donhang);
// die;
}else{
    header("Location: ?controller=login");
    exit;
}
        include 'view/taikhoan/v_quanlidh.php';
 ?>