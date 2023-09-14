<?php
if (isset($_SESSION['ss_admin'])) {
	
$user=$db->get('nhanvien', array());
if ($user[0]['lv']==1) {
 if(isset($_POST['btn_them'])){
        
    $id1 = $_POST['id'];
    $name = $_POST['tensanpham'];
    $price = $_POST['gia'];
    $trangthai = $_POST['trangthai'];
    $id_danhmuc = $_POST['id_danhmuc'];
    $amount = $_POST['tonkho'];
    $xuatxu = $_POST['xuatxu'];
    $ngaytao = date('Y-m-d');
    $nguoitao = $_POST['nguoitao'];
    $loaisp = $_POST['loaisanpham'];

    
    $image = $_FILES['images']['name'];
    $image_temp = $_FILES['images']['tmp_name'];
  
    move_uploaded_file($image_temp, "../images/sanpham/$image" ); 
    $loi = array();
    if($name == '' && $price =='' && $trangthai =='' && $id_danhmuc =='' && $amount =='' && $xuatxu =='' 
    && $ngaytao =='' && $loaisp  ==''){
        $loi['user'] = 'không được để trống thông tin';
     }
    
    
    if(!$loi){
        $db->insert('sanpham', array(
            'tensanpham'=>$name,
            'img'=>$image,
            'gia'=>$price,
            'trangthai'=>$trangthai,
            'id_danhmuc' => $id_danhmuc,
            'tonkho'=>$amount,
            'xuatxu'=>$xuatxu,
            'ngaytao'=>$ngaytao,
            'nguoitao'=>$nguoitao,
            'loaisanpham'=>$loaisp)
        );
    
    if(!$loi){
        header('location: ?page=DsSanPham');
    }
}
 }
 }else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
    window.history.back();</script>';
}
}
    include "./view/QuanLySanPham/Themsp.php";
?>