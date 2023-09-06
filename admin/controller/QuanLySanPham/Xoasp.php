<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user=$db->delete('sanpham', array('id_sanpham'=>$id));
        header ('location: ?page=DsSanPham');
    }

?>