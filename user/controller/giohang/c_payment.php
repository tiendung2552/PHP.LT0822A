<?php 
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_ct_donhang = $db->get('ct_donhang', array());
    $data_khach_hang = $db->get('khach_hang', array());
    $data_taikhoan = $db->get('taikhoan', array());
    $data_sanpham = $db->get('sanpham', array('id_sanpham' => $id));
    if (isset($_POST['btn_payment'])) {
        $user = $_POST['user'];
        $phone  =  $_POST['sdt'];
        $email = $_POST['email'];
        $address = $_POST['diachi'];
        $date = date('Y-m-d');
        $note = $_POST['payment_method'];
        $tinhtrang = 'Chưa duyệt';
        
        $data_donhang =  $db->get('donhang', array());
        foreach ($data_donhang as $key => $value){
            $id_dh = $value['id_donhang'];
        }
        foreach ($data_sanpham as $key => $value){
            $tensp = $value['tensanpham'];
            $don_gia = $value['gia'];
        }
       
       

        $totalQuantity = 0;
            if (isset($_SESSION['cartt'])) {
                foreach ($_SESSION['cartt'] as $key => $value) {
                        if (isset($value['tonkho']) && is_numeric($value['tonkho'])) {
                    $totalQuantity += $value['tonkho'];
                }
            }
        }
        
        $amount1 =0;
            foreach ($_SESSION['cartt'] as $key => $value) {
            $amount = $value['tonkho'] * $value['gia'];
            $amount1 += $amount;
            }
       
        $db->insert('donhang', array(
            'id_kh'=>$_SESSION['ss_id'],
            'tong'=>$amount1,
            'tinhtrang' => $tinhtrang,
        ),
        );
        $idup = $db -> insert_id();
        foreach ($_SESSION['cartt'] as $key => $value) {
            $amount = $value['tonkho'] * $value['gia'];
        
        $db->insert('ct_donhang', array(
            'id_donhang'=> $idup,
            'id_sanpham'=>$value['id_sanpham'],
            'tensanpham'=> $value['tensanpham'],
            'soluongsp'=>$totalQuantity,
            'don_gia'=>  $value['gia'],
            'amount' =>$amount,
            'ngaydat'=>$date,
            'ghichu' => $note,
        ),);
    }
         unset($_SESSION['cartt']);
            header('location: ?controller=complete');
    }
    
}
   

    include 'view/giohang/v_paymentt.php';
    
?>