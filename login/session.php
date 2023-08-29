<h1> session </h1>

// 告訴apache,php要啟用 一次一個頁使用
<?php
// session_start() 函數的參數應該是一個陣列，用於配置會話的一些選項
session_start();

$_SESSION['name']='kaidi';

echo $_SESSION['name'];


?>

