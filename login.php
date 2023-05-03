<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
form > div {
    border: 1px solid lightgreen;
    box-shadow: 0 0 10px lightgreen;
    width: 400px;
    margin: 150px auto;
    padding: 20px;
    border-radius: 10px;
}
.input {
    margin: 10px;
}
.input input {
    border: 0;
    border-bottom: 1px solid gray;
}
input[type='submit'] {
    border: 0;
    background: lightskyblue;
    padding: 5px 15px;
    border-radius: 5px;
    /* display: inline-block; */
    /* margin: auto; */
}
input[type='submit']:hover {
    cursor: pointer;
    background-color: deepskyblue;
    color: yellow;
}

/* 用php if-else包起來 如果登入成功 登入失敗 */
/* 表單僅顯示在server端 沒有顯示在client端 */
/* if else跑一次 */
<?php
session_start();
if(isset($_SESSION['login'])){
// 刪去 if else

echo "登入成功!";
echo "歡迎，";
echo $_SESSION['login'];
echo "<a href='logout.php'>登出</a>";

}else{}
    ?>
    </style>
</head>
<body>
    <form action="check.php" method="post">
        <div>
            <div class='input'>
                <label for="">帳號:</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class='input'>
                <label for="">密碼:</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div>
                <input type="submit" value="登入">
            </div>
        </div>
    </form>
    
</body>
</html>
