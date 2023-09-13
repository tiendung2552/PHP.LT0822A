<?php 
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $product = $db->get('sanpham',array('id_sanpham' => $id));
    if($product[0]['tonkho'] == 0){
        echo '<script type="text/javascript">alert("Sản Phẩm đã hết");
        window.history.back();</script>';
        header('?controller=trangchu');
    }
   
}
    $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'Áo thun nu')); 
    include 'view/v_product.php';
    
?>