<?php
    $serverName ="localhost";
    $userName ="root";
    $password ="";
    $databaseName = "pro_banhang";

        $conn =mysqli_connect($serverName, $userName, $password, $databaseName);
        if (!$conn) {
        echo "Kết nối thành công";
        exit();
    }
?>