<?php
if(isset($_SESSION['ss_admin'])){
    $data_danhmuc = $db -> get('danhmuc',array());
    
    $user = $db -> get('nhanvien', array());
        if ($user[0]['lv']==1) {

            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $user=$db->delete('danhmuc', array('id_danhmuc'=>$id));
                header ('location: ?page=danhmuc');
            }

        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
            window.history.back();</script>';
        }
}else{
    header('location: ?page=login');
}
    include "view/QuanLySanPham/danhmuc/v_danhmuc.php";
?>