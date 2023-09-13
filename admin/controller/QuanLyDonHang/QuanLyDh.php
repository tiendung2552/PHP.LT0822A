<?php
   
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        //Nếu có tồn tại thì mình sẽ lấy dữ liệu theo tên người dùng tìm kiếm
        $data_donhang = $db->get_like('donhang','id_kh',$keyword) ;
    }else if($keyword=''){
            //Nếu trống thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_donhang = $db->get('donhang', array());
    }else{
         //Nếu không tồn tại thì sẽ lấy tất cả dữ liệu trong bảng product
        $data_donhang = $db->get('donhang', array());
    }
    $user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
    $data_ct_donhang = $db -> delete('ct_donhang' ,array('id_donhang' => $id));
            header ('location: ?page=ct_donhang');
        }
    }else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để xóa");
    window.history.back();</script>';
    }
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    $data_donhang = $db->get('donhang', array('id_donhang' => $id));
    if(isset($_POST['upd'])){
        $tinhtrang = 'Đã duyệt';
       
        $data_donhang = $db -> update('donhang', array(
            'tinhtrang' => $tinhtrang
        ),
        array('id_donhang' => $id)
    );
    }
    header('?controller=QuanLyDh');
}
    include "view/QuanLyDonHang/QuanLyDh.php";
?>