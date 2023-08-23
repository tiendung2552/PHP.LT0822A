<?php 
    session_start();
    include 'model/m_database.php';
    $db = new database();

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
else{
    $controller = 'trangchu';}

    switch ($controller){
        case 'trangchu':
            include 'controller/c_trangchu.php';
            break;

        case 'spnu':
            include 'controller/c_spnu.php';
            break;  

         case 'spnam':
            include 'controller/c_spnam.php';
            break;  

        case 'product':
            include 'controller/c_product.php';
                break;
         
    }
    
?>
