<?php

    $id = $_GET['id'];
    $ct_donhang = $db -> get('ct_donhang',array('id_ct' => $id));
    $sanpham = $db -> get('sanpham', array('id_sanpham' => $ct_donhang[0]['id_sanpham']));
   
include "view/taikhoan/v_chitietdh.php";
?>