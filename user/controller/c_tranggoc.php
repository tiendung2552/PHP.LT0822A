<?php
//sản phẩm nam
$data_sanphamnam=$db->get('sanpham', array('loaisanpham' => 'Áo so mi nam')); 
$data_sanphamnam1=$db->get('sanpham', array('loaisanpham' => 'Áo polo nam')); 
$data_sanphamnam2=$db->get('sanpham', array('loaisanpham' => 'Quan jeans nam')); 
//sản phẩm nữ
$data_sanphamnu=$db->get('sanpham', array('loaisanpham' => 'ao so mi nu')); 
$data_sanphamnu1=$db->get('sanpham', array('loaisanpham' => 'ao kieu nu')); 
$data_sanphamnu2=$db->get('sanpham', array('loaisanpham' => 'Quan jeans nu')); 
//sản phẩm trẻ em
$data_sanphamtreem=$db->get('sanpham', array('id_danhmuc' => '7')); 
//sản phẩm chung 
$data_sanpham=$db->get('sanpham', array('loaisanpham' => 'ao thun nam')); 
$data_sanpham1=$db->get('sanpham', array('loaisanpham' => 'ao kieu nu')); 

include "view/v_trangdemo.php";
?>