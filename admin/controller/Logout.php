<?php 
if(isset($_SESSION['ss_admin'])){
    unset($_SESSION['ss_admin']);
}
include "./view/tranggoc.php";
?>