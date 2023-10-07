<?php
if (isset($_SESSION['ss_admin'])) {
   
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {

        $id_ct = $_GET['id'];
        $donhang = $db -> get_join_3('donhang', 'ct_donhang','donhang', 'khach_hang', 'donhang','id_donhang','id_kh', 'donhang','id_donhang', $id_ct);

        if(isset($_POST['btn_upd'])){
           
            $username = $_POST['name'];
            $phone = $_POST['sdt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $id_sanpham = $_POST['id_sp'];
            $soluongsp = $_POST['sl'];
            $size = $_POST['size'];
            $ngaynhan = $_POST['ngaynhan'];   
            $payment = $_POST['payment'];
            $note = $_POST['note'];

            $sanpham = $db->get('sanpham' ,array('id_sanpham' => $id_sanpham));
            $amount1 = 0;
            foreach ($sanpham as $key => $value) {
                $amount = $value['gia'] * $soluongsp;
                $amount1 += $amount;
            }
            // var_dump($soluongsp);
            // die;
            $db->update('khach_hang', array(
                'name'=> $username,
                'sdt'=> $phone,
                'email'=> $email,
                'diachi'=> $diachi
            ),
            array('id_kh' => $donhang[0]['id_kh'])
        );

           
            $db->update('donhang', array(
                'tong'=>$amount1
            ),
            array('id_donhang' => $id_ct)
        );

            $db->update('ct_donhang', array(
                'id_sanpham' => $id_sanpham,
                'soluongsp' => $soluongsp,
                'size' => $size,
                'amount' => $amount,
                'ngaynhan' => $ngaynhan,
                'payment' => $payment,
                'ghichu' => $note,
            ),
            array('id_donhang' => $donhang[0]['id_donhang'])
        );
        
        header('location: ?page=QuanlyDh');   
        }
        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
            window.history.back();</script>';
        }
    }else{
        header('location: ?page=login');
}

    include "./view/QuanLyDonHang/donhang/v_suadh.php";
?>