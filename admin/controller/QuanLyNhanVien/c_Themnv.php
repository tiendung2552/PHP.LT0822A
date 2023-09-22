<?php
if (isset($_SESSION['ss_admin'])) {
	
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {
        if(isset($_POST['btn_them'])){
    
            $username = $_POST['user'];
            $password = md5($_POST['pass']);
            $fullname = $_POST['full_name'];
            $phone = $_POST['phone'];
            $lv = $_POST['lv'];

          
            $loi = array();
            if($username == ''){
                $loi['user'] = 'user must no để trống ';
            }
            if($password == ''){
                $loi['pass'] = 'pass must no để trống';
            }
            if($fullname == ''){
                $loi['full_name'] = 'full_name must no để trống ';
            }
            if($phone == ''){
                $loi['phone'] = 'phone must no để trống ';
            }
            if($lv == ''){
                $loi['lv'] = 'lv must no để trống ';
            }
            $user=$db->get('nhanvien', array('user' => $username));
            if(empty($user)){ 
            if(!$loi){
               
                $db->insert('nhanvien', array(
                'user'=>$username,
                'pass'=>$password,
                'full_name'=>$fullname,
                'sodienthoai'=>$phone,
                'lv'=>$lv));
                header('location: ?page=DsNhanVien');
                }
                   
            }else{
                echo "<script>alert ('User này đã tồn tại');
                window.history.back();</script>";
            }
        }
        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
            window.history.back();</script>';
        }
    }else{
        header('location: ?page=login');
}

    include "./view/QuanLyNhanVien/v_Themnv.php";
?>