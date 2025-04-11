<?php
$server = "localhost";
$username = "root";
$password = ""; // Nếu MySQL có mật khẩu, điền vào đây
$dbname = "webbangiay";

// Tạo kết nối
$conn = new mysqli($server, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} else {
    echo "✅ Kết nối MySQL thành công!";
}
?>
