<?php
   if (isset($_SESSION['ss_user'])) {
	

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $dh=$db->delete('donhang', array('id_donhang'=>$id));
            header ('location: ?controller=quanlidh');
        }

    }else{
        header('location: ?controller=quanlidh');

}
?>