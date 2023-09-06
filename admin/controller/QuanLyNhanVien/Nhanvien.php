<?php 
	//Kiểm tra xem có tồn tại keyword trên thanh url không
	if (isset($_GET['keyword'])) {
		$keyword = $_GET['keyword'];
		//Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $data_nhanvien = $db->get_like('nhanvien','full_name',$keyword);
	}else{
		//Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_nhanvien= $db->get('nhanvien', array());
	}
	require_once('./view/QuanLyNhanVien/NhanVien.php');
?>