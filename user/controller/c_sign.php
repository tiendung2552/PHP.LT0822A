<?php 


    if(isset($_POST['btn_sign'])){
        $id = $_SESSION['ss_id'];
        $username = $_POST['name'];
        $password = $_POST['pass'];
        $repass = $_POST['repass'];
        $phone = $_POST['sdt'];
        $address = $_POST['diachi'];
        $email = $_POST['email'];
        $date = date('Y-m-d');
        $gioitinh = $_POST['gioitinh'];
        $madd = $_POST['madd'];
        $loi = array();
        if($username == ''){
            $loi['user'] = 'user must no empty ';
        }
        if($password == ''){
            $loi['pass'] = 'pass must no empty';
        }
        if($repass == ''){
             $loi['repass'] = 'pass không trùng ';
        }
        if($phone == ''){
            $loi['phone'] = 'phone must no empty ';
        }
        if($email == ''){
            $loi['email'] = 'email must no empty ';
        }
        if($address == ''){
            $loi['diachi'] = 'address must no empty ';
        }
        if($gioitinh == ''){
            $loi['gioitinh'] = 'sex must no empty ';
        }
        if($madd == ''){
            $loi['madd'] = 'catcha must no empty ';
        }
        $mhmk = md5($repass);
        $user=$db->get('taikhoan', array('sdt' => $phone));
        if(empty($user)){ 
        if(!$loi){
            $db->insert('taikhoan', array(
            'name'=>$username,
            'pass'=>$mhmk,
            'sdt'=>$phone,
            'email'=>$email,
            'ngaytao'=>$date,
            'diachi' => $address,
            'gioitinh'=>$gioitinh));
            
            $db->insert('khach_hang',array(
                'name' => $username,
                'sdt' => $phone,
                'email' => $email,
                'diachi' => $address
            ));
            header('location: ?controller=login');
        }
    }else{
    echo "<script>alert ('Số điện thoại này đã tồn tại');
                window.history.back();</script>";
    }
             
}
    
    include 'view/v_dangky.php';
    
?>