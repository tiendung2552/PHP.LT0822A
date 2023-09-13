<?php 
if (isset($_SESSION['ss_user'])) {
    header ('?controller = login');
}
    if (isset($_GET['controller'])) {
       
        $controller= $_GET['controller'];
        switch ($controller) {
            case 'addcart':
                $id = $_GET['id'];
                $product=$db->get('sanpham', array('id_sanpham' => $id));
                if (isset($_SESSION['cartt'])) {
                    if (isset($_SESSION['cartt'][$id])) {
                        $_SESSION['cartt'][$id]['tonkho'] += 1;
                     
                }else{
                    $_SESSION['cartt'][$id]['id_sanpham']    = $product[0]['id_sanpham'];
                    $_SESSION['cartt'][$id]['img']           = $product[0]['img'];
                    $_SESSION['cartt'][$id]['tensanpham']    = $product[0]['tensanpham'];
                    $_SESSION['cartt'][$id]['tonkho']        = 1;
                    $_SESSION['cartt'][$id]['gia']           = $product[0]['gia'];
                   
                }
            } else {
                $_SESSION['cartt'][$id]['id_sanpham']        = $product[0]['id_sanpham'];
                $_SESSION['cartt'][$id]['img']               = $product[0]['img'];
                $_SESSION['cartt'][$id]['tensanpham']        = $product[0]['tensanpham'];
                $_SESSION['cartt'][$id]['tonkho']            = 1;
                $_SESSION['cartt'][$id]['gia']               = $product[0]['gia'];
                }
      
            header('location: ?controller=trangchu');
                break;
               

                case 'changecart':
                    $method = $_GET['method'];
                    $id = $_GET['id'];
                    switch ($method) {
                        case 'giam':
                            $_SESSION['cartt'][$id]['tonkho'] -= 1;
                            if ($_SESSION['cartt'][$id]['tonkho'] == 0) {
                                unset($_SESSION['cartt'][$id]);
                            }
                            if (empty($_SESSION['cartt'])) {
                                unset($_SESSION['cartt']);
                            }
                            header('location: ?controller=giohang');
                            break;
                        case 'tang':
                            $_SESSION['cartt'][$id]['tonkho'] += 1;
                            header('location: ?controller=giohang');
                            break;
                    }
                    break;
                case 'dell':
                    if (isset($_GET['id'])) {
                        $product_id = $_GET['id'];
        
                        // Xóa Session ID của sản phẩm
                        unset($_SESSION['cartt'][$product_id]);
                        if (empty($_SESSION['cartt'])) {
                            unset($_SESSION['cartt']);
                        }
                        header('location: ?controller=giohang');
                    }
                   
                    break;
            case 'trangchu':
            header('location: ?controller=trangchu');
                break;
            default:
            # code...
            break;
        }
       
    }
    include 'view/giohang/v_Giohang.php';
 
    
?>