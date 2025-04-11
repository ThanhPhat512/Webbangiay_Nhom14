<?php
    $username = "root";
    $password = "";
    $server = "localhost";
    $dbname = "webbanhang";
    
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli($server, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        // Nếu kết nối không thành công, hiển thị thông báo lỗi và kết thúc chương trình
        die("Không thể kết nối: " . $conn->connect_error);
    }
?>