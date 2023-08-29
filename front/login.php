<?php
// include_once('/comm.php');
$here = 'front';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* 先寫好html 再參考modal 改html &css */
        * {
            background: #6a11cb;
            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }

    </style>
</head>

<body>
    <?php include("header.php"); ?>
    <?php
    if (isset($_SESSION['login'])) {
        echo "Welcome";
        echo $_SESSION['login'];
        echo "<a href='logout.php'>登出</a>";
    } else {
    }
    ?>
    <form action="check.php" method="post">
        <div>
            <div style='color:aqua'>
                <?php
                if (isset($_SESSION['error'])) {
                    echo "wrong ID or Password!"

                ?>
                    <div class='input'>
                    
                        <label for="">帳號:</label>
                        <input type="text" name="acc" id="acc">
                    </div>
                    <div class='input'>
                        <label for="">密碼:</label>
                        <input type="password" name="pw" id="pw">
                    </div>
                    <div>
                        <input type="submit" value="login">
                    </div>
                    

            </div>
        </div>

    </form>

<?php
                }
?>
</body>

</html>