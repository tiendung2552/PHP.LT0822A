<?php
    if(isset($_SESSION['ss_admin'])) {
	
	$user=$db->get('nhanvien', array());

        if ($user[0]['lv']==1) {
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $user = $db->get('nhanvien', array('id'=>$id));

                if (isset($_POST['btn_upd'])) {
                    $id1 = $_POST['id'];
                    $username = $_POST['user'];
                    $password = $_POST['pass'];
                    $phone = $_POST['phone'];
                    $full_name = $_POST['full_name'];
                    $lv = $_POST['lv'];
                    
                    
                    $db->update('nhanvien', array(
                        'id' =>$id1,  
                        'user'=>$username,
                        'pass'=>$password,
                        'sodienthoai'=>$phone,
                        'full_name'=>$full_name,
                        'lv'=>$lv
                        
                        ),
                        array('id' => $id)
                    );
                    header('location: ?page=DsNhanVien');
                }

            }
        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để sửa");
            window.history.back();</script>';
        }
    }else{
        header('location: ?page=DsNhanVien');
        }
    include "./view/QuanLyNhanVien/Suanv.php";
?>