<?php
    if(isset($_SESSION['ss_admin'])){
        header('location: ?controller=trangchu');
    }
?>
<?php

    if(isset($_POST['btn_login'] )){
        
        $username = $_POST['phone'];
        $password = $_POST['pass'];
        $repass = $_POST['repass'];

        $loi = array();
        if($username == ''){
           $loi['phone'] = 'username must no để trống';
        }
        if($password == ''){
            $loi['pass'] = 'pass must no để trống ';
        }
        if($repass == ''){
            $loi['repass'] = 'pass không giống nhau';
        }
        if(!$loi){
            $taikhoan = $db -> get('taikhoan', array( 'sdt' => $username ));
            if(empty($taikhoan)){
                $loi['phone'] = 'Username không tồn tại';
            }else{

            if($password!=$taikhoan[0]['pass']){
                $loi['pass'] = 'Sai password';
            }
        }
    }
        if(!$loi){
            $_SESSION['ss_admin'] = $taikhoan[0]['full_name'];
            $_SESSION['ss_admin1'] = $taikhoan[0]['id'];
            header('location: ?controller=trangchu');
        }
}

    include "./view/v_dangnhap.php";
?>