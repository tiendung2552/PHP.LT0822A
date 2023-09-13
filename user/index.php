<?php 
    session_start();
    include 'model/m_database.php';
    $db = new database();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
else{
    $controller = 'demo';}

    switch ($controller){
        case 'demo':
            include 'view/v_trangdemo.php';
            break;

        case 'trangchu':
            include 'controller/c_trangchu.php';
            break;

        case 'sign':
                include 'controller/c_sign.php';
                break;

        case 'login':
            include 'controller/c_login.php';
            break;

        case 'logout':
            include 'controller/c_logout.php';
            break;

        case 'tttk':
            include 'controller/taikhoan/c_thongtintk.php';
            break;

        case 'sodiachi':
            include 'controller/taikhoan/c_sodiachi.php';
            break;

        case 'update':
            include 'controller/taikhoan/c_thongtintk.php';
            break;

        case 'quanlidh':
            include 'controller/taikhoan/c_quanlidh.php';
            break;

        case 'xoadh':
            include 'controller/taikhoan/c_xoadh.php';
            break;

        case 'spnu':
            include 'controller/c_spnu.php';
            break;  

         case 'spnam':
            include 'controller/c_spnam.php';
            break;

        case 'sptreem':
            include 'controller/c_sptreem.php';
            break;  

        case 'product':
            include 'controller/c_product.php';
                break;
       
        case 'giohang':
            include 'view/giohang/v_Giohang.php';
                break;

         case 'addcart':
            include 'controller/giohang/c_Giohang.php';
                break;

        case 'changecart':
            include 'controller/giohang/c_Giohang.php';
             break;
        case 'dell':
            include 'controller/giohang/c_Giohang.php';
            break;

        case 'payment':
            include 'controller/giohang/c_payment.php';
                break;

        case 'complete':
            include 'controller/giohang/c_complete.php';
                break;
                           
    }
    
?>
