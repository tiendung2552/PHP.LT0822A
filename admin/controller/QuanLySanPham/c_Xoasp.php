<?php
 if (isset($_SESSION['ss_admin'])) {
	
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {        
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // Lấy ID_size của sản phẩm trước khi xóa
        $sanpham = $db->get('sanpham', array('id_sanpham' => $id));
        $id_size = $sanpham[0]['Id_size'];
        // Xóa sản phẩm từ bảng sanpham
        $user=$db->delete('sanpham', array('id_sanpham'=>$id));
        // Xóa size tương ứng từ bảng size_product
        $size=$db->delete('size_product', array('Id_size' => $id_size));
        header ('location: ?page=DsSanPham');
    }
}else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
    window.history.back();</script>';
}
}

?>