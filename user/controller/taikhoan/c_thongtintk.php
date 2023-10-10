<?php
    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    if (isset($_SESSION['ss_user'])) {
        // Lấy thông tin người dùng từ session
        $id = $_SESSION['ss_id'];
        $taikhoan = $db->get('taikhoan',array('id_user'=>$id));
    
        if(isset($_POST['upd_pass'])){

            $pass = $_POST['pass'];
            $newpass = $_POST['newpass'];
            $res_newpass = $_POST['res_newpass'];
           
            $loi = array();
            if (strpos($pass, ' ') !== false || strpos($newpass, ' ') !== false || strpos($res_newpass, ' ') !== false) {
                // $loi['thongtin'] = 'Mật khẩu không được chứa dấu cách';
                echo "<script>alert ('Mật khẩu không được chứa dấu cách');</script>";
            }

            if ($pass == '' || $newpass == '' || $res_newpass == '') {
                // $loi['thongtin'] = 'Không được để trống thông tin';
                echo "<script>alert ('Mật khẩu không được để trống');</script>";
            }

            if($newpass!=$res_newpass) {
                // $loi['thongtin'] = 'Mật khẩu mới không giống nhau';
                echo "<script>alert ('Mật khẩu mới khống giống nhau');</script>";
            }
        
            if(!$loi){
                $newpass = md5($newpass);
                $pass = md5($pass);
                if($pass!=$taikhoan[0]['pass']){
                    echo "<script>alert ('Mật khẩu không đúng');</script>";
                    // $loi['thongtin2'] = 'Mật khẩu không đúng';
                }
            }
           

            if(!$loi){
                $db->update('taikhoan', array(
                    'pass' => $newpass
                ),
                array('id_user'=>$id)
                
            );
            }
            
        }
        
        // Xử lý sự kiện cập nhật thông tin tài khoản
        if (isset($_POST['btn_upd'])) {
            // Lấy giá trị từ biểu mẫu POST
            $name = $_POST['name'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
           
        
            // Sử dụng câu lệnh SQL để cập nhật thông tin tài khoản
            $db -> update('taikhoan',array(
                'name' => $name,
                'sdt' => $sdt,
                'email' => $email
            ), 
                array('id_user'=> $id)   
            );
            
        }
        
        } else {
        // Nếu người dùng chưa đăng nhập, chuyển hướng họ đến trang đăng nhập
        header("Location: ?controller=login");
        exit;
    }

    include "view/taikhoan/v_thongtintk.php";
    ?>