<?php
   if (isset($_SESSION['ss_admin'])) {
	
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user=$db->delete('nhanvien', array('id'=>$id));
            header ('location: ?page=DsNhanVien');
        }
    }else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để xóa");
    window.history.back();</script>';
    }
    }else{
        header('location: ?page=DsNhanVien');

}
?>