<?php
   if (isset($_SESSION['ss_user'])) {
	

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $dh=$db->get('donhang', array('id_donhang'=>$id));
            if($dh[0]['id_tinhtrang'] == 1){

                $dh=$db->delete('donhang', array('id_donhang'=>$id));
                header ('location: ?controller=quanlidh');

            }else{
                echo '<script type="text/javascript">alert("Bạn không thể hủy đơn hàng");
                window.history.back();</script>';
            }
            
        }

    }else{
        header('location: ?controller=quanlidh');

}
?>