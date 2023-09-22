<?php 
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_sanpham = $db->get('sanpham', array('id_sanpham' => $id));
    if (isset($_POST['btn_payment'])) {
        $user = $_POST['user'];
        $phone  =  $_POST['sdt'];
        $address = $_POST['diachi'];
        $date = date('Y-m-d');
        $note = $_POST['payment_method'];
        $tinhtrang = 'Chưa duyệt';
  

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

            
        $db->update('khach_hang', array(
                'name'=>$user,
                'sdt'=>$phone,
            ),
            array('id_kh' => $_SESSION['ss_id'])
        );


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
            'payment' => $note,
        ),);
    }
    
        $db->update('ct_donhang', array(
            'diachi'=>$address,
        ),

        array('id_donhang' => $idup)
    );

         unset($_SESSION['cartt']);
            header('location: ?controller=complete');
    }
    
}
   

    include 'view/giohang/v_paymentt.php';
    
?>