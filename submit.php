<?php
// 连接到数据库
$db = mysqli_connect("hostname", "username", "password", "database_name");

// 检查连接是否成功
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// 获取表单数据
$name = $_POST["name"];
$message = $_POST["message"];

// 将数据插入到数据库中
$query = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";
mysqli_query($db, $query);

// 关闭数据库连接
mysqli_close($db);

// 重定向到留言板页面
header("Location: index.html");
?>
