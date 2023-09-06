<?php
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $data_sanpham=$db->get('sanpham', array('id_sanpham'=>$id));

    if (isset($_POST['btn_upd'])) {
    $id1 = $_POST['id'];
    $name = $_POST['tensanpham'];
    $price = $_POST['gia'];
    $trangthai = $_POST['trangthai'];
    $amount = $_POST['tonkho'];
    $xuatxu = $_POST['xuatxu'];
    $ngaytao = $_POST['ngaytao'];
    $nguoitao = $_POST['nguoitao'];
    $loaisp = $_POST['loaisanpham'];

   
    $image = $_FILES['img']['name'];
    $image_temp=$_FILES['img']['tmp_name'];
        
    if($image_temp != "")   
    {
        move_uploaded_file($image_temp, "../images/sanpham/$image" ); 
        $db->update('sanpham', array(
            'id_sanpham'=>$id1,
            'tensanpham'=>$name,
            'img'=>$image,
            'gia'=>$price,
            'trangthai'=>$trangthai,
            'tonkho'=>$amount,
            'xuatxu'=>$xuatxu,
            'ngaytao'=>$ngaytao,
            'nguoitao'=>$nguoitao,
            'loaisanpham'=>$loaisp
        ),
        array('id_sanpham' => $id));  
        
    }else
    {
        $db->update('sanpham', array(
            'id_sanpham'=>$id1,
            'tensanpham'=>$name,
            'gia'=>$price,
            'trangthai'=>$trangthai,
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
    include "./view/QuanLySanPham/Suasp.php";
?>