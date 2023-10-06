<?php
if(isset($_SESSION['ss_admin'])){
    $id = $_GET['id'];
    $data_ct_donhang = $db ->get('donhang', array('id_donhang' => $id));
    $data_indonhang = $db -> get_join_4('ct_donhang', 'donhang', 'ct_donhang', 'khach_hang', 'donhang', 'sanpham', 'ct_donhang', 'id_donhang', 'id_kh', 'id_sanpham', 'donhang','id_donhang', $id);
    // var_dump($data_ct_donhang);
    // die;
}else{
    header("location: ?page=login");
}
    include "./view/QuanLyDonHang/ct_donhang/v_Indonhang.php";
?>