<?php

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['ss_user'])) {
    // Lấy thông tin người dùng từ session
    $user = $_SESSION['ss_user'];
    $id = $_SESSION['ss_id'];
    
    // Xử lý sự kiện cập nhật thông tin tài khoản
    if (isset($_POST['btn_upd'])) {
        // Lấy giá trị từ biểu mẫu POST
        $_POST['user'] = $_SESSION['ss_user'] ;
        $_POST['sdt'] = $_SESSION['ss_sdt'];
        $_POST['diachi'] = $_SESSION['ss_email'];
        $name = $_POST['user'];
        $sdt = $_POST['sdt'];
        $email = $_POST['diachi'];

        // Sử dụng câu lệnh SQL để cập nhật thông tin tài khoản
        $taikhoan = $db -> update('taikhoan',array(
            'name' => $name,
            'sdt' => $sdt,
            'email' => $email
        ), 
            array('id_user' => $id)   
        );
        
        $taikhoan = $db -> update('khach_hang',array(
            'name' => $name,
            'sdt' => $sdt,
            'email' => $email
        ), 
        array('id_kh' => $id)   
        );
        
    }
    } else {
    // Nếu người dùng chưa đăng nhập, chuyển hướng họ đến trang đăng nhập
    header("Location: ?controller=login");
    exit;
}

include "view/taikhoan/v_thongtintk.php";
?>