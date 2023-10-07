<?php
    if(isset($_SESSION['ss_admin'])){
        $id = $_GET['id'];
        $sanpham = $db -> get('sanpham', array('id_sanpham' => $id));
        
        foreach ($sanpham as $key => $value) {
            $soluongsp = $value['tonkho'];
            $soluongsp1 = $soluongsp --;
            $sp_daban = $value['daban'];
            $daban = $sp_daban ++ ;
            $db -> update('sanpham', array(
                'daban' => $daban,
                'tonkho' => $soluongsp1
            ),
        array('id_sanpham' => $id)
        );
        header('location: ?page=QuanlyDh');
    }
}else{
    header('location: ?page=login');
}

?>
