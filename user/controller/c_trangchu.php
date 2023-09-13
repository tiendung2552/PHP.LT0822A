<?php 
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
    $data_sanpham = $db->get_like('sanpham','tensanpham',$keyword) ;
    // $data_sanpham1= $db->get_like('sanpham','loaisanpham',$keyword) ; 
}else if($keyword=''){
        //Nếu trống thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'ao thun nam')); 
        $data_sanpham1=$db->get('sanpham', array('loaisanpham' => 'ao kieu nu')); 
}else{
    //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
    $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'ao thun nam')); 
    $data_sanpham1=$db->get('sanpham', array('loaisanpham' => 'ao kieu nu')); 
}
//sản phẩm nam
    $data_sanphamnam=$db->get('sanpham', array('loaisanpham' => 'Áo so mi nam')); 
    $data_sanphamnam1=$db->get('sanpham', array('loaisanpham' => 'Áo polo nam')); 
    $data_sanphamnam2=$db->get('sanpham', array('loaisanpham' => 'Quan jeans nam')); 
//sản phẩm nữ
    $data_sanphamnu=$db->get('sanpham', array('loaisanpham' => 'ao so mi nu')); 
    $data_sanphamnu1=$db->get('sanpham', array('loaisanpham' => 'ao kieu nu')); 
    $data_sanphamnu2=$db->get('sanpham', array('loaisanpham' => 'Quan jeans nu')); 
//sản phẩm trẻ em
    $data_sanphamtreem=$db->get('sanpham', array('id_danhmuc' => '7')); 
//sản phẩm chung 
    $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'ao thun nam')); 
    $data_sanpham1=$db->get('sanpham', array('loaisanpham' => 'ao kieu nu')); 
    //Kiểm tra xem có tồn tại keyword trên thanh url không
    
    include 'view/v_trangchu.php';
?>