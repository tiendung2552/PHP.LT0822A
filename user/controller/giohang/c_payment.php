<?php 
   if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data_sanpham = $db->get('sanpham', array('id_sanpham' => $id));
    if (isset($_POST['btn_payment'])) {
        $user = $_POST['user'];
        $phone  =  $_POST['sdt'];
        $address = $_POST['diachi'];
        $email = $_POST['email'];
        $date = date('Y-m-d');
        $date_nhan = $_POST['ngaynhan'];
        $payment = $_POST['payment_method'];
        $note = $_POST['note'];
//   var_dump($date_nhan);
//   die;

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

        
        $db->insert('khach_hang', array(
                'id_user' => $_SESSION['ss_id'],
                'name'=>$user,
                'sdt'=>$phone,
                'email'=>$email,
                'diachi' => $address
            ),
        );
        $khach_hang =$db -> get('khach_hang', array());
        foreach ($khach_hang as $key => $value){
            $id_kh = $value['id_kh'];
        }
        $tinhtrang = 1;
        $db->insert('donhang', array(
            'id_kh'=>  $id_kh,
            'tong'=>$amount1,
            'id_tinhtrang' => $tinhtrang,
        ),
        
        );
   
        $idup = $db -> insert_id();
        foreach ($_SESSION['cartt'] as $key => $value) {
            $amount = $value['tonkho'] * $value['gia'];
        
        $db->insert('ct_donhang', array(
            'id_donhang'=> $idup,
            'id_sanpham'=>$value['id_sanpham'],
            'soluongsp'=>$value['tonkho'],
            'amount' =>$amount,
            'size' =>$value['size'],
            'ngaydat'=>$date,
            'ngaynhan' =>$date_nhan,
            'payment' => $payment,
            'ghichu' => $note
        ),);
    }
    


         unset($_SESSION['cartt']);
            header('location: ?controller=complete');
    }
    
}
   

    include 'view/giohang/v_paymentt.php';
    
?>