<?php
if (!isset($_SESSION['ss_user'])) {
    header('Location: login.php');
exit();

}
    $id_kh = $_SESSION['ss_id'];
    $ct_donhang = $db -> get_join_like('ct_donhang', 'donhang', 'khach_hang', 'tinhtrang','donhang','donhang','id_donhang', 'id_kh', 'id_tinhtrang' ,'khach_hang','id_user', $id_kh);
// var_dump($ct_donhang);
// die;
        include 'view/taikhoan/v_quanlidh.php';
  
 ?>