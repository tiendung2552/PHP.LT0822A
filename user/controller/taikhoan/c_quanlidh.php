<?php
if (!isset($_SESSION['ss_user'])) {
    header('Location: login.php');
exit();

}

    $id_kh = $_SESSION['ss_id'];
    $data_ct_donhang = $db->get_like_like1('ct_donhang', 'donhang', 'khach_hang', 'id_donhang', 'id_kh', 'id_kh', $id_kh);


  
        include 'view/taikhoan/v_quanlidh.php';
  
 ?>