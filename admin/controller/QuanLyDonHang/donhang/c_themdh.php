<?php
if (isset($_SESSION['ss_admin'])) {
	
	$user=$db->get('nhanvien', array());

	if ($user[0]['lv']==1) {
        if(isset($_POST['btn_them'])){
    
            $username = $_POST['name'];
            $phone = $_POST['sdt'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $id_user = $_POST['id_user'];
            $id_sanpham = $_POST['id_sp'];
            $soluongsp = $_POST['sl'];
            $size = $_POST['size'];
            $ngaydat = date('Y-m-d');
            $ngaynhan = $_POST['ngaynhan'];   
            $payment = $_POST['payment'];
            $note = $_POST['note'];
            $tinhtrang = "1";
          
            $loi = array();
            if($username == '' && $phone == '' && $email == '' && $diachi == '' && $id_user == '' && $id_sanpham == '' 
            && $soluongsp == '' && $size == '' && $payment == '' && $note == '' ){
                $loi = 'Vui lòng điền tất cả thông tin ';
            }
            
            if(!$loi){
                $sanpham = $db->get('sanpham' ,array('id_sanpham' => $id_sanpham));
                $amount1 = 0;
                foreach ($sanpham as $key => $value) {
                    $amount = $value['gia'] * $soluongsp;
                    $amount1 += $amount;
                }

                $db->insert('khach_hang', array(
                    'id_user' => $id_user,
                    'name'=> $username,
                    'sdt'=> $phone,
                    'email'=> $email,
                    'diachi'=> $diachi
                ));

               
                $idup = $db -> insert_id();
                $db->insert('donhang', array(
                    'id_kh' => $idup,
                    'id_tinhtrang' => $tinhtrang,
                    'tong'=>$amount1
                ));

                $idup = $db -> insert_id();
                $db->insert('ct_donhang', array(
                    'id_donhang' => $idup,
                    'id_sanpham' => $id_sanpham,
                    'soluongsp' => $soluongsp,
                    'ngaydat' => $ngaydat,
                    'size' => $size,
                    'amount' => $amount,
                    'ngaynhan' => $ngaynhan,
                    'payment' => $payment,
                    'ghichu' => $note,
                ));
               

                    header('location: ?page=QuanlyDh');
                }
                 
        }
        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
            window.history.back();</script>';
        }
    }else{
        header('location: ?page=login');
}

    include "./view/QuanLyDonHang/donhang/v_themdh.php";
?>