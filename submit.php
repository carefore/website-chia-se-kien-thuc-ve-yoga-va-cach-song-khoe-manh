<?php
// Kết nối đến cơ sở dữ liệu - thay đổi thông tin để phù hợp với cài đặt của bạn
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ten_csdl";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO yoga_information (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Dữ liệu đã được gửi thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
