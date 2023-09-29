<?php
if(isset($_SESSION['ss_admin'])){
    $banner = $db -> get('banner', array());
   
}else{
    header('location: ?page=login');
}
include "view/QuanLySanPham/banner/v_banner.php";
?>