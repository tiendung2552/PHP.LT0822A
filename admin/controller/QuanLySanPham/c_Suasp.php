<?php
if(isset($_SESSION['ss_admin'])){
$user=$db->get('nhanvien', array());
if ($user[0]['lv']==1 ) {
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data_sanpham = $db -> get_join('sanpham','danhmuc','size_product','sanpham','id_danhmuc','id_size',array('id_sanpham' => $id));
    // $data_sanpham=$db->get('sanpham', array('id_sanpham'=>$id));
    if (isset($_POST['btn_upd'])) {
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
    $size_M = $_POST['size_M'];
    $size_L = $_POST['size_L'];
    $size_XL = $_POST['size_XL'];
    $size_XXL = $_POST['size_XXL'];
   
    $image = $_FILES['img']['name'];
    $image_temp=$_FILES['img']['tmp_name'];
    // var_dump($id_danhmuc);
    // die;
       
    if($image_temp != "")   
    {
        move_uploaded_file($image_temp, "../images/sanpham/$image" ); 
        $db->update('sanpham', array(
            'tensanpham'=>$name,
            'img'=>$image,
            'gia'=>$price,
            'trangthai'=>$trangthai,
            'id_danhmuc' => $id_danhmuc,
            'tonkho'=>$amount,
            'xuatxu'=>$xuatxu,
            'ngaytao'=>$ngaytao,
            'nguoitao'=>$nguoitao,
            'loaisanpham'=>$loaisp
        ),
        array('id_sanpham' => $id)); 
    }else{
        $db->update('sanpham', array(
            'tensanpham'=>$name,
            'gia'=>$price,
            'trangthai'=>$trangthai,
            'id_danhmuc' => $id_danhmuc,
            'tonkho'=>$amount,
            'xuatxu'=>$xuatxu,
            'ngaytao'=>$ngaytao,
            'nguoitao'=>$nguoitao,
            'loaisanpham'=>$loaisp
              
        ),
        array('id_sanpham' => $id));
    }
 
    header('location: ?page=DsSanPham');
     }
 }
}else{
    echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
    window.history.back();</script>';
}
}else{
    header('location: ?page=login');
}
    include "./view/QuanLySanPham/v_Suasp.php";
?>