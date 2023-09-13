<?php
 if (isset($_SESSION['ss_admin'])) {
	
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {        
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user=$db->delete('sanpham', array('id_sanpham'=>$id));
        header ('location: ?page=DsSanPham');
    }
}else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
    window.history.back();</script>';
}
}

?>