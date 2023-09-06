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
            $nhanvien = $db -> get('nhanvien', array( 'user' => $username ));
            if(empty($nhanvien)){
                $loi['user'] = 'Username không tồn tại';
            }else{

            if($password!=$nhanvien[0]['pass']){
                $loi['pass'] = 'Sai password';
            }
        }
    }
        if(!$loi){
            $_SESSION['ss_admin'] = $nhanvien[0]['full_name'];
            $_SESSION['ss_admin1'] = $nhanvien[0]['id'];
            header('location: ?page=trangchu');
        }
}

    include "./view/Login.php";
?>