<?php 
if(isset($_SESSION['ss_user'])){

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
// if (isset($_GET['keyword'])) {
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    if(!empty($keyword)){
    //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
    $search = ['tensanpham', 'loaisanpham'];
    $data_sanpham = $db->get_like_like('sanpham',$search,$keyword) ;
    // var_dump($data_sanpham);
    // die;
    // $data_sanpham1= $db->get_like('sanpham','loaisanpham',$keyword) ; 
    }else{
    //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng
     $sanpham=$db->get('sanpham', array()); 
    /* Số lượng dữ liệu trên mỗi trang */
    $items_page = 20; 
    
    /* Số lượng dữ liệu trong cơ sở dữ liệu */
    $total_items = count($sanpham);
    /* Tính tổng số trang */
    global $total_pages;
    $total_pages = ceil($total_items / $items_page); 
    
    /* Xác định trang hiện tại và mặc định cho nó là trang 1 */
    $first_page = $_GET['first_page'] ?? 1; 
    /* Tính vị trí bắt đầu của sản phẩm trên trang hiện tại */
    $start = ($first_page - 1) * $items_page;
    $end = $first_page * $items_page;
    
    $data_sanpham = $db->get_limit('sanpham',array(),$start.','.$items_page);
    }

    //banner
    $banner = $db -> get('banner',array());
}else{
    header('location: ?controller=login');
}
    include 'view/v_trangchu.php';
?>
<?php
