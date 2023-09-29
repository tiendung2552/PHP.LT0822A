<?php
if(isset($_SESSION['ss_admin'])){

    $data_danhmuc = $db ->get('danhmuc',array());
    
}else{
    header('location: ?page=login');
}
    include "view/QuanLySanPham/danhmuc/v_danhmuc.php";
?>