<?php
@include_once "config.php";
// 创建连接
$conn = new mysqli($serverName, $userName, $password,$dataBase);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
?>