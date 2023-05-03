<h1>Cookie</h1>
<?php

 // send a cookie 比較少用 -->

// function setcookie();
// string 
 // 以目前時間往後加秒數 -->

 
// timezone有錯
date_default_timezone_get(" Asia /Taipei");
// 設定cookie
setcookie('name','kaidi',strtotime("2023/05/03"));

echo $_COOKIE['name'];


?>