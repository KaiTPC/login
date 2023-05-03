<?php
session_start();

$acc='admin';
$pw='123';

if ($_POST['acc'] == $acc && $_POST['pw'] == $pw) {
    echo "登入成功";
    $_SESSION['login'] = $acc;
}
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
else{
    // echo "帳號或密碼錯誤"

    $_SESSION['error']="帳號或密碼錯誤";
    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);
    }
}
// session login 加入session
// 只會有2個狀態:登入成功or登入帳密錯誤 
// 顯示在server端

header("locatiuon:login.php");


?>








