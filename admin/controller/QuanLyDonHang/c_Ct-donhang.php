<?php 
if (isset($_SESSION['ss_admin'])) {
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $data_ct_donhang2 = $db -> get('ct_donhang', array('id_donhang' => $id));
      
    }else{
        header('location: ?page=ct_donhang');
}  
}else{
    header('location: ?page=login');
    }   
    include "view/QuanLyDonHang/v_Ct-donhang.php";
?>