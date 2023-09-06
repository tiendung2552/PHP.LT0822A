<?php 
    if(isset($_POST['btn_sign'])){
        
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
        if(!$loi){
            $db->insert('taikhoan', array(
            'name'=>$username,
            'pass'=>$password,
            'sdt'=>$phone,
            'email'=>$email,
            'ngaytao'=>$date,
            'diachi' => $address,
            'gioitinh'=>$gioitinh));
            
            $db->insert('khach_hang',array(
                'name' => $username,
                'sdt' => $phone,
                'email' => $email
            ));
        }
    
        if(!$loi){
            header('location: ?controller=login');
        }
    }
    
    include 'view/v_dangky.php';
    
?>