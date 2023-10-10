<?php 
if(isset($_SESSION['ss_user'])){
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product = $db->get('sanpham',array('id_sanpham' => $id));
    $size = $db -> get('size_product' ,array('Id_size' => $product[0]['Id_size']));
    if($product[0]['tonkho'] == 0){
        echo '<script type="text/javascript">alert("Sản Phẩm đã hết");
        </script>';
        header('?controller=product');
    }
   
}
    $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'Áo thun nu')); 
}else{
    header('location: ?controller=login');
}
    include 'view/v_product.php';
    
?>