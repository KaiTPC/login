<?php

session_start();
echo"已登出使用者".$_SESSION['name'];
// 刪除使用 unset 刪除變數
// 登出時 log in 也要刪除& header回登入頁
unset($_SESSION['name']);




?>

