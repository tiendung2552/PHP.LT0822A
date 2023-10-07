<?php
if(isset($_SESSION['ss_user'])){
    $id = $_GET['id'];
    $ct_donhang = $db -> get_join_2('ct_donhang','sanpham', 'ct_donhang','id_sanpham','ct_donhang','id_donhang', $id);
}else{

}
include "view/taikhoan/v_chitietdh.php";
?>