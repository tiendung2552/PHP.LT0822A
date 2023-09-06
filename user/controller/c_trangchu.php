<?php 

    $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'Áo so mi nam')); 
    $data_sanpham1=$db->get('sanpham', array('loaisanpham' => 'Áo thun nu')); 
    $data_sanpham2=$db->get('sanpham', array('id_danhmuc' => '7')); 

    include 'view/v_trangchu.php';
?>