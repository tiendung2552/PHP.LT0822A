<?php 
if(isset($_SESSION['ss_admin'])){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $ct_sanpham = $db -> get('sanpham',array('id_sanpham' => $id));
        $ct_danhmuc=$db->get('danhmuc',array('id_danhmuc'=>$ct_sanpham[0]['id_danhmuc']));
    }   
    include "./view/QuanLySanPham/v_chitietsp.php"; 

}else {
    header('location: ?page=login');
}
?>