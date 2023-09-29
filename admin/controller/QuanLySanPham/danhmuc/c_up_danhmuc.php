<?php
if(isset($_SESSION['ss_admin'])){
    $user = $db -> get('nhanvien', array());
        if ($user[0]['lv']==1) {

            $id = $_GET['id'];
            $data_danhmuc = $db -> get('danhmuc', array('id_danhmuc' => $id)); 
            if(isset($_POST['up_danhmuc'])){
                $danhmuc = $_POST['danhmuc'];

                $db->update('danhmuc', array(
                    'danhmuc'=>$danhmuc ),
                array('id_danhmuc' => $id)
                );
                // var_dump($danhmuc);
                // die;
                    header('location: ?page=danhmuc');

            }

        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
            window.history.back();</script>';
        }
}else{
    header('location: ?page=login');
}
    include "view/QuanLySanPham/danhmuc/v_up_danhmuc.php";
?>