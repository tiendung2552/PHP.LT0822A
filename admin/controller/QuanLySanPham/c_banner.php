<?php
if(isset($_SESSION['ss_admin'])){
    $banner = $db -> get('banner', array());
   
}else{
    header('location: ?page=login');
}
include "view/QuanLySanPham/v_banner.php";
?>