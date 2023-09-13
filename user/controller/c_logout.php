<?php 
if(isset($_SESSION['ss_user'])){
    unset($_SESSION['ss_user']);
}
include "./view/v_trangdemo.php";
?>