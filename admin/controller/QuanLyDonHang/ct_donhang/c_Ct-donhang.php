<?php 
if (isset($_SESSION['ss_admin'])) {
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data_ct_dh = $db ->get('donhang', array('id_donhang' => $id));
    $data_chitiet = $db -> get_join_4('ct_donhang', 'donhang', 'ct_donhang', 'khach_hang', 'donhang', 'sanpham', 'ct_donhang', 'id_donhang', 'id_kh', 'id_sanpham', 'donhang','id_donhang', $id);
    // var_dump($data_chitiet);
    // die;
        
    }else{
        header('location: ?page=ct_donhang');
}  

}else{
    header('location: ?page=login');
    }   
    include "view/QuanLyDonHang/ct_donhang/v_Ct-donhang.php";
?>