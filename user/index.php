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

        case 'spnu':
            include 'controller/c_spnu.php';
            break;  

         case 'spnam':
            include 'controller/c_spnam.php';
            break;  

        case 'product':
            include 'view/v_product.php';
                break;
       
        case 'giohang':
            include 'controller/giohang/c_giohang.php';
                break;
         
        case 'address':
            include 'controller/giohang/c_address.php';
                break;

        case 'payment':
            include 'controller/giohang/c_payment.php';
                break;

        case 'complete':
            include 'controller/giohang/c_complete.php';
                break;
                                 
    }
    
?>
