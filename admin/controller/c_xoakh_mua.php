<?php

	
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user=$db->delete('khach_hang', array('id_kh'=>$id));
            header ('location: ?page=khachmuahang');
        }
    }else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để xóa");
    window.history.back();</script>';
    }
    
?>