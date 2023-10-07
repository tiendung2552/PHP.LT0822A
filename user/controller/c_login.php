
<?php
    if(isset($_SESSION['ss_user'])){
        header('location: ?controller=trangchu');
    }
?>
<?php

    if(isset($_POST['btn_login'] )){
        
        $username = $_POST['phone'];
        $password = $_POST['pass'];
       
        
        $loi = array();
        if($username == '' && $password == ''){
           $loi['thongtin'] = 'Không được để trống thông tin';
        }
       
        if(!$loi){
            $password = md5($password);
            $taikhoan = $db -> get('taikhoan', array( 'sdt' => $username ));
            if(empty($taikhoan) || ($password!=$taikhoan[0]['pass'])){
                $loi['thongtin'] = 'Bạn đã nhập sai';
            }
        }
    
        if(!$loi){
            $_SESSION['ss_id'] = $taikhoan[0]['id_user'];
            $_SESSION['ss_user'] = $taikhoan[0]['name'];
            $_SESSION['ss_sdt'] = $taikhoan[0]['sdt'];
            $_SESSION['ss_email'] = $taikhoan[0]['email'];
            $_SESSION['ss_diachi'] = $taikhoan[0]['diachi'];
            
            header('location: ?controller=trangchu');
        }
}

    include "./view/v_dangnhap.php";
?>