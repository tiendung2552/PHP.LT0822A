<?php 
if (isset($_SESSION['ss_user'])) {
    header ('?controller = login');
}
    if (isset($_GET['controller'])) {
       
        $controller= $_GET['controller'];
        switch ($controller) {
            case 'product':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $product = $db->get('sanpham',array('id_sanpham' => $id));    
                    $size = $db -> get('size_product' ,array('Id_size' => $product[0]['Id_size']));
                    }
                    $data_sanpham=$db->get('sanpham', array('loaisanpham' => 'Áo thun nu')); 
                include 'view/v_product.php';
                break;


            case 'addcart':
                global $size;
                $id = $_GET['id'];
                $product=$db->get('sanpham', array('id_sanpham' => $id));
                $size = $_POST['size'];
                $sl = $_POST['sl'];
            //    print_r($size);
            //     print_r($sl);
            //     die;
            if($product[0]['tonkho'] == 0){
                echo '<script type="text/javascript">alert("Sản Phẩm đã hết");';
                echo 'window.location.href = "?controller=trangchu";</script>';
            } else {
                
                if (isset($_SESSION['cartt'])) {
                    if (isset($_SESSION['cartt'][$id])) {
                        $_SESSION['cartt'][$id]['tonkho'] += $sl;
                        
                        // var_dump($_SESSION['cartt'][$id]['tonkho'] );
                        // die;
                }else{
                    $_SESSION['cartt'][$id]['id_sanpham']    = $product[0]['id_sanpham'];
                    $_SESSION['cartt'][$id]['img']           = $product[0]['img'];
                    $_SESSION['cartt'][$id]['tensanpham']    = $product[0]['tensanpham'];
                    $_SESSION['cartt'][$id]['tonkho']        = $sl;
                    $_SESSION['cartt'][$id]['size']          = $size;
                    $_SESSION['cartt'][$id]['gia']           = $product[0]['gia'];
                  
                }
            } else {
                $_SESSION['cartt'][$id]['id_sanpham']        = $product[0]['id_sanpham'];
                $_SESSION['cartt'][$id]['img']               = $product[0]['img'];
                $_SESSION['cartt'][$id]['tensanpham']        = $product[0]['tensanpham'];
                $_SESSION['cartt'][$id]['tonkho']            = $sl;
                $_SESSION['cartt'][$id]['size']              = $size;
                $_SESSION['cartt'][$id]['gia']               = $product[0]['gia'];
                }
            
            header('location: ?controller=trangchu');
        }
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