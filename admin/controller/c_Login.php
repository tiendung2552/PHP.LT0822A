<?php
    if(isset($_SESSION['ss_admin'])){
        header('location: ?page=trangchu');
    }
?>
<?php

    if(isset($_POST['btn_admin'] )){
        
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $loi = array();
        if($username == ''){
           $loi['user'] = 'username must no để trống';
        }
        if($password == ''){
            $loi['pass'] = 'pass must no để trống ';
        }
        if(!$loi){
            $password = md5($password);
            $nhanvien = $db -> get('nhanvien', array( 'user' => $username ));
            // var_dump($password);
            // die;
            if(empty($nhanvien) || ($password!=$nhanvien[0]['pass'])){
                $loi['user'] = 'Bạn đã nhập sai';
            }
        }
    
        if(!$loi){
            $_SESSION['ss_admin'] =  array(
                'full_name' => $nhanvien[0]['full_name'],
                'sodienthoai' => $nhanvien[0]['sodienthoai']
            );
           
            header('location: ?page=trangchu');
            
        }
    }

    include "./view/v_Login.php";
?>